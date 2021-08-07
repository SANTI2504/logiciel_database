<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Specialist extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'name',
        'lastnames',
        'number_document',
        'email',
        'password',
        'date_of_bird',
        'number_cell',
        'type_document_id',
        'roles_id',
        'eps_id',
    ];

    //eloquent relacion uno a muchos
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

    public function eps()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Eps::class, 'eps_id');

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


}
