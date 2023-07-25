<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute_value extends Model
{
    use HasFactory;
    protected $table='attribute_values';
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function attribute()
    {
        return $this->belongsTo(Attribute::class,'attribute_parent_id', 'id');
    }
}
