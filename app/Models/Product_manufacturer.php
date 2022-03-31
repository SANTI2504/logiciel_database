<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_manufacturer extends Model
{
    use HasFactory;
    protected $fillable = [
        'products_id',
        'lab_manufacturers_id',
    ];

    //eloquent relacion uno a muchos
    public function Product()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(product::class, 'products_id');

    }

    //eloquent relacion uno a muchos
    public function Lab_manufacturer()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(lab_manufacturer::class, 'lab_manufacturers_id');

    }

}
