<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'order_menu';

    public function order_menu() {
        return $this->hasMany('\App\Model\order_menu');
    }
}
