<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Organization whereUpdatedAt($value)
 */
	class Organization extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
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
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
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
 * @property string|null $n_proxy
 * @property string|null $manager_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cases whereNProxy($value)
 */
	class Cases extends \Eloquent {}
}

