<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdvertisingRequest;
use App\Http\Requests\UpdateAdvertisingRequest;
use App\Repositories\AdvertisingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class AdvertisingController extends AppBaseController
{
    /** @var  AdvertisingRepository */
    private $advertisingRepository;

    public function __construct(AdvertisingRepository $advertisingRepo)
    {
        $this->advertisingRepository = $advertisingRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Advertising.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->advertisingRepository->pushCriteria(new RequestCriteria($request));
        $advertisings = $this->advertisingRepository->all();

        return view('advertisings.index')
            ->with('advertisings', $advertisings);
    }

    /**
     * Show the form for creating a new Advertising.
     *
     * @return Response
     */
    public function create()
    {
      if(Auth::user()){
        if(!Auth::user()->hasRole(['admin'])){
          return redirect("/");
        }
      }
      
        return view('advertisings.create');
    }

    /**
     * Store a newly created Advertising in storage.
     *
     * @param CreateAdvertisingRequest $request
     *
     * @return Response
     */
    public function store(CreateAdvertisingRequest $request)
    {
        $input = $request->all();

        $advertising = $this->advertisingRepository->create($input);

        Flash::success('Advertising saved successfully.');

        return redirect(route('advertisings.index'));
    }

    /**
     * Display the specified Advertising.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $advertising = $this->advertisingRepository->findWithoutFail($id);

        if (empty($advertising)) {
            Flash::error('Advertising not found');

            return redirect(route('advertisings.index'));
        }

        return view('advertisings.show')->with('advertising', $advertising);
    }

    /**
     * Show the form for editing the specified Advertising.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
      if(Auth::user()){
        if(!Auth::user()->hasRole(['admin'])){
          return redirect("/");
        }
      }

        $advertising = $this->advertisingRepository->findWithoutFail($id);

        if (empty($advertising)) {
            Flash::error('Advertising not found');

            return redirect(route('advertisings.index'));
        }

        return view('advertisings.edit')->with('advertising', $advertising);
    }

    /**
     * Update the specified Advertising in storage.
     *
     * @param  int              $id
     * @param UpdateAdvertisingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdvertisingRequest $request)
    {
        $advertising = $this->advertisingRepository->findWithoutFail($id);

        if (empty($advertising)) {
            Flash::error('Advertising not found');

            return redirect(route('advertisings.index'));
        }

        $advertising = $this->advertisingRepository->update($request->all(), $id);

        Flash::success('Advertising updated successfully.');

        return redirect(route('advertisings.index'));
    }

    /**
     * Remove the specified Advertising from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $advertising = $this->advertisingRepository->findWithoutFail($id);

        if (empty($advertising)) {
            Flash::error('Advertising not found');

            return redirect(route('advertisings.index'));
        }

        $this->advertisingRepository->delete($id);

        Flash::success('Advertising deleted successfully.');

        return redirect(route('advertisings.index'));
    }
}
