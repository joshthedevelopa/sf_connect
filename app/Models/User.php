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
        'description'
    ];

    static public array $region_list = [
        "Greater Accra",
        "Central",
        "Ashanti",
        "Eastern",
        "Western",
        "Western North",
        "Volta",
        "Upper West",
        "Upper East",
        "North East",
        "Oti",
        "Bono East",
        "Ahafo",
        "Northern",
        "Savannah",
        "Brong Ahafo",
    ];

    static public array $type_list = [
        "Donor and Embassy",
        "NGO",
        "Projectcommunities and Schools",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    protected $visible = [
        'id',
        'name',
        'type',
        'region',
        'description',
        'date_created',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
