<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMemberProfileRequest;
use App\Http\Requests\UpdateMemberProfileRequest;
use App\Repositories\MemberProfileRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MemberProfileController extends AppBaseController
{

    /** @var  MemberProfileRepository */
    private $memberProfileRepository;

    public function __construct(MemberProfileRepository $memberProfileRepo)
    {
      $this->middleware('auth');
      $this->memberProfileRepository = $memberProfileRepo;
    }

    /**
     * Display a listing of the MemberProfile.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

      if(!$request->user()->hasRole(['member'])){
        return view('welcome');
      }

      $this->memberProfileRepository->pushCriteria(new RequestCriteria($request));
      $memberProfiles = $this->memberProfileRepository->all();

      return view('member_profiles.index')
          ->with('memberProfiles', $memberProfiles);
    }

    /**
     * Show the form for creating a new MemberProfile.
     *
     * @return Response
     */
    public function create(Request $request)
    {
      if(!$request->user()->hasRole(['member'])){
        return view('welcome');
      }

        return view('member_profiles.create');
    }

    /**
     * Store a newly created MemberProfile in storage.
     *
     * @param CreateMemberProfileRequest $request
     *
     * @return Response
     */
    public function store(CreateMemberProfileRequest $request)
    {
        $input = $request->all();

        $memberProfile = $this->memberProfileRepository->create($input);

        Flash::success('Member Profile saved successfully.');

        return redirect(route('member.home'));
    }

    /**
     * Display the specified MemberProfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id,Request $request)
    {
      if(!$request->user()->hasRole(['member'])){
        return view('welcome');
      }

        $memberProfile = $this->memberProfileRepository->findWithoutFail($id);

        if (empty($memberProfile)) {
            Flash::error('Member Profile not found');

            return redirect(route('member.home'));
        }

        return view('member_profiles.show')->with('memberProfile', $memberProfile);
    }

    /**
     * Show the form for editing the specified MemberProfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id,Request $request)
    {
      if(!$request->user()->hasRole(['member'])){
        return view('welcome');
      }
      
        $memberProfile = $this->memberProfileRepository->findWithoutFail($id);

        if (empty($memberProfile)) {
            Flash::error('Member Profile not found');

            return redirect(route('member.home'));
        }
        return view('member_profiles.edit')->with('memberProfile', $memberProfile);
    }

    /**
     * Update the specified MemberProfile in storage.
     *
     * @param  int              $id
     * @param UpdateMemberProfileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMemberProfileRequest $request)
    {
        $memberProfile = $this->memberProfileRepository->findWithoutFail($id);

        if (empty($memberProfile)) {
            Flash::error('Member Profile not found');

            return redirect(route('member.home'));
        }
        $memberProfile = $this->memberProfileRepository->update($request->all(), $id);

        Flash::success('Member Profile updated successfully.');

        return redirect(route('member.home'));
    }

    /**
     * Remove the specified MemberProfile from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $memberProfile = $this->memberProfileRepository->findWithoutFail($id);

        if (empty($memberProfile)) {
            Flash::error('Member Profile not found');

            return redirect(route('member.home'));
        }

        $this->memberProfileRepository->delete($id);

        Flash::success('Member Profile deleted successfully.');

        return redirect(route('member.home'));
    }
}
