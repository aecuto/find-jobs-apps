<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use App\Repositories\ContactUsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Auth;

class ContactUsController extends AppBaseController
{
    /** @var  ContactUsRepository */
    private $contactUsRepository;

    public function __construct(ContactUsRepository $contactUsRepo)
    {
        $this->contactUsRepository = $contactUsRepo;
    }

    /**
     * Display a listing of the ContactUs.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contactUsRepository->pushCriteria(new RequestCriteria($request));
        $contactuses = $this->contactUsRepository->all();

        if(Auth::user()){
          if(Auth::user()->hasRole(['admin'])){
            return view('contactuses.index')
            ->with('contactuses', $contactuses);
          }
        }

        Flash::success('Contact was send successfully.');

        return back();
    }

    /**
     * Show the form for creating a new ContactUs.
     *
     * @return Response
     */
    public function create()
    {
        return view('contactuses.create');
    }

    /**
     * Store a newly created ContactUs in storage.
     *
     * @param CreateContactUsRequest $request
     *
     * @return Response
     */
    public function store(CreateContactUsRequest $request)
    {
        $input = $request->all();

        $contactUs = $this->contactUsRepository->create($input);

        Flash::success('Contact Us saved successfully.');

        return redirect(route('contactuses.index'));
    }

    /**
     * Display the specified ContactUs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);

        if (empty($contactUs)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactuses.index'));
        }

        return view('contactuses.show')->with('contactUs', $contactUs);
    }

    /**
     * Show the form for editing the specified ContactUs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);

        if (empty($contactUs)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactuses.index'));
        }

        return view('contactuses.edit')->with('contactUs', $contactUs);
    }

    /**
     * Update the specified ContactUs in storage.
     *
     * @param  int              $id
     * @param UpdateContactUsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactUsRequest $request)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);

        if (empty($contactUs)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactuses.index'));
        }

        $contactUs = $this->contactUsRepository->update($request->all(), $id);

        Flash::success('Contact Us updated successfully.');

        return redirect(route('contactuses.index'));
    }

    /**
     * Remove the specified ContactUs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);

        if (empty($contactUs)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactuses.index'));
        }

        $this->contactUsRepository->delete($id);

        Flash::success('Contact Us deleted successfully.');

        return redirect(route('contactuses.index'));
    }

    public function markread($id)
    {
      $contactUs = $this->contactUsRepository->findWithoutFail($id);
      $contactUs->read = true;
      $contactUs->save();

      return redirect(route('contactuses.index'));
    }

}
