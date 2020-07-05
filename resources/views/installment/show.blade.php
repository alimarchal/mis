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

        <!-- Table row -->
            <div class="col-12 table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>Installment Number</th>
                        <th>Due Date</th>
                        <th>Total Monthly Installment</th>
                        <th>Markup</th>
                        <th>Insurance</th>
                        <th>Principal</th>
                        <th>Outstanding Principal</th>
                        <th>Markup Status</th>
                        <th>Payment Date</th>
                        <th>Delayed Days</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($installments as $installment)
                    <tr class="text-center">
                        <td>{{$installment->no_of_installment}}</td>
                        <td>{{Carbon\Carbon::createFromDate($installment->due_date)->format('d-M-Y')}}</td>
                        <td>{{number_format($installment->total_monthly_payment,2)}}</td>
                        <td>{{number_format($installment->markup,2)}}</td>
                        <td>{{number_format($installment->insurance,2)}}</td>
                        <td>{{number_format($installment->principal,2)}}</td>
                        <td>{{number_format($installment->outstanding_principal,2)}}</td>
                        <td>{{$installment->status}}</td>
                        <td>{{Carbon\Carbon::createFromDate($installment->payment_date)->format('d-M-Y')}}</td>
                        <td>{{$installment->delayed_days}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        <!-- /.row -->


    </div>
    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-12">
            <a onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
        </div>
    </div>
    <!-- /.row -->


@endsection
@section('custom_scripts_body')
    @livewireScripts
@endsection
