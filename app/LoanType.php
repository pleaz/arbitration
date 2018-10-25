<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\LoanType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Loan[] $loan
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LoanType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LoanType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LoanType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LoanType whereUpdatedAt($value)
 */
class LoanType extends Model
{
    protected $table = 'loan_type';
    protected $fillable = ['name'];

    public function loan()
    {
        return $this->hasMany('App\Loan', 'loan_type_id');
    }
}