@extends('adminlte.master')

{{-- Custom Meta Tags --}}
@section('meta_tags')
    @livewireStyles
@endsection
{{-- Title --}}
@section('title_prefix', config('app.prefix', ''))
@section('title', config('app.name', 'Laravel'))
@section('title_postfix', config('app.postfix', ''))

{{-- Custom Stylesheets (post css) --}}
@section('post_css')
@endsection

{{-- Body bootstrap class --}}
@section('classes_body')

@endsection
{{-- Body custom style or tag--}}
@section('body_data')
@endsection

@section('page_header')
@endsection

@section('content_style')
@endsection

@section('custom_class')
    bg-white
@endsection
@section('info','')

@section('page_header_link_text','All Borrowers')
@section('body')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif


    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h4>
                <img src="{{asset('adminlte/dist/img/logo.png')}}" alt="">
                {{--                <i class="fas fa-globe"></i> AdminLTE, Inc.--}}
                <small class="float-right">Date: {{date('d-m-Y')}}</small>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info" id="app">
        <div class="col-sm-4 invoice-col">
            <br>
            <address>
                <strong>Customer Name:</strong> {{$customer->borrower_name}}<br>
                <strong>Application / Loan #:</strong> {{$customer->id}}<br>
                <strong>Loan Amount:</strong> {{number_format($customer->amount_disbursed,2)}}<br>

            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <br>
            <address>
                <strong>Loan Start Date:&nbsp;&nbsp;&nbsp;</strong>{{ \Carbon\Carbon::createFromDate($customer->loan_start_date)->format('d-m-Y') }}
                <br>
                <strong>Loan End Date: &nbsp;&nbsp;&nbsp;&nbsp;</strong>{{\Carbon\Carbon::createFromDate($customer->loan_end_date)->format('d-m-Y')}}
                <br>
                <strong>Equal Monthly Installment: </strong>{{number_format($customer->total_monthly_amount,2)}}<br>
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col"><br>
            <strong>No of Installments: </strong>{{$customer->total_number_of_installments}}<br>
            {{--            <b>Invoice #007612</b><br>--}}
        </div>
        <form action="{{url('customer/'.$customer->id.'/installment')}}" method="post" class="p-2">
            @csrf
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label><strong>Installment Number</strong></label>
                    <input type="text" class="form-control" name="installment[no_of_installment]" readonly
                           value="{{$customer->current_installment_no+1}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label><strong>Due Date</strong></label>
                    @php
                        $last_installment_date = \Carbon\Carbon::createFromDate($customer->last_installment_date)->addMonth();
                        $installment_due_date = \Carbon\Carbon::createFromDate($customer->installment_due_date)->addMonth();
                        $new_due_date = $installment_due_date->format('Y-') . $last_installment_date->format('m-') .  $installment_due_date->format('d') ;
                        $date  = \Carbon\Carbon::createFromDate($new_due_date);
                        $now = \Carbon\Carbon::now();
                        $diff = $date->diffInDays($now);
                    @endphp
                    <input type="date" class="form-control" name="installment[due_date]" value="{{$new_due_date}}" readonly>
                </div>
                <div class="col-md-3 mb-3">
                    <label><strong>Markup</strong></label>
                    <input type="text" class="form-control" name="installment[markup]" @input="markUp">
                </div>
                <div class="col-md-3 mb-3">
                    <label><strong>Insurance</strong></label>
                    <input type="text" class="form-control" name="installment[insurance]" @input="insuranceFunc">
                </div>
                <div class="col-md-3 mb-3">
                    <label><strong>Principal</strong></label>
                    <input type="text" class="form-control" name="installment[principal]" @input="principalFunc">
                </div>
{{--                <div class="col-md-3 mb-3">--}}
{{--                    <label><strong>Outstanding Principal</strong></label>--}}
                    <input type="hidden" class="form-control" name="installment[outstanding_principal]" value="{{$customer->principal_left}}">
{{--                </div>--}}
                <div class="col-md-3 mb-3">
                    <label><strong>Total Monthly Payment</strong></label>
                    <input type="text" class="form-control" name="installment[total_monthly_payment]" :value="totalPrincipal" readonly>
                </div>

                <div class="col-md-3 mb-3">
                    <label><strong>Payment Date</strong></label>
                    <input type="date" class="form-control" name="installment[payment_date]" value="{{date('Y-m-d')}}" readonly>
                </div>
{{--                <div class="col-md-3 mb-3">--}}
{{--                    <label><strong>Delayed Days</strong></label>--}}
                    <input type="hidden" class="form-control" name="installment[delayed_days]" value="{{$diff}}" readonly>
{{--                </div>--}}
            </div>
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-12">
                    <a onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                    <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                        Payment
                    </button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.row -->


@endsection
@section('custom_scripts_body')
    @livewireScripts
@endsection
