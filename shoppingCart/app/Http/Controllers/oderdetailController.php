<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateoderdetailRequest;
use App\Http\Requests\UpdateoderdetailRequest;
use App\Repositories\oderdetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class oderdetailController extends AppBaseController
{
    /** @var oderdetailRepository $oderdetailRepository*/
    private $oderdetailRepository;

    public function __construct(oderdetailRepository $oderdetailRepo)
    {
        $this->oderdetailRepository = $oderdetailRepo;
    }

    /**
     * Display a listing of the oderdetail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $oderdetails = $this->oderdetailRepository->all();

        return view('oderdetails.index')
            ->with('oderdetails', $oderdetails);
    }

    /**
     * Show the form for creating a new oderdetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('oderdetails.create');
    }

    /**
     * Store a newly created oderdetail in storage.
     *
     * @param CreateoderdetailRequest $request
     *
     * @return Response
     */
    public function store(CreateoderdetailRequest $request)
    {
        $input = $request->all();

        $oderdetail = $this->oderdetailRepository->create($input);

        Flash::success('Oderdetail saved successfully.');

        return redirect(route('oderdetails.index'));
    }

    /**
     * Display the specified oderdetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oderdetail = $this->oderdetailRepository->find($id);

        if (empty($oderdetail)) {
            Flash::error('Oderdetail not found');

            return redirect(route('oderdetails.index'));
        }

        return view('oderdetails.show')->with('oderdetail', $oderdetail);
    }

    /**
     * Show the form for editing the specified oderdetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oderdetail = $this->oderdetailRepository->find($id);

        if (empty($oderdetail)) {
            Flash::error('Oderdetail not found');

            return redirect(route('oderdetails.index'));
        }

        return view('oderdetails.edit')->with('oderdetail', $oderdetail);
    }

    /**
     * Update the specified oderdetail in storage.
     *
     * @param int $id
     * @param UpdateoderdetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoderdetailRequest $request)
    {
        $oderdetail = $this->oderdetailRepository->find($id);

        if (empty($oderdetail)) {
            Flash::error('Oderdetail not found');

            return redirect(route('oderdetails.index'));
        }

        $oderdetail = $this->oderdetailRepository->update($request->all(), $id);

        Flash::success('Oderdetail updated successfully.');

        return redirect(route('oderdetails.index'));
    }

    /**
     * Remove the specified oderdetail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oderdetail = $this->oderdetailRepository->find($id);

        if (empty($oderdetail)) {
            Flash::error('Oderdetail not found');

            return redirect(route('oderdetails.index'));
        }

        $this->oderdetailRepository->delete($id);

        Flash::success('Oderdetail deleted successfully.');

        return redirect(route('oderdetails.index'));
    }
}
