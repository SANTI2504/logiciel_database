<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'product_code',
        'amount',
        'lab_manufacturers_id',
        'products_id',
        ];

    //eloquent relacion uno a muchos
    public function Lab_manufacturer()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(lab_manufacturer::class, 'lab_manufacturers_id');

    }

    //eloquent relacion uno a muchos
    public function Product()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(product::class, 'products_id');

    }




}
