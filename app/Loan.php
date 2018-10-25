<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Loan
 *
 * @property-read \App\Cases $cases
 * @property-read \App\LenderType $lender_type
 * @property-read \App\LoanType $loan_type
 * @mixin \Eloquent
 * @property int $id
 * @property int $kind
 * @property string|null $contract
 * @property string|null $arrears
 * @property string|null $debt
 * @property string|null $fine
 * @property string|null $account
 * @property int $loan_type_id
 * @property int $lender_type_id
 * @property int $case_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereArrears($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereCaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereDebt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereLenderTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereLoanTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Loan whereUpdatedAt($value)
 */
class Loan extends Model
{
    protected $table = 'loan';
    protected $fillable = ['kind', 'contract', 'arrears', 'debt', 'fine', 'account'];

    public function cases()
    {
        return $this->belongsTo('App\Cases', 'case_id');
    }

    public function loan_type()
    {
        return $this->belongsTo('App\LoanType', 'loan_type_id');
    }

    public function lender_type()
    {
        return $this->belongsTo('App\LenderType', 'lender_type_id');
    }
}