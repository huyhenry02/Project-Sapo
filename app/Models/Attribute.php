<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table='attributes';
    public function attribute_values()
    {
        return $this->hasMany(Attribute_value::class,'attribute_parent_id', 'id');
    }
}

