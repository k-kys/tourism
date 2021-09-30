<?php

namespace App\Http\Controllers;

use App\Repositories\Tour\Plan\TourPlanRepositoryInterface;
use Illuminate\Http\Request;

class TourPlanController extends Controller
{
    protected $repo;

    public function __construct(TourPlanRepositoryInterface $tourPlanRepository)
    {
        $this->repo = $tourPlanRepository;
    }

    public function index($tourId)
    {
        $plans = $this->repo->getPlan($tourId);
        // $tourId = $tourId;
        // dd($tourId);

        return view('admin.tour.plan', compact('plans', 'tourId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.tour.plan.index', ['tour_id' => $request->tour_id]);
        // $data = [
        //     'title' => 'Tieu de',
        //     'msg' => 'Tin nhan',
        //     'stt' => 'success',
        //     'data' => $request->all(),
        // ];
        // return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $planId)
    {
        $rs = $this->repo->update($request, $planId);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.tour.plan.index', ['tour_id' => $request->tour_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
