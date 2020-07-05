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
    <style>
        a:link, a:visited, a:active, a:hover {
            color: blue;
        }
    </style>
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
@section('info','')

@section('page_header_link_text','All Borrowers')
@section('body')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif


    <div id="app" >

        <div class="row" v-if="isHidden">
            <div class="col-md-12">
                <form method="get" action="{{url('customer')}}">
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label>Search</label>
                            <input type="text" class="form-control" name="q">
                        </div>

                        <div class="col-md-9 mb-9">
                            <br>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success" style="float: right;">
                        Search
                    </button>

                    <br>
                    <br>
                </form>
            </div>
        </div>
        <button type="button" v-on:click="isHidden = !isHidden" class="btn btn-primary" style="float: right;">
            Show/Hide Filters
        </button>
        <br>
    </div>

    <br>
    <br>

    <div class="row bg-white pt-2" id="app">
        <div class="col-12">
            @if($customers->isNotEmpty())
                <table class="table text-nowrap table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Borrower Name</th>
                        <th>CNIC</th>
                        <th>Amount Disbursed</th>
                        <th>MarkUp Rate</th>
                        <th>Disbursement Date</th>
                        <th>Schedule</th>
                        <th>Deposit</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td><a id="hoverLink" onMouseOver="this.style.color='red'"
                                   onMouseOut="this.style.color='#00F'"
                                   href="{{url('customer/'. $customer->id.'/edit')}}">{{$customer->borrower_name}}</a></td>
                            <td>{{$customer->borrower_cnic}}</td>
                            <td class="text-right"><span class="tag tag-success">{{number_format($customer->amount_disbursed,2)}}</span></td>
                            <td><span class="tag tag-success">{{$customer->mark_up_rate}}</span></td>
                            <td><span class="tag tag-success">{{$customer->disbursement_date}}</span></td>
                            <td class="text-center">
                                <a href="{{url('customer/'. $customer->id.'/schedule')}}">
                                    <i class="fas fa-file-alt"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('customer/'. $customer->id . '/installment/create')}}">
                                    <i class="fas fa-money-check-alt"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a id="hoverLink"
                                   href="{{url('customer/'. $customer->id.'/edit')}}">
                                    <i class="far fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-danger text-center">Not found</h3>
            @endif
            {{ $customers->appends(Request::except('page'))->links() }}
        </div>
    </div>


@endsection
@section('custom_scripts_body')
    @livewireScripts
@endsection
