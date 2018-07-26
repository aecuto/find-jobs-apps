<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobPositionRequest;
use App\Http\Requests\UpdateJobPositionRequest;
use App\Repositories\JobPositionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Auth;
use App\Models\company;
use App\Models\JobPosition;

class JobPositionController extends AppBaseController
{
    /** @var  JobPositionRepository */
    private $jobPositionRepository;

    public function __construct(JobPositionRepository $jobPositionRepo)
    {
        $this->jobPositionRepository = $jobPositionRepo;
    }

    /**
     * Display a listing of the JobPosition.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobPositionRepository->pushCriteria(new RequestCriteria($request));
        $jobPositions = $this->jobPositionRepository->all();

        return view('job_positions.index')
            ->with('jobPositions', $jobPositions);
    }

    /**
     * Show the form for creating a new JobPosition.
     *
     * @return Response
     */
    public function create()
    {
        return view('job_positions.create');
    }

    /**
     * Store a newly created JobPosition in storage.
     *
     * @param CreateJobPositionRequest $request
     *
     * @return Response
     */
    public function store(CreateJobPositionRequest $request)
    {
        $input = $request->all();

        $company_id = company::where('user_id', Auth::user()->id)->first()->id;

        $jobPosition = $this->jobPositionRepository->create($input + [ 'company_id' => $company_id ]);

        Flash::success('Job Position saved successfully.');

        return redirect(route('manager.home'));
    }

    /**
     * Display the specified JobPosition.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobPosition = $this->jobPositionRepository->findWithoutFail($id);

        if (empty($jobPosition)) {
            Flash::error('Job Position not found');

            return redirect(route('manager.home'));
        }

        return view('job_positions.show')->with('jobPosition', $jobPosition);
    }

    /**
     * Show the form for editing the specified JobPosition.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobPosition = $this->jobPositionRepository->findWithoutFail($id);

        if (empty($jobPosition)) {
            Flash::error('Job Position not found');

            return redirect(route('manager.home'));
        }

        return view('job_positions.edit')->with('jobPosition', $jobPosition);
    }

    /**
     * Update the specified JobPosition in storage.
     *
     * @param  int              $id
     * @param UpdateJobPositionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobPositionRequest $request)
    {
        $jobPosition = $this->jobPositionRepository->findWithoutFail($id);

        if (empty($jobPosition)) {
            Flash::error('Job Position not found');

            return redirect(route('manager.home'));
        }

        $jobPosition = $this->jobPositionRepository->update($request->all(), $id);

        Flash::success('Job Position updated successfully.');

        return redirect(route('manager.home'));
    }

    /**
     * Remove the specified JobPosition from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobPosition = $this->jobPositionRepository->findWithoutFail($id);

        if (empty($jobPosition)) {
            Flash::error('Job Position not found');

            return redirect(route('manager.home'));
        }

        $this->jobPositionRepository->delete($id);

        Flash::success('Job Position deleted successfully.');

        return redirect(route('manager.home'));
    }

    public function register($id)
    {

      $user = Auth::user();
      $user->member_register()->attach(JobPosition::where('id', $id)->first());

      $jobPosition = JobPosition::find($id);

      return view('job_positions.show')->with('jobPosition', $jobPosition);;
    }

    public function star($id)
    {

      $user = Auth::user();
      $user->member_star()->attach(JobPosition::where('id', $id)->first());
      
      $jobPosition = JobPosition::find($id);
      
      return view('job_positions.show')->with('jobPosition', $jobPosition);;
    }

}
