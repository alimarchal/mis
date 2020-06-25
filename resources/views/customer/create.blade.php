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
@section('info','Customer Details')

@section('page_header_link_text','Customer Create')
@section('body')
<form class="needs-validation" novalidate method="post" action="{{url('borrower')}}">
        @csrf

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @livewire('branch-list')

        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom02" title="6"><strong>Name</strong></label>
                <input type="text" class="form-control" id="validationCustom01" title="" name="name">
                <div class="invalid-feedback">
                    Please provide a name.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02" title="7"><strong>So/Do/Wo</strong></label>
                <input type="text" class="form-control" id="validationCustom02" title="" name="so_do_wo">
                <div class="invalid-feedback">
                    Please provide a So/Do/Wo.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom03" title="8"><strong>Gender</strong></label>
                <select class="custom-select" title="" id="validationCustom03" name="gender">
                    <option value="">None</option>
                    <option value="Male">Male</option>
                    <option value="Male">Female</option>
                    <option value="Transgender">Transgender</option>
                </select>
                <div class="invalid-feedback">
                    Please select a Gender.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04" title="10"><strong>Designation </strong></label>
                <input type="text" class="form-control" id="validationCustom04" title="" name="designation">
                <div class="invalid-feedback">
                    Please provide a Designation.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom05" title="16"><strong>CNIC</strong></label>
                <input type="text" class="form-control" id="validationCustom05" title="" name="cnic_num">
                <div class="invalid-feedback">
                    Please provide a CNIC Number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom06" title="12"><strong>Date of Birth</strong></label>
                <input type="date" class="form-control" id="validationCustom06" title="" name="dob">
                <div class="invalid-feedback">
                    Please provide a birth date.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom07" title="17"><strong>Contact Number</strong></label>
                <input type="text" class="form-control" id="validationCustom07" title="" name="contact_num">
                <div class="invalid-feedback">
                    Please provide a contact number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom08" title="11"><strong>PP Number</strong></label>
                <input type="text" class="form-control" id="validationCustom08" title="" name="pp_num">
                <div class="invalid-feedback">
                    Please provide a Designation.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom09" title="9"><strong>Business/Department/Profession</strong></label>
                <textarea name="business_department_profession" class="form-control" id="validationCustom09"
                          title=""></textarea>
                <div class="invalid-feedback">
                    Please provide a Business/Department/Profession.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom10" title="13"><strong>Office/Business Address</strong></label>
                <textarea class="form-control" id="validationCustom10" title=""
                          name="office_business_address"></textarea>
                <div class="invalid-feedback">
                    Please provide a Office/Business Address.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom11" title="14"><strong>Present Address</strong></label>
                <textarea class="form-control" id="validationCustom11" title=""
                          name="present_address"></textarea>
                <div class="invalid-feedback">
                    Please provide a Office/Business Address.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom12" title="15"><strong>Permanent Address</strong></label>
                <textarea class="form-control" id="validationCustom12" title=""
                          name="permanent_address"></textarea>
                <div class="invalid-feedback">
                    Please provide a Office/Business Address.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2 mb-2">
                <label for="validationCustom13" title="18"><strong>Ac Number/CD/Saving</strong></label>
                <input type="text" class="form-control" id="validationCustom13" title=""
                       name="ac_num_cd_saving">
                <div class="invalid-feedback">
                    Please provide a Ac Number/CD/Saving.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom14" title="19"><strong>Type of facility approved</strong></label>
                <select class="custom-select" title="" id="validationCustom14" name="type_of_facility_approved">
                    <option value="">None</option>
                    {{--                    @foreach($facility_approved as $fa)--}}
                    {{--                        <option value="{{$fa->facility_approved}}">--}}
                    {{--                            {{$fa->facility_approved}}--}}
                    {{--                        </option>--}}
                    {{--                    @endforeach--}}
                </select>
                <div class="invalid-feedback">
                    Please select a type of facility approved.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom15" title="20"><strong>Nature of facility availed</strong></label>
                <select class="custom-select" title="" id="validationCustom15"
                        name="nature_of_facility_availed">
                    <option value="">None</option>
                    {{--                    @foreach($nature_facility as $fa)--}}
                    {{--                        <option value="{{$fa->nature_facility}}">--}}
                    {{--                            {{$fa->nature_facility}}--}}
                    {{--                        </option>--}}
                    {{--                    @endforeach--}}
                </select>
                <div class="invalid-feedback">
                    Please select a Nature of facility availed.
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationCustom16" title="22"><strong>Amount Sanctioned</strong></label>
                <input type="text" class="form-control" id="validationCustom16" title=""
                       name="amount_sanctioned">
                <div class="invalid-feedback">
                    Please provide a Amount Sanctioned.
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationCustom16" title="21"><strong>Renewal/Enhancement </strong></label>
                <select class="custom-select" title="" id="validationCustom15"
                        name="renewal_enhancement">
                    <option value="">None</option>
                    {{--                    @foreach($rhf as $fa)--}}
                    {{--                        <option value="{{$fa->rhf}}">--}}
                    {{--                            {{$fa->rhf }}--}}
                    {{--                        </option>--}}
                    {{--                    @endforeach--}}
                </select>
                <div class="invalid-feedback">
                    Please provide a Renewal/Enhancement.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom17" title="24"><strong>Sanctioned Date</strong></label>
                <input type="date" class="form-control" id="validationCustom17" title="" name="sanctioned_date">
                <div class="invalid-feedback">
                    Please provide a Sanctioned Date.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom18" title="25"><strong>Tenure of Loan</strong></label>
                <input type="text" class="form-control" id="validationCustom18" title="" name="tenure_of_loan">
                <div class="invalid-feedback">
                    Please provide a Tenure of Loan.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom19" title="26"><strong>Installment Type</strong></label>
                <input type="text" class="form-control" id="validationCustom19" title=""
                       name="installment_type">
                <div class="invalid-feedback">
                    Please provide a Installment Type.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom20" title="27"><strong>No of Installment</strong></label>
                <input type="text" class="form-control" id="validationCustom20" title=""
                       name="no_of_installment">
                <div class="invalid-feedback">
                    Please provide a No of Installment.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom21" title="28"><strong>DAC Issuance Date</strong></label>
                <input type="date" class="form-control" id="validationCustom21" title=""
                       name="dac_issuance_date">
                <div class="invalid-feedback">
                    Please provide a Dac Issuance Date.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom22" title="29"><strong>DAC Disbursement Date</strong></label>
                <input type="date" class="form-control" id="validationCustom22" title=""
                       name="dac_disbursement_date">
                <div class="invalid-feedback">
                    Please provide a DAC Disbursement Date.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom23" title="30"><strong>Amount Disbursed</strong></label>
                <input type="number" class="form-control" id="validationCustom23" title=""
                       name="amount_disbursed">
                <div class="invalid-feedback">
                    Please provide a Amount Disbursed.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom24" title="31"><strong>DAC Expire Date</strong></label>
                <input type="date" class="form-control" id="validationCustom24" title="" name="expire_dac_date">
                <div class="invalid-feedback">
                    Please provide a Sanctioned Date.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom25" title="32"><strong>Markup Rate</strong></label>
                <input type="text" class="form-control" id="validationCustom25" title="" name="markup_rate">
                <div class="invalid-feedback">
                    Please provide a Markup Rate.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom52" title="IT"><strong>Installment Deposit Date</strong></label>
                <input type="date" class="form-control" id="validationCustom52" title="" name="date_of_installment" required>
                <div class="invalid-feedback">
                    Please provide a Installment Deposit Date.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom52" title="IT"><strong>Installment Due Date</strong></label>
                <input type="date" class="form-control" id="validationCustom52" name="date_of_installment_due">
                <div class="invalid-feedback">
                    Please provide Installment Due Date.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom26" title="33"><strong>Branch Manager Name</strong></label>
                <input type="text" class="form-control" id="validationCustom26" title=""
                       name="branch_manager_name">
                <div class="invalid-feedback">
                    Please provide a Branch Manager Name.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <br>
        <h3 class="text-center text-danger" title="63">Guarantor Number 1 Details</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom27" title="71"><strong>Name</strong></label>
                <input type="text" class="form-control" id="validationCustom27" title="" name="g_one_name">
                <div class="invalid-feedback">
                    Please provide a Guarantor Name.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom28" title="64"><strong>CNIC Number</strong></label>
                <input type="text" class="form-control" id="validationCustom28" title="" name="g_one_cnic_num">
                <div class="invalid-feedback">
                    Please provide a Guarantor CNIC Number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom29" title="65"><strong>Contact Number</strong></label>
                <input type="text" class="form-control" id="validationCustom29" title=""
                       name="g_one_contact_num">
                <div class="invalid-feedback">
                    Please provide a Guarantor Contact Number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom30" title="66"><strong>Department/Business</strong></label>
                <input type="text" class="form-control" id="validationCustom30" title=""
                       name="g_one_dept_business">
                <div class="invalid-feedback">
                    Please provide a Guarantor Department/Business
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom31" title="67"><strong>Business/Dept/Address</strong></label>
                <textarea name="g_one_dept_business_address" class="form-control" id="validationCustom31"
                          title=""></textarea>
                <div class="invalid-feedback">
                    Please provide a Guarantor Business/Dept/Address.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom32" title="70"><strong>Guarantor Address</strong></label>
                <textarea name="g_one_address" class="form-control" id="validationCustom32" title=""></textarea>
                <div class="invalid-feedback">
                    Please provide a Guarantor Address.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom33" title="68"><strong>BPS</strong></label>
                <input type="text" class="form-control" id="validationCustom33" title="" name="g_one_bps">
                <div class="invalid-feedback">
                    Please provide a Guarantor BPS.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom34" title="69"><strong>PP Number</strong></label>
                <input type="text" class="form-control" id="validationCustom34" title="" name="g_one_pp_num">
                <div class="invalid-feedback">
                    Please provide a Guarantor PP Number.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <br>
        <h3 class="text-center text-danger" title="63">Guarantor Number 2 Details</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom35" title="71"><strong>Name</strong></label>
                <input type="text" class="form-control" id="validationCustom35" title="" name="g_two_name">
                <div class="invalid-feedback">
                    Please provide a Guarantor Name.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom36" title="72"><strong>CNIC Number</strong></label>
                <input type="text" class="form-control" id="validationCustom36" title="" name="g_two_cnic_num">
                <div class="invalid-feedback">
                    Please provide a Guarantor CNIC Number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom37" title="73"><strong>Contact Number</strong></label>
                <input type="text" class="form-control" id="validationCustom37" title=""
                       name="g_two_contact_num">
                <div class="invalid-feedback">
                    Please provide a Guarantor Contact Number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom38" title="74"><strong>Department/Business</strong></label>
                <input type="text" class="form-control" id="validationCustom38" title=""
                       name="g_two_dept_business">
                <div class="invalid-feedback">
                    Please provide a Guarantor Department/Business
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom39" title="75"><strong>Business/Dept/Address</strong></label>
                <textarea name="g_two_dept_business_address" class="form-control" id="validationCustom39"
                          title=""></textarea>
                <div class="invalid-feedback">
                    Please provide a Guarantor Business/Dept/Address.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom40" title="78"><strong>Guarantor Address</strong></label>
                <textarea name="g_two_address" class="form-control" id="validationCustom40" title=""></textarea>
                <div class="invalid-feedback">
                    Please provide a Guarantor Address.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom41" title="76"><strong>BPS</strong></label>
                <input type="text" class="form-control" id="validationCustom41" title="" name="g_two_bps">
                <div class="invalid-feedback">
                    Please provide a Guarantor BPS.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom42" title="77"><strong>PP Number</strong></label>
                <input type="text" class="form-control" id="validationCustom42" title="" name="g_two_pp_num">
                <div class="invalid-feedback">
                    Please provide a Guarantor PP Number.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <br>
        <h3 class="text-center text-danger">Other Than Personal Guarantee</h4>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <div class="form-row">
            <div class="col-md-4 mb-2">
                <label for="validationCustom43" title="79"><strong>Primary</strong></label>
                <input type="text" class="form-control" id="validationCustom43" title=""
                       name="personal_grantee_primary">
                <div class="invalid-feedback">
                    Please provide a Primary Guarantee.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom44" title="80"><strong>Secondary</strong></label>
                <input type="text" class="form-control" id="validationCustom44" title=""
                       name="personal_grantee_secondary">
                <div class="invalid-feedback">
                    Please provide a Secondary Guarantee.
                </div>
            </div>
            <div class="col-md-4 mb-">
                <label for="validationCustom45" title="81"><strong>Type of Security</strong></label>
                <input type="text" class="form-control" id="validationCustom45" title=""
                       name="personal_grantee_type_of_security">
                <div class="invalid-feedback">
                    Please provide a Type of Security.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label for="validationCustom46" title="82"><strong>FSV</strong></label>
                <input type="text" class="form-control" id="validationCustom46" title=""
                       name="personal_grantee_fsv">
                <div class="invalid-feedback">
                    Please provide a FSV.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom47" title="83"><strong>Ownership</strong></label>
                <input type="text" class="form-control" id="validationCustom47" title=""
                       name="personal_grantee_ownership">
                <div class="invalid-feedback">
                    Please provide a Ownership.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <br>
        <h3 class="text-center text-danger">Valuation</h4>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label for="validationCustom48" title="84"><strong>Evaluator Company</strong></label>
                <input type="text" class="form-control" id="validationCustom48" title=""
                       name="evaluator_company">
                <div class="invalid-feedback">
                    Please provide a Evaluator Company Name.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom49" title="85"><strong>Date of Valuation</strong></label>
                <input type="date" class="form-control" id="validationCustom49" title=""
                       name="date_of_valuation">
                <div class="invalid-feedback">
                    Please provide a Date of Valuation.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <br>
        <h3 class="text-center text-danger">Insurance</h4>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-3 mb-2">
                <label for="validationCustom50" title="86"><strong>Insurance Company</strong></label>
                <input type="text" class="form-control" id="validationCustom50" title=""
                       name="insurance_company">
                <div class="invalid-feedback">
                    Please provide a Insurance Company.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom51" title="87"><strong>Date of Insurance</strong></label>
                <input type="date" class="form-control" id="validationCustom51" title="" name="insurance_date">
                <div class="invalid-feedback">
                    Please provide a Date of Insurance.
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom52" title="88"><strong>Insurance Amount</strong></label>
                <input type="text" class="form-control" id="validationCustom52" title=""
                       name="insurance_amount">
                <div class="invalid-feedback">
                    Please provide a Insurance Amount.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom53" title="89"><strong>Date of Expiry of Insurance</strong></label>
                <input type="date" class="form-control" id="validationCustom53" title=""
                       name="insurance_expiry_date">
                <div class="invalid-feedback">
                    Please provide a Date of Expiry of Insurance.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label for="validationCustom54" title="90"><strong>Claim Amount</strong></label>
                <input type="text" class="form-control" id="validationCustom48" title="" name="claim_amount">
                <div class="invalid-feedback">
                    Please provide a Claim Amount.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom49" title="91"><strong>Date of Claim</strong></label>
                <input type="date" class="form-control" id="validationCustom54" title="" name="date_of_claim">
                <div class="invalid-feedback">
                    Please provide a Date of Claim.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <br>
        <h3 class="text-center text-danger">NPL Recovery Remarks</h4>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-12 mb-2">
                <label for="validationCustom54" title="92"><strong>NPL Recovery Remarks</strong></label>
                <textarea name="npl_recovery_remarks" class="form-control"></textarea>
                <div class="invalid-feedback">
                    NPL Recovery Remarks
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->

<!-- Card Start -->
<div class="card card-default">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <br>
        <h3 class="text-center text-danger">Litigation Status</h4>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-4 mb-2">
                <label for="validationCustom50" title="93"><strong>Name of Court</strong></label>
                <input type="text" class="form-control" id="validationCustom50" title=""
                       name="name_of_court">
                <div class="invalid-feedback">
                    Please provide a Name of Court.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom51" title="94"><strong>Recovery Status (Full or Partial)</strong></label>
                <input type="text" class="form-control" id="validationCustom51" title="" name="recovery_status">
                <div class="invalid-feedback">
                    Please provide a Date of Insurance.
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <label for="validationCustom52" title="95"><strong>Date of Final Settlement</strong></label>
                <input type="date" class="form-control" id="validationCustom52" title=""
                       name="date_of_final_settlement">
                <div class="invalid-feedback">
                    Please provide a Insurance Amount.
                </div>
            </div>
            <input type="hidden" name="status" value="Regular">
        </div>
    </div>
</div>
<!-- /.card -->
</form>
<button class="btn btn-primary" type="submit">Submit Data</button>
@endsection



@section('custom_scripts_body')
    @livewireScripts
@endsection
