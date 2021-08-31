<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    // ejecucion de trait
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastnames',
        'number_document',
        'email',
        'password',
        'date_of_bird',
        'number_cell',
        'address',
        'city',
        'location',
        'neighborhood',
        'gender_id',
        'civil_status_id',
        'type_document_id',
        'roles_id',
        'eps_id',
    ];

    //eloquent relacion uno a muchos
    public function Gender()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Gender::class, 'gender_id');

    }

    public function Civil_status()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Civil_status::class, 'civil_status_id');

    }

    public function Type_document()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Type_document::class, 'type_document_id');

    }

    public function Role()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(\Spatie\Permission\Models\Role::class, 'roles_id');

    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


}
