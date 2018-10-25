<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Obligation
 *
 * @property-read \App\Cases $cases
 * @property-read \App\ObligationType $obligation_type
 * @mixin \Eloquent
 * @property int $id
 * @property int $kind
 * @property string|null $arrears
 * @property string|null $fine
 * @property int $obligation_type_id
 * @property int $case_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereArrears($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereCaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereObligationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Obligation whereUpdatedAt($value)
 */
class Obligation extends Model
{
    protected $table = 'obligation';
    protected $fillable = ['kind', 'arrears', 'fine'];

    public function cases()
    {
        return $this->belongsTo('App\Cases', 'case_id');
    }

    public function obligation_type()
    {
        return $this->belongsTo('App\ObligationType', 'obligation_type_id');
    }
}