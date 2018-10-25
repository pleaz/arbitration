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
 */
class EventType extends Model
{
    protected $table = 'event_type';
    protected $fillable = ['name'];

    public function event()
    {
        return $this->hasMany('App\Events', 'event_type_id');
    }
}