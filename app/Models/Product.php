<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'product_name',
    ];
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
    // public function customer(){ //Customer id olmali
    //     return $this->belongsTo('App\Models\Customer');
    // }
    public function sellers(){
        return $this->belongsToMany('App\Models\Seller');
    }
    public function transactionReports(){
        return $this->hasMany('App\Models\TransactionReport');
    }
}
