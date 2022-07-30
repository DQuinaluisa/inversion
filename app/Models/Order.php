<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use DB;
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'description',
        'status',
        'reference_number',
        'user_id'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }


    public static function getProductPrice($value) {
        switch($value) {
            case 'product-1':
                $price = '10.00';
                break;
                default:
                $price = '0.00';
         }
         return $price;
    }

    public static function getProductDescription($value) {
        switch($value) {
            case 'product-1':
                $description = 'Pago de Product';
                break;
                default:
                $description = 'No hay pago';
         }
         return $description;
    }



}
