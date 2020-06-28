<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('branch',100)->nullable();
            $table->string('zone',100)->nullable();
            $table->string('region',100)->nullable();
            $table->string('district',100)->nullable();
            $table->string('borrower_name',100)->nullable();
            $table->string('s_o_d_o_w_o',100)->nullable();
            $table->string('borrowers_gender',100)->nullable();
            $table->string('business_department_profession',100)->nullable();
            $table->string('designation',100)->nullable();
            $table->string('pp',100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('borrower_office_business_address',100)->nullable();
            $table->string('borrower_present_addres',100)->nullable();
            $table->string('borrower_permanent_address',100)->nullable();
            $table->string('borrower_cnic',100)->nullable();
            $table->string('contact',100)->nullable();
            $table->string('a_c_cd_saving',100)->nullable();
            $table->string('type_of_facility_approved',100)->nullable();
            $table->string('nature_of_facility_availed',100)->nullable();
            $table->string('renewal_enhancement_fresh_sanction',100)->nullable();
            $table->string('amount_sanctioned',100)->nullable();
            $table->string('amount_enhanced_if_any',100)->nullable();
            $table->date('sanction_date')->nullable();
            $table->string('tenure_of_loan',100)->nullable();
            $table->string('installment_type_monthly_quarterly_lump_sump',100)->nullable();
            $table->string('no_of_installment',100)->nullable();
            $table->date('dac_issuance_date')->nullable();
            $table->date('disbursement_date')->nullable();
            $table->string('amount_disbursed',100)->nullable();
            $table->date('expiry_date_as_per_dac')->nullable();
            $table->string('mark_up_rate',100)->nullable();
            $table->string('branch_manager_name_while_sanctioning',100)->nullable();
            $table->string('installment_principle_amount',100)->nullable();
            $table->string('installment_markup_amount',100)->nullable();
            $table->string('installment_insurance_if_any',100)->nullable();
            $table->string('installment_total_installment',100)->nullable();
            $table->string('previous_months_no_of_installment',100)->nullable();
            $table->string('previous_months_days_passed_overdue',100)->nullable();
            $table->string('previous_months_principle_a',100)->nullable();
            $table->string('previous_months_mark_up_b',100)->nullable();
            $table->string('previous_months_penalty_charges_c',100)->nullable();
            $table->string('previous_months_total_abc',100)->nullable();
            $table->string('previous_months_category_of_default',100)->nullable();
            $table->string('current_months_no_of_installment',100)->nullable();
            $table->string('current_months_day_passed_overdue',100)->nullable();
            $table->string('current_months_principle_a',100)->nullable();
            $table->string('current_months_mark_up_b',100)->nullable();
            $table->string('current_months_penalty_charges_c',100)->nullable();
            $table->string('current_months_total_abc',100)->nullable();
            $table->string('current_months_category_of_default',100)->nullable();
            $table->string('adjustment_recovery_during_the_month_principle_amount',100)->nullable();
            $table->string('partial_cash_recovery',100)->nullable();
            $table->string('facility_outstanding_amount_secured_principle_previous',100)->nullable();
            $table->string('facility_outstanding_amount_secured_principle_current',100)->nullable();
            $table->string('facility_outstanding_amount_unsecured_principle_previous',100)->nullable();
            $table->string('facility_outstanding_amount_unsecured_principle_current',100)->nullable();
            $table->string('npl_amount',100)->nullable();
            $table->string('markup_detail_markup_receivable_4600',100)->nullable();
            $table->string('markup_detail_mark_up_recovered_since_01_01_2019_till_date',100)->nullable();
            $table->string('markup_detail_mark_up_recoverable_a_c_5008',100)->nullable();
            $table->string('markup_detail_mark_up_reserve_a_c_2305',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_name',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_cnic',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_contact',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_dept_business',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_dept_business_address',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_bps',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_pp_if_salaried',100)->nullable();
            $table->string('personal_guarantee_no_1_detail_address',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_name',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_cnic',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_contact',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_dept_business',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_dept_business_address',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_bps',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_pp_if_salaried',100)->nullable();
            $table->string('personal_guarantee_no_2_detail_address',100)->nullable();
            $table->string('other_than_personal_guarantee_primary',100)->nullable();
            $table->string('other_than_personal_guarantee_secondary',100)->nullable();
            $table->string('other_than_personal_guarantee_type_of_security',100)->nullable();
            $table->string('other_than_personal_guarantee_fsv',100)->nullable();
            $table->string('other_than_personal_guarantee_ownership',100)->nullable();
            $table->string('valuation_evaluator_company',100)->nullable();
            $table->date('valuation_date_of_valuation')->nullable();
            $table->string('insurance_company',100)->nullable();
            $table->date('insurance_date_of_insurance')->nullable();
            $table->string('insurance_insurance_amount',100)->nullable();
            $table->date('insurance_date_of_expiry_of_insurance')->nullable();
            $table->string('insurance_claim_outstanding_claim_amount',100)->nullable();
            $table->date('insurance_claim_outstanding_date_of_claim')->nullable();
            $table->string('npl_recovery_remarks',100)->nullable();
            $table->string('litigation_status_name_of_court',100)->nullable();
            $table->string('litigation_status_recovery_status_full_or_partial',100)->nullable();
            $table->date('litigation_status_date_of_final_settlement')->nullable();
            $table->date('installment_deposit_date')->nullable();
            $table->date('installment_due_date')->nullable();
            $table->string('status',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
