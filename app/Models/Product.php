<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //eloquent relacion uno a muchos
    public function Inventory()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Inventory::class, 'inventories_id');

    }

}
