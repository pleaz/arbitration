<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\LenderType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Loan[] $loan
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LenderType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LenderType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LenderType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LenderType whereUpdatedAt($value)
 */
class LenderType extends Model
{
    protected $table = 'lender_type';
    protected $fillable = ['name'];

    public function loan()
    {
        return $this->hasMany('App\Loan', 'lender_type_id');
    }
}