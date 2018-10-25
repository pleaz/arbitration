<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Organization
 *
 * @property int $id
 * @property string $name
 * @property string|null $inn
 * @property string|null $address
 * @property string|null $owner
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Events[] $event
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Organization extends Model
{
    protected $table = 'organization';
    protected $fillable = ['name', 'inn', 'address', 'owner'];

    public function event()
    {
        return $this->hasMany('App\Events', 'organization_id');
    }
}