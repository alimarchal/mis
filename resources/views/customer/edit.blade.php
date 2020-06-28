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
@section('info','Borrower Details')

@section('page_header_link_text','Borrower Create')
@section('body')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <form class="needs-validation" novalidate method="post" action="{{url('customer/'.$customer->id)}}">
    @csrf
    @method('PUT')

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
                        <label><strong>Name</strong></label>
                        <input type="text" class="form-control" id="validationCustom01" value="{{$customer->borrower_name}}"
                               name="customer[borrower_name]">
                        <div class="invalid-feedback">
                            Please provide a name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>So/Do/Wo</strong></label>
                        <input type="text" class="form-control" id="validationCustom02" value="{{$customer->s_o_d_o_w_o}}"
                               name="customer[s_o_d_o_w_o]">
                        <div class="invalid-feedback">
                            Please provide a So/Do/Wo.
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Gender</strong></label>
                        <select class="custom-select" title="" id="validationCustom03" name="customer[borrowers_gender]">
                            <option value="" {{($customer->borrowers_gender == "")?'selected':''}}>None</option>
                            <option value="Male" {{($customer->borrowers_gender == "Male")?'selected':''}}>Male</option>
                            <option value="Female" {{($customer->borrowers_gender == "Female")?'selected':''}}>Female</option>
                            <option value="Transgender" {{($customer->borrowers_gender == "Transgender")?'selected':''}}>Transgender</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Business/Department/Profession</strong></label>
                        <input name="customer[business_department_profession]" class="form-control" id="validationCustom09"
                               value="{{$customer->business_department_profession}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Designation </strong></label>
                        <input type="text" class="form-control" id="validationCustom04" value="{{$customer->designation}}"
                               name="customer[designation]">
                        <div class="invalid-feedback">
                            Please provide a Designation.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>PP Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom08" title="" name="customer[pp]" value="{{$customer->pp}}">
                        <div class="invalid-feedback">
                            Please provide a Designation.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Date of Birth</strong></label>
                        <input type="date" class="form-control" id="validationCustom06" title="" name="customer[date_of_birth]"
                               value="{{$customer->date_of_birth}}">

                    </div>

                    <div class="col-md-3 mb-3">
                        <label><strong>Office/Business Address</strong></label>
                        <input class="form-control" id="validationCustom10" title=""
                               name="customer[borrower_office_business_address]" value="{{$customer->borrower_office_business_address}}">

                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Present Address</strong></label>
                        <input class="form-control" id="validationCustom11" title=""
                               name="customer[borrower_present_addres]" value="{{$customer->borrower_present_addres}}">

                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Permanent Address</strong></label>
                        <input class="form-control" id="validationCustom12" title=""
                               name="customer[borrower_permanent_address]" value="{{$customer->borrower_permanent_address}}">

                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>CNIC</strong></label>
                        <input type="text" class="form-control" id="validationCustom05" title="" name="customer[borrower_cnic]"
                               value="{{$customer->borrower_cnic}}">
                        <div class="invalid-feedback">
                            Please provide a CNIC Number.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label><strong>Contact Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom07" title="" name="customer[contact]"
                               value="{{$customer->contact}}">

                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Ac Number/CD/Saving</strong></label>
                        <input type="text" class="form-control" id="validationCustom13" title=""
                               name="customer[a_c_cd_saving]" value="{{$customer->a_c_cd_saving}}">

                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Type of facility approved</strong></label>
                        <select class="custom-select" title="" id="validationCustom14" name="customer[type_of_facility_approved]">
                            <option value="{{$customer->type_of_facility_approved}}">{{$customer->type_of_facility_approved}}</option>
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
                        <label><strong>Nature of facility availed</strong></label>
                        <select class="custom-select" title="" id="validationCustom15"
                                name="customer[nature_of_facility_availed]">
                            <option value="{{$customer->nature_of_facility_availed}}">{{$customer->nature_of_facility_availed}}</option>
                            {{--                    @foreach($nature_facility as $fa)--}}
                            {{--                        <option value="{{$fa->nature_facility}}">--}}
                            {{--                            {{$fa->nature_facility}}--}}
                            {{--                        </option>--}}
                            {{--                    @endforeach--}}
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>
                            <abbr title="renewal_enhancement_fresh_sanction"><strong>Renewal/Enhancement </strong></abbr></label>
                        <input class="custom-select" title="" id="validationCustom15"
                               name="customer[renewal_enhancement_fresh_sanction]" value="{{$customer->renewal_enhancement_fresh_sanction}}">
                        <div class="invalid-feedback">
                            Please provide a Renewal/Enhancement.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Amount Sanctioned</strong></label>
                        <input type="text" class="form-control" id="validationCustom16" title=""
                               name="customer[amount_sanctioned]" value="{{$customer->amount_sanctioned}}">
                        <div class="invalid-feedback">
                            Please provide a Amount Sanctioned.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Amount Enhanced (if any) </strong></label>
                        <select class="custom-select" title="" id="validationCustom15"
                                name="customer[amount_enhanced_if_any]">
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

                    <div class="col-md-3 mb-3">
                        <label><strong>Sanctioned Date</strong></label>
                        <input type="date" class="form-control" id="validationCustom17" title="" name="customer[sanction_date]"
                               value="{{$customer->sanction_date}}">
                        <div class="invalid-feedback">
                            Please provide a Sanctioned Date.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Tenure of Loan</strong></label>
                        <input type="text" class="form-control" id="validationCustom18" title="" name="customer[tenure_of_loan]"
                               value="{{$customer->tenure_of_loan}}">
                        <div class="invalid-feedback">
                            Please provide a Tenure of Loan.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Installment Type</strong></label>
                        <input type="text" class="form-control" id="validationCustom19" title=""
                               name="customer[installment_type_monthly_quarterly_lump_sump]"
                               value="{{$customer->installment_type_monthly_quarterly_lump_sump}}">
                        <div class="invalid-feedback">
                            Please provide a Installment Type.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>No of Installment</strong></label>
                        <input type="text" class="form-control" id="validationCustom20" title=""
                               name="customer[no_of_installment]">
                        <div class="invalid-feedback">
                            Please provide a No of Installment.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>DAC Issuance Date</strong></label>
                        <input type="date" class="form-control" id="validationCustom21" title=""
                               name="customer[dac_issuance_date]" value="{{$customer->dac_issuance_date}}">
                        <div class="invalid-feedback">
                            Please provide a Dac Issuance Date.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>DAC Disbursement Date</strong></label>
                        <input type="date" class="form-control" id="validationCustom22" title=""
                               name="customer[disbursement_date]" value="{{$customer->disbursement_date}}">
                        <div class="invalid-feedback">
                            Please provide a DAC Disbursement Date.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Amount Disbursed</strong></label>
                        <input type="number" class="form-control" id="validationCustom23" title=""
                               name="customer[amount_disbursed]" value="{{$customer->amount_disbursed}}">
                        <div class="invalid-feedback">
                            Please provide a Amount Disbursed.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>DAC Expire Date</strong></label>
                        <input type="date" class="form-control" id="validationCustom24" title="" name="customer[expiry_date_as_per_dac]"
                               value="{{$customer->expiry_date_as_per_dac}}">
                        <div class="invalid-feedback">
                            Please provide a Sanctioned Date.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Markup Rate</strong></label>
                        <input type="text" class="form-control" id="validationCustom25" title="" name="customer[mark_up_rate]"
                               value="{{$customer->mark_up_rate}}">
                        <div class="invalid-feedback">
                            Please provide a Markup Rate.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Installment Deposit Date</strong></label>
                        <input type="date" class="form-control" id="validationCustom52" title="" name="customer[installment_deposit_date]"
                               value="{{$customer->installment_deposit_date}}">
                        <div class="invalid-feedback">
                            Please provide a Installment Deposit Date.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Installment Due Date</strong></label>
                        <input type="date" class="form-control" id="validationCustom52" name="customer[installment_due_date]"
                               value="{{$customer->installment_due_date}}">
                        <div class="invalid-feedback">
                            Please provide Installment Due Date.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Branch Manager Name</strong></label>
                        <input type="text" class="form-control" id="validationCustom26" title=""
                               name="customer[branch_manager_name_while_sanctioning]" value="{{$customer->branch_manager_name_while_sanctioning}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                </div>

                <hr class="bg-danger">
                <h2 class="text-danger text-center">Installment</h2>
                <hr class="bg-danger">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label><strong>Principle Amount</strong></label>
                        <input type="text" class="form-control" name="customer[installment_principle_amount]"
                               value="{{$customer->installment_principle_amount}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Markup Amount</strong></label>
                        <input type="text" class="form-control" name="customer[installment_markup_amount]"
                               value="{{$customer->installment_markup_amount}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Insurance (if any)</strong></label>
                        <input type="text" class="form-control" name="customer[installment_insurance_if_any]"
                               value="{{$customer->installment_insurance_if_any}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Total Installment</strong></label>
                        <input type="text" class="form-control" name="customer[installment_total_installment]"
                               value="{{$customer->installment_total_installment}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                </div>

                <hr class="bg-danger">
                <h2 class="text-danger text-center">Previous Months Installment</h2>
                <hr class="bg-danger">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label><strong>No of Installment</strong></label>
                        <input type="text" class="form-control" name="customer[previous_months_no_of_installment]"
                               value="{{$customer->previous_months_no_of_installment}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Days Passed Overdue</strong></label>
                        <input type="text" class="form-control" name="customer[previous_months_days_passed_overdue]"
                               value="{{$customer->previous_months_days_passed_overdue}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Principle (a)</strong></label>
                        <input type="text" class="form-control" name="customer[previous_months_principle_a]"
                               value="{{$customer->previous_months_principle_a}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Markup (b)</strong></label>
                        <input type="text" class="form-control" name="customer[previous_months_mark_up_b]"
                               value="{{$customer->previous_months_mark_up_b}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Penalty Charges (c)</strong></label>
                        <input type="text" class="form-control" name="customer[previous_months_penalty_charges_c]"
                               value="{{$customer->previous_months_penalty_charges_c}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Total (a+b+c)</strong></label>
                        <input type="text" class="form-control" name="customer[previous_months_total_abc]"
                               value="{{$customer->previous_months_total_abc}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Category of Default</strong></label>
                        <input type="text" class="form-control" name="customer[previous_months_category_of_default]"
                               value="{{$customer->previous_months_category_of_default}}">
                    </div>
                </div>

                <hr class="bg-danger">
                <h2 class="text-danger text-center">Current Month Installment</h2>
                <hr class="bg-danger">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label><strong>No of Installment</strong></label>
                        <input type="text" class="form-control" name="customer[current_months_no_of_installment]"
                               value="{{$customer->current_months_no_of_installment}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Days Passed Overdue</strong></label>
                        <input type="text" class="form-control" name="customer[current_months_day_passed_overdue]"
                               value="{{$customer->current_months_day_passed_overdue}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Principle (a)</strong></label>
                        <input type="text" class="form-control" name="customer[current_months_principle_a]"
                               value="{{$customer->current_months_principle_a}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Markup (b)</strong></label>
                        <input type="text" class="form-control" name="customer[current_months_mark_up_b]"
                               value="{{$customer->current_months_mark_up_b}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Penalty Charges (c)</strong></label>
                        <input type="text" class="form-control" name="customer[current_months_penalty_charges_c]"
                               value="{{$customer->current_months_penalty_charges_c}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Total (a+b+c)</strong></label>
                        <input type="text" class="form-control" name="customer[current_months_total_abc]"
                               value="{{$customer->current_months_total_abc}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Category of Default</strong></label>
                        <input type="text" class="form-control" name="customer[current_months_category_of_default]"
                               value="{{$customer->current_months_category_of_default}}">
                    </div>
                </div>


                <hr class="bg-danger">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label><strong>Adjustment Recovery During the Month Principle Amount</strong></label>
                        <input type="text" class="form-control" name="customer[adjustment_recovery_during_the_month_principle_amount]"
                               value="{{$customer->adjustment_recovery_during_the_month_principle_amount}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Partial Cash Recovery</strong></label>
                        <input type="text" class="form-control" name="customer[partial_cash_recovery]" value="{{$customer->partial_cash_recovery}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Facility outstanding amount secured principle previous</strong></label>
                        <input type="text" class="form-control" name="customer[facility_outstanding_amount_secured_principle_previous]"
                               value="{{$customer->facility_outstanding_amount_secured_principle_previous}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>{{ucfirst(str_replace('_',' ','facility_outstanding_amount_secured_principle_current'))}}</strong></label>
                        <input type="text" class="form-control" name="customer[facility_outstanding_amount_secured_principle_current]"
                               value="{{$customer->facility_outstanding_amount_secured_principle_current}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>{{ucfirst(str_replace('_',' ','facility_outstanding_amount_unsecured_principle_previous'))}}</strong></label>
                        <input type="text" class="form-control" name="customer[facility_outstanding_amount_unsecured_principle_previous]"
                               value="{{$customer->facility_outstanding_amount_unsecured_principle_previous}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>{{ucfirst(str_replace('_',' ','facility_outstanding_amount_unsecured_principle_current'))}}</strong></label>
                        <input type="text" class="form-control" name="customer[facility_outstanding_amount_unsecured_principle_current]"
                               value="{{$customer->facility_outstanding_amount_unsecured_principle_current}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>NPL Amount</strong></label>
                        <input type="text" class="form-control" name="customer[npl_amount]">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>{{ucfirst(str_replace('_',' ','markup_detail_markup_receivable_4600'))}}</strong></label>
                        <input type="text" class="form-control" name="customer[markup_detail_markup_receivable_4600]"
                               value="{{$customer->markup_detail_markup_receivable_4600}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>{{ucfirst(str_replace('_',' ','markup_detail_mark_up_recovered_since_01_01_2019_till_date'))}}</strong></label>
                        <input type="text" class="form-control" name="customer[markup_detail_mark_up_recovered_since_01_01_2019_till_date]"
                               value="{{$customer->markup_detail_mark_up_recovered_since_01_01_2019_till_date}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>{{ucfirst(str_replace('_',' ','markup_detail_mark_up_recoverable_a_c_5008'))}}</strong></label>
                        <input type="text" class="form-control" name="customer[markup_detail_mark_up_recoverable_a_c_5008]"
                               value="{{$customer->markup_detail_mark_up_recoverable_a_c_5008}}">
                        <div class="invalid-feedback">
                            Please provide a Branch Manager Name.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>{{ucfirst(str_replace('_',' ','markup_detail_mark_up_reserve_a_c_2305'))}}</strong></label>
                        <input type="text" class="form-control" name="customer[markup_detail_mark_up_reserve_a_c_2305]"
                               value="{{$customer->markup_detail_mark_up_reserve_a_c_2305}}">
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
                        <label><strong>Name</strong></label>
                        <input type="text" class="form-control" id="validationCustom27" title="" name="customer[personal_guarantee_no_1_detail_name]"
                               value="{{$customer->personal_guarantee_no_1_detail_name}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>CNIC Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom28" title="" name="customer[personal_guarantee_no_1_detail_cnic]"
                               value="{{$customer->personal_guarantee_no_1_detail_cnic}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Contact Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom29" title=""
                               name="customer[personal_guarantee_no_1_detail_contact]" value="{{$customer->personal_guarantee_no_1_detail_contact}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Department/Business</strong></label>
                        <input type="text" class="form-control" id="validationCustom30" title=""
                               name="customer[personal_guarantee_no_1_detail_dept_business]"
                               value="{{$customer->personal_guarantee_no_1_detail_dept_business}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-2">
                        <label><strong>Business/Dept/Address</strong></label>
                        <textarea name="customer[personal_guarantee_no_1_detail_dept_business_address]" class="form-control" id="validationCustom31"
                                  title="">{{$customer->personal_guarantee_no_1_detail_dept_business_address}}</textarea>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Guarantor Address</strong></label>
                        <textarea name="customer[personal_guarantee_no_1_detail_address]" class="form-control" id="validationCustom32"
                                  title="">{{$customer->personal_guarantee_no_1_detail_address}}</textarea>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>BPS</strong></label>
                        <input type="text" class="form-control" id="validationCustom33" title="" name="customer[personal_guarantee_no_1_detail_bps]"
                               value="{{$customer->personal_guarantee_no_1_detail_bps}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>PP Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom34" title=""
                               name="customer[personal_guarantee_no_1_detail_pp_if_salaried]"
                               value="{{$customer->personal_guarantee_no_1_detail_pp_if_salaried}}">
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
                        <label><strong>Name</strong></label>
                        <input type="text" class="form-control" id="validationCustom35" title="" name="customer[personal_guarantee_no_2_detail_name]"
                               value="{{$customer->personal_guarantee_no_2_detail_name}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>CNIC Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom36" title="" name="customer[personal_guarantee_no_2_detail_cnic]"
                               value="{{$customer->personal_guarantee_no_2_detail_cnic}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Contact Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom37" title=""
                               name="customer[personal_guarantee_no_2_detail_contact]" value="{{$customer->personal_guarantee_no_2_detail_contact}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Department/Business</strong></label>
                        <input type="text" class="form-control" id="validationCustom38" title=""
                               name="customer[personal_guarantee_no_2_detail_dept_business]"
                               value="{{$customer->personal_guarantee_no_2_detail_dept_business}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-2">
                        <label><strong>Business/Dept/Address</strong></label>
                        <textarea name="customer[personal_guarantee_no_2_detail_dept_business_address]" class="form-control" id="validationCustom39"
                                  title="">{{$customer->personal_guarantee_no_2_detail_dept_business_address}}</textarea>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Guarantor Address</strong></label>
                        <textarea name="customer[personal_guarantee_no_2_detail_address]" class="form-control" id="validationCustom40"
                                  title="">{{$customer->personal_guarantee_no_2_detail_address}}</textarea>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>BPS</strong></label>
                        <input type="text" class="form-control" id="validationCustom41" title="" name="customer[personal_guarantee_no_2_detail_bps]"
                               value="{{$customer->personal_guarantee_no_2_detail_bps}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>PP Number</strong></label>
                        <input type="text" class="form-control" id="validationCustom42" title=""
                               name="customer[personal_guarantee_no_2_detail_pp_if_salaried]"
                               value="{{$customer->personal_guarantee_no_2_detail_pp_if_salaried}}">
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
                <h3 class="text-center text-danger">Other Than Personal Guarantee</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label><strong>Primary</strong></label>
                        <input type="text" class="form-control" id="validationCustom43" title=""
                               name="customer[other_than_personal_guarantee_primary]" value="{{$customer->other_than_personal_guarantee_primary}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><strong>Secondary</strong></label>
                        <input type="text" class="form-control" id="validationCustom44" title=""
                               name="customer[other_than_personal_guarantee_secondary]"
                               value="{{$customer->other_than_personal_guarantee_secondary}}">
                    </div>
                    <div class="col-md-4 mb-">
                        <label><strong>Type of Security</strong></label>
                        <input type="text" class="form-control" id="validationCustom45" title=""
                               name="customer[other_than_personal_guarantee_type_of_security]"
                               value="{{$customer->other_than_personal_guarantee_type_of_security}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label><strong>FSV</strong></label>
                        <input type="text" class="form-control" id="validationCustom46" title=""
                               name="customer[other_than_personal_guarantee_fsv]" value="{{$customer->other_than_personal_guarantee_fsv}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label><strong>Ownership</strong></label>
                        <input type="text" class="form-control" id="validationCustom47" title=""
                               name="customer[other_than_personal_guarantee_ownership]"
                               value="{{$customer->other_than_personal_guarantee_ownership}}">
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
                <h3 class="text-center text-danger">Valuation</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label><strong>Evaluator Company</strong></label>
                        <input type="text" class="form-control" id="validationCustom48" title=""
                               name="customer[valuation_evaluator_company]" value="{{$customer->valuation_evaluator_company}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label><strong>Date of Valuation</strong></label>
                        <input type="date" class="form-control" id="validationCustom49" title=""
                               name="customer[valuation_date_of_valuation]" value="{{$customer->valuation_date_of_valuation}}">
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
                <h3 class="text-center text-danger">Insurance</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-3 mb-2">
                        <label><strong>Insurance Company</strong></label>
                        <input type="text" class="form-control" id="validationCustom50" title=""
                               name="customer[insurance_company]" value="{{$customer->insurance_company}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Date of Insurance</strong></label>
                        <input type="date" class="form-control" id="validationCustom51" title="" name="customer[insurance_date_of_insurance]"
                               value="{{$customer->insurance_date_of_insurance}}">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label><strong>Insurance Amount</strong></label>
                        <input type="text" class="form-control" id="validationCustom52" title=""
                               name="customer[insurance_insurance_amount]" value="{{$customer->insurance_insurance_amount}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label><strong>Date of Expiry of Insurance</strong></label>
                        <input type="date" class="form-control" id="validationCustom53" title=""
                               name="customer[insurance_date_of_expiry_of_insurance]" value="{{$customer->insurance_date_of_expiry_of_insurance}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label><strong>Claim Amount</strong></label>
                        <input type="text" class="form-control" id="validationCustom48" title=""
                               name="customer[insurance_claim_outstanding_claim_amount]"
                               value="{{$customer->insurance_claim_outstanding_claim_amount}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label><strong>Date of Claim</strong></label>
                        <input type="date" class="form-control" id="validationCustom54" title=""
                               name="customer[insurance_claim_outstanding_date_of_claim]"
                               value="{{$customer->insurance_claim_outstanding_date_of_claim}}">
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
                <h3 class="text-center text-danger">NPL Recovery Remarks</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-12 mb-2">
                        <label for="validationCustom54" title="92"><strong>NPL Recovery Remarks</strong></label>
                        <textarea name="customer[npl_recovery_remarks]" class="form-control">{{$customer->npl_recovery_remarks}}</textarea>
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
                <h3 class="text-center text-danger">Litigation Status</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label><strong>Name of Court</strong></label>
                        <input type="text" class="form-control" id="validationCustom50" title=""
                               name="customer[litigation_status_name_of_court]" value="{{$customer->litigation_status_name_of_court}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label><strong>Recovery Status (Full or Partial)</strong></label>
                        <input type="text" class="form-control" id="validationCustom51" title=""
                               name="customer[litigation_status_recovery_status_full_or_partial]" value="{{$customer->litigation_status_recovery_status_full_or_partial}}">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label><strong>Date of Final Settlement</strong></label>
                        <input type="date" class="form-control" id="validationCustom52" title=""
                               name="customer[litigation_status_date_of_final_settlement]" value="{{$customer->litigation_status_date_of_final_settlement}}">
                    </div>
                    <input type="hidden" name="customer[status]" value="{{$customer->status}}">
                </div>
            </div>
        </div>
        <!-- /.card -->

        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection



@section('custom_scripts_body')
    @livewireScripts
@endsection
