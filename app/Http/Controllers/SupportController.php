<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function diatas untuk jika tidak login tidak bisa di buka
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $support;

        return view('admin.support');
    }

    public function api()
    {
        $donations = Donation::all();
        $supports= Support::all();

        foreach ($supports as $support){


            $total_donations=Donation::selectRaw("SUM(donations.donation_amount) AS total_donasi")
                ->join('supports','supports.id','=','donations.support_id')
                // ->groupby ('donations.support_id')
                ->where('support_id',$support->id)
                ->get();


            foreach ($total_donations as $total_donation){
                $support->total=currency_IDR($total_donation->total_donasi);
            }

            $support->rupiah1= currency_IDR($support->donation_target);
            $support->rupiah2= currency_IDR($support->collected_donations);
            $support->date1 = date_2($support->date_start);
            $support->date2 = date_2($support->date_end);
        }

        $datatables = datatables()->of($supports)->addIndexColumn();

        return $datatables->make(true);

        // return json_encode($supports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.support.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'                  => ['required'],
            'donation_target'        => ['required'],
            'collected_donations'    => ['required'],
            'description'            => ['required'],
            'date_start'             => ['required'],
            'date_end'               => ['required'],
        ]);

        // $support = new Support;
        // $support->admin_id = $request->admin_id;
        // $support->donation_amount = $request->donation_amount;
        // $support->description = $request->description;
        // $support->date_start = $request->date_start;
        // $support->status = 0;
        // $support->save();

        Support::create($request->all());

        return redirect('supports');
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function show(Support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(Support $support)
    {

        //return view('admin.support.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Support $support)
    {
        $this->validate($request,[
            'title'                  => ['required'],
            'donation_target'        => ['required'],
            'collected_donations'    => ['required'],
            'description'            => ['required'],
            'date_start'             => ['required'],
            'date_end'               => ['required'],
        ]);

        $support->update($request->all());

        return redirect('supports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
        $support->delete();
    }
}
