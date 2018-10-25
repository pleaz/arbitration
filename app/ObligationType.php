<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ObligationType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Obligation[] $obligation
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ObligationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ObligationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ObligationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ObligationType whereUpdatedAt($value)
 */
class ObligationType extends Model
{
    protected $table = 'obligation_type';
    protected $fillable = ['name'];

    public function obligation()
    {
        return $this->hasMany('App\Obligation', 'obligation_type_id');
    }
}