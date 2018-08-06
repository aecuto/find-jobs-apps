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

use Auth;
use DB;

use App\Models\MemberProfile;
use App\User;

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

      if(!$request->user()->authorizeRoles(['admin'])){
        return redirect('/');
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
      if(!$request->user()->authorizeRoles(['admin'])){
        return back();
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

      $memberProfile = $this->memberProfileRepository->findWithoutFail($id);

      if (empty($memberProfile)) {
          Flash::error('Member Profile not found');

          return redirect(route('member.home'));
      }

      $user_id = Auth::user()->id;
      $member = MemberProfile::where("user_id", $user_id)->where("id", $id)->first();
      if($member || Auth::user()->hasRole(['manager'])){
        return view('member_profiles.show')->with('memberProfile', $memberProfile);
      }

      return back();
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
        $memberProfile = $this->memberProfileRepository->findWithoutFail($id);

        if (empty($memberProfile)) {
            Flash::error('Member Profile not found');

            return redirect(route('member.home'));
        }

      $user_id = Auth::user()->id;
      $member = MemberProfile::where("user_id", $user_id)->where("id", $id)->first();
      if($member){
        return view('member_profiles.edit')->with('memberProfile', $memberProfile);
      }

      return back();
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

        $image_binary = base64_encode(file_get_contents($request->file('image')->path()));

        $memberProfile->image = $image_binary;
        $memberProfile->save();

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

        $user_id = MemberProfile::where('id', $id)->first()->user_id;

        User::where('id',$user_id)->delete();

        //$this->memberProfileRepository->delete($id);

        Flash::success('Member Profile deleted successfully.');

        return back();
    }

    public function stared(){
      $user = Auth::user()->member_star->all();
      return view('member_profiles.show_stared')->with('stars', $user);
    }
    public function registered(){
      $user = Auth::user()->member_register->all();
      return view('member_profiles.show_registered')->with('registers', $user);
    }

    public function my_resume(){
      $member_profile_id = Auth::user()->member_profile->id;
      $sql = "select * from companies where user_id IN (SELECT user_id FROM `manager_member_profile` WHERE member_profile_id= ".$member_profile_id.");";

      $companies = DB::select($sql);

      return view('member_profiles.my_resume')->with('companies', $companies);
    }
}
