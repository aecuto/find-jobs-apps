<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateannouncementsRequest;
use App\Http\Requests\UpdateannouncementsRequest;
use App\Repositories\announcementsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;
use App\Models\announcements;

class announcementsController extends AppBaseController
{
    /** @var  announcementsRepository */
    private $announcementsRepository;

    public function __construct(announcementsRepository $announcementsRepo)
    {
      $this->announcementsRepository = $announcementsRepo;
    }

    /**
     * Display a listing of the announcements.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->announcementsRepository->pushCriteria(new RequestCriteria($request));

        $announcements = announcements::where('status',1)->orderBy('created_at', 'DESC')->get();

        if(Auth::user()){
          if(Auth::user()->hasRole(['admin'])){
           $announcements = $this->announcementsRepository->all();
          }
        }

            return view('announcements.index')
            ->with('announcements', $announcements);

    }

    /**
     * Show the form for creating a new announcements.
     *
     * @return Response
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created announcements in storage.
     *
     * @param CreateannouncementsRequest $request
     *
     * @return Response
     */
    public function store(CreateannouncementsRequest $request)
    {
        $input = $request->all();

        $announcements = $this->announcementsRepository->create($input);

        Flash::success('Announcements saved successfully.');

        return redirect(route('announcements.index'));
    }

    /**
     * Display the specified announcements.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $announcements = $this->announcementsRepository->findWithoutFail($id);

        if (empty($announcements)) {
            Flash::error('Announcements not found');

            return redirect(route('announcements.index'));
        }

        return view('announcements.show')->with('announcements', $announcements);
    }

    /**
     * Show the form for editing the specified announcements.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $announcements = $this->announcementsRepository->findWithoutFail($id);

        if (empty($announcements)) {
            Flash::error('Announcements not found');

            return redirect(route('announcements.index'));
        }

        return view('announcements.edit')->with('announcements', $announcements);
    }

    /**
     * Update the specified announcements in storage.
     *
     * @param  int              $id
     * @param UpdateannouncementsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateannouncementsRequest $request)
    {
        $announcements = $this->announcementsRepository->findWithoutFail($id);

        if (empty($announcements)) {
            Flash::error('Announcements not found');

            return redirect(route('announcements.index'));
        }

        $announcements = $this->announcementsRepository->update($request->all(), $id);

        Flash::success('Announcements updated successfully.');

        return redirect(route('announcements.index'));
    }

    /**
     * Remove the specified announcements from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $announcements = $this->announcementsRepository->findWithoutFail($id);

        if (empty($announcements)) {
            Flash::error('Announcements not found');

            return redirect(route('announcements.index'));
        }

        $this->announcementsRepository->delete($id);

        Flash::success('Announcements deleted successfully.');

        return redirect(route('announcements.index'));
    }

    public function confirm($id){
      $announcements = $this->announcementsRepository->findWithoutFail($id);
      $announcements->status = 1;
      $announcements->save();

      Flash::success('Announcements confirm successfully.');
      return redirect(route('announcements.index'));

    }
}
