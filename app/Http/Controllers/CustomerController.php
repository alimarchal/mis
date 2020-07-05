<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('q')) {
            $customers = Customer::where('borrower_name', 'LIKE', "%$request->q%")
                ->orWhere('borrower_cnic', 'LIKE', "%$request->q%")
                ->paginate(10);
            return view('customer.index', compact('customers'));
        } else {
            $customers = Customer::paginate(10);
            return view('customer.index', compact('customers'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Customer $customer
     * @return void
     */
    public function store(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->customers()->create($request['customer']);
        return redirect()->back()->with('message', 'Borrower added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $id = $customer->update($request['customer']);
//        dd($request->all());
        return back()->with('status', 'Borrower information has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
