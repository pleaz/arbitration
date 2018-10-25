<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Cases
 *
 * @property int $id
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $patron
 * @property string|null $snils
 * @property string|null $inn
 * @property string|null $p_serial
 * @property string|null $p_number
 * @property string|null $p_issuer
 * @property string|null $p_date
 * @property string|null $date_birth
 * @property string|null $place_birth
 * @property string|null $index
 * @property string|null $region
 * @property string|null $area
 * @property string|null $city
 * @property string|null $community
 * @property string|null $street
 * @property string|null $house
 * @property string|null $build
 * @property string|null $home
 * @property string|null $channel
 * @property string|null $contract
 * @property string|null $n_proxy
 * @property string|null $manager_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Events[] $event
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereBuild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereCommunity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereDateBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereNProxy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases wherePDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases wherePIssuer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases wherePNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases wherePSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases wherePatron($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases wherePlaceBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereSnils($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Estate[] $estate
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Events[] $events
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Loan[] $loan
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Obligation[] $obligation
 */
class Cases extends Model
{
    protected $table = 'cases';
    protected $fillable = ['surname', 'name', 'patron', 'snils', 'inn', 'p_serial', 'p_number', 'p_issuer', 'p_date', 'date_birth', 'place_birth', 'index', 'region', 'area', 'city', 'community', 'street', 'house', 'build', 'home', 'channel', 'contract', 'n_proxy'];

    public function events()
    {
        return $this->hasMany('App\Events', 'case_id');
    }

    public function estate()
    {
        return $this->hasMany('App\Estate', 'case_id');
    }

    public function obligation()
    {
        return $this->hasMany('App\Obligation', 'case_id');
    }

    public function loan()
    {
        return $this->hasMany('App\Loan', 'case_id');
    }
}