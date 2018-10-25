<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Events
 *
 * @property int $id
 * @property int $case_id
 * @property int $organization_id
 * @property int $event_type_id
 * @property string|null $comment
 * @property string|null $date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Cases $cases
 * @property-read \App\EventType $event_type
 * @property-read \App\Organization $organization
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereCaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereEventTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $name
 * @property string|null $since
 * @property string|null $quantity
 * @property string|null $price
 * @property string|null $sell_price
 * @property string|null $offer
 * @property int $estate_type_id
 * @property-read \App\EstateType $estate_type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estate whereEstateTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estate whereOffer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estate wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estate whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estate whereSellPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estate whereSince($value)
 */
class Estate extends Model
{
    protected $table = 'estate';
    protected $fillable = ['name', 'since', 'quantity', 'price', 'sell_price', 'date', 'offer'];

    public function estate_type()
    {
        return $this->belongsTo('App\EstateType', 'estate_type_id');
    }

    public function cases()
    {
        return $this->belongsTo('App\Cases', 'case_id');
    }

}