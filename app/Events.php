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
 * @property int $open
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Events whereOpen($value)
 */
class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['comment', 'date', 'open'];

    public function cases()
    {
        return $this->belongsTo('App\Cases', 'case_id');
    }

    public function event_type()
    {
        return $this->belongsTo('App\EventType', 'event_type_id');
    }

    public function organization()
    {
        return $this->belongsTo('App\Organization', 'organization_id');
    }
}