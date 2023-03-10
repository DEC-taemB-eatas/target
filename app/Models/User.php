<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // userとweightは一対多の関係
    public function userWeights()
    {
        return $this->hasMany(Weight::class);
    }
    public function userFats()
    {
        return $this->hasMany(Fat::class);
    }
    public function userMuscles()
    {
        return $this->hasMany(Muscle::class);
    }
    public function userQuestions()
    {
        return $this->hasMany(Question::class);
    }
    public function userScores()
    {
        return $this->hasMany(Scores::class);
    }
}
