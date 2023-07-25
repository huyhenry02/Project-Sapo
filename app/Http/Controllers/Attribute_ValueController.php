<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Attribute_value;
use Illuminate\Http\Request;

class Attribute_ValueController extends Controller
{

    public function show_list_value($id){
        $attribute = Attribute::find($id);
        return view('page.attribute.value.list',['attribute'=>$attribute]);
    }
    public function show_add_value(){
        $attribute = Attribute::where('id')->first();
        return view('page.attribute.value.add',['attribute'=>$attribute]);
    }
    public function show_edit_value(){
        return view('page.attribute.value.edit');
    }
    public function add_value($attributeId, $value){
        $attribute = Attribute::find($attributeId);
        if ($attribute){
            $attributeValue = new Attribute_value();
            $attributeValue->value = $value;
            $attribute->attributeValues()->save($attributeValue);
        }
        return redirect()->route('show_list_value.index');

    }
}
