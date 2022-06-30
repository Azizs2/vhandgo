<?php

namespace App\Http\Controllers;

use App\Models\TransactionOut;
use App\Models\Support;
use App\Models\Transaction;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class TransactionController extends Controller
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
        // $transactions = Transaction::all();
        $supports = Support::all();
        return view('admin.transaction', compact('supports'));
    }

    public function api()
    {
        $transactions = Transaction::all();
        $supports = Support::all();

        foreach ($transactions as $transaction) {
            if ($transaction->status == 0){
                $transaction->status = "Pending";
            } else{
                $transaction->status = "Success";
            }


            $transaction->namesupot = $transaction->support->name;
            $transaction->date2 = date_2($transaction->date_start);
            $transaction->rupiah = currency_IDR($transaction->donation_amount);
        }

        $datatables = datatables()->of($transactions)->addIndexColumn();

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
        $this->validate($request,[
            'name'              => ['required'],
            'phone_number'      => ['required'],
            'email'             => ['required'],
            'date_start'        => ['required'],
            'donation_amount'   => ['required'],
            'message'           => ['required'],
            'support_id'        => ['required'],
        ]);

        $transaction                    = new Transaction;

        $transaction->name              = $request->name;
        $transaction->phone_number      = $request->phone_number;
        $transaction->email             = $request->email;
        $transaction->date_start        = $request->date_start;
        $transaction->donation_amount   = $request->donation_amount;
        $transaction->message           = $request->message;
        $transaction->support_id        = $request->support_id;
        $transaction->status            = 0;
        $transaction->save();


        return redirect('transactions');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $this->validate($request,[
            'name'              => ['required'],
            'phone_number'      => ['required'],
            'email'             => ['required'],
            'date_start'        => ['required'],
            'donation_amount'   => ['required'],
            'message'           => ['required'],
            'support_id'        => ['required'],
            'status'            => ['required'],
        ]);




        return redirect('transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
    }
}
