<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id','last_check_score','email_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getAgeAttribute(){
        $dateofBirth = $this->birthday;
        $today = date("Y-m-d");
        $age = date_diff(date_create($dateofBirth), date_create($today));
        return $age->format('%y');
    }
    public function generatedreport(){
        return $this->hasMany(GeneratedReport::Class);
    }
}
