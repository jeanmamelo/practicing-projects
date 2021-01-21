<?php
namespace App;
Use Illuminate\Database\Eloquent\Model
Class Cupcake extends Model {
    protected $fillable = ['flavour', 'description', 'price']
    protected $timestamps = false;
}