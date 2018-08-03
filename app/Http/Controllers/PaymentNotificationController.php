<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentNotificationRequest;
use App\Http\Requests\UpdatePaymentNotificationRequest;
use App\Repositories\PaymentNotificationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaymentNotificationController extends AppBaseController
{
    /** @var  PaymentNotificationRepository */
    private $paymentNotificationRepository;

    public function __construct(PaymentNotificationRepository $paymentNotificationRepo)
    {
        $this->paymentNotificationRepository = $paymentNotificationRepo;
    }

    /**
     * Display a listing of the PaymentNotification.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentNotificationRepository->pushCriteria(new RequestCriteria($request));
        $paymentNotifications = $this->paymentNotificationRepository->all();

        return view('payment_notifications.index')
            ->with('paymentNotifications', $paymentNotifications);
    }

    /**
     * Show the form for creating a new PaymentNotification.
     *
     * @return Response
     */
    public function create()
    {
        return view('payment_notifications.create');
    }

    /**
     * Store a newly created PaymentNotification in storage.
     *
     * @param CreatePaymentNotificationRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentNotificationRequest $request)
    {
        $input = $request->all();

        $paymentNotification = $this->paymentNotificationRepository->create($input);

        Flash::success('Payment Notification saved successfully.');

        return redirect(route('paymentNotifications.index'));
    }

    /**
     * Display the specified PaymentNotification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paymentNotification = $this->paymentNotificationRepository->findWithoutFail($id);

        if (empty($paymentNotification)) {
            Flash::error('Payment Notification not found');

            return redirect(route('paymentNotifications.index'));
        }

        return view('payment_notifications.show')->with('paymentNotification', $paymentNotification);
    }

    /**
     * Show the form for editing the specified PaymentNotification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paymentNotification = $this->paymentNotificationRepository->findWithoutFail($id);

        if (empty($paymentNotification)) {
            Flash::error('Payment Notification not found');

            return redirect(route('paymentNotifications.index'));
        }

        return view('payment_notifications.edit')->with('paymentNotification', $paymentNotification);
    }

    /**
     * Update the specified PaymentNotification in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentNotificationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentNotificationRequest $request)
    {
        $paymentNotification = $this->paymentNotificationRepository->findWithoutFail($id);

        if (empty($paymentNotification)) {
            Flash::error('Payment Notification not found');

            return redirect(route('paymentNotifications.index'));
        }

        $paymentNotification = $this->paymentNotificationRepository->update($request->all(), $id);

        Flash::success('Payment Notification updated successfully.');

        return redirect(route('paymentNotifications.index'));
    }

    /**
     * Remove the specified PaymentNotification from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paymentNotification = $this->paymentNotificationRepository->findWithoutFail($id);

        if (empty($paymentNotification)) {
            Flash::error('Payment Notification not found');

            return redirect(route('paymentNotifications.index'));
        }

        $this->paymentNotificationRepository->delete($id);

        Flash::success('Payment Notification deleted successfully.');

        return redirect(route('paymentNotifications.index'));
    }
}
