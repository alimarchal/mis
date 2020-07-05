<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Installment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class InstallmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Customer $customer)
    {

        return view('installment.create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Customer $customer, Request $request)
    {
        $user = User::find(auth()->user()->id);
        $data = $request['installment'];
        $data['user_id'] = "$user->id";
//        DB::transaction(function ($customer, $data) {
//            $customer->current_installment_no = $customer->current_installment_no + 1;
//            $customer->principal_left = $customer->principal_left - $data['principal'];
//            $customer->last_installment_date = $data['payment_date'];
//            $customer->save();
//            $customer->installments()->create($data);
//        });


        try {
            DB::beginTransaction();
            $customer->current_installment_no = $customer->current_installment_no + 1;
            $customer->principal_left = $customer->principal_left - $data['principal'];
            $customer->last_installment_date = $data['payment_date'];
            $customer->save();
            $data['outstanding_principal'] = $customer->principal_left;
            $customer->installments()->create($data);
            DB::commit();
            return redirect()->back()->with('message', 'Installment Deposit Successfully');
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with('message', 'ERROR: Exception occur...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Customer $customer
     * @return void
     */
    public function show(Customer $customer)
    {
        $installments = Installment::where('customer_id',$customer->id)->get();
        return view('installment.show', compact('customer','installments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Installment $installment
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Installment $installment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Installment $installment
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, Installment $installment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Installment $installment
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Installment $installment)
    {
        //
    }
}
