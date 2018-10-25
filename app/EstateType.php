<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EventType
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Events[] $event
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EventType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Estate[] $estate
 */
class EstateType extends Model
{
    protected $table = 'estate_type';
    protected $fillable = ['name'];

    public function estate()
    {
        return $this->hasMany('App\Estate', 'estate_type_id');
    }
}