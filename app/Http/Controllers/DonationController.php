<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Models\Admin;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supports = Support::all();
        $admins= Admin::all();
        return view('admin.donasi', compact('admins', 'supports'));
    }

    public function api()
    {
        $donations  = Donation::all();
        $supports   = Support::all();
        $admins     = Admin::all();

        foreach ($donations as $donation){
            if($donation->status == 0){
                $donation->status="Pending";
            }else{
                $donation->status="Success";
            }

            $donation->name_admin= $donation->admin->name;
            $donation->judul = $donation->support->title;
            $donation->rupiah= currency_IDR($donation->donation_amount);
            $donation->date1 = date_2($donation->date_start);
        }

        $datatables = datatables()->of($donations)->addIndexColumn();

        return $datatables->make(true);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect('donations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $this->validate($request,[
            'admin_id'          => ['required'],
            'donation_amount'   => ['required'],
            'description'       => ['required'],
            'date_start'        => ['required'],
            'status'            => ['required'],
        ]);

        $donation->update($request->all());

        return redirect('donations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();
    }
}
