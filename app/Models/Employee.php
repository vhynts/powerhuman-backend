<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'gender',
        'age',
        'phone',
        'photo',
        'team_id',
        'role_id',
        'is_verified',
        'verified_at'
    ];

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function roles(){
        return $this->belongsTo(Role::class);
    }
}
