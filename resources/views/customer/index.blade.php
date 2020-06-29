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
@section('info','All Borrowers')

@section('page_header_link_text','All Borrowers')
@section('body')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Borrower Name</th>
                            <th>CNIC</th>
                            <th>Amount Disbursed</th>
                            <th>MarkUp Rate</th>
                            <th>Disbursement Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td><a href="{{url('customer/'. $customer->id.'/edit')}}">{{$customer->borrower_name}}</a></td>
                                <td>{{$customer->borrower_cnic}}</td>
                                <td><span class="tag tag-success">{{$customer->amount_disbursed}}</span></td>
                                <td><span class="tag tag-success">{{$customer->mark_up_rate}}</span></td>
                                <td><span class="tag tag-success">{{$customer->disbursement_date}}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
            {{ $customers->links() }}
        </div>
    </div>


@endsection
@section('custom_scripts_body')
    @livewireScripts
@endsection
