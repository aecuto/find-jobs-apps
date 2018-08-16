<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepackageRequest;
use App\Http\Requests\UpdatepackageRequest;
use App\Repositories\packageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class packageController extends AppBaseController
{
    /** @var  packageRepository */
    private $packageRepository;

    public function __construct(packageRepository $packageRepo)
    {
        $this->packageRepository = $packageRepo;
    }

    /**
     * Display a listing of the package.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packageRepository->pushCriteria(new RequestCriteria($request));
        $packages = $this->packageRepository->all();

        return view('packages.index')
            ->with('packages', $packages);
    }

    /**
     * Show the form for creating a new package.
     *
     * @return Response
     */
    public function create()
    {
        return view('packages.create');
    }

    /**
     * Store a newly created package in storage.
     *
     * @param CreatepackageRequest $request
     *
     * @return Response
     */
    public function store(CreatepackageRequest $request)
    {
        $input = $request->all();

        $package = $this->packageRepository->create($input);

        Flash::success('Package saved successfully.');

        return redirect(route('packages.index'));
    }

    /**
     * Display the specified package.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

        return view('packages.show')->with('package', $package);
    }

    /**
     * Show the form for editing the specified package.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

        return view('packages.edit')->with('package', $package);
    }

    /**
     * Update the specified package in storage.
     *
     * @param  int              $id
     * @param UpdatepackageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepackageRequest $request)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

        $package = $this->packageRepository->update($request->all(), $id);

        Flash::success('Package updated successfully.');

        return redirect(route('packages.index'));
    }

    /**
     * Remove the specified package from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $package = $this->packageRepository->findWithoutFail($id);

        if (empty($package)) {
            Flash::error('Package not found');

            return redirect(route('packages.index'));
        }

        $this->packageRepository->delete($id);

        Flash::success('Package deleted successfully.');

        return redirect(route('packages.index'));
    }
}
