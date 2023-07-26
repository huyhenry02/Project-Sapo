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
    public function show_add_value($id){
        $attribute = Attribute::find($id);
        return view('page.attribute.value.add',['attribute'=>$attribute]);
    }
    public function show_edit_value(){
        return view('page.attribute.value.edit');
    }
    public function add_value($attributeId, Request $request){
        $attribute = Attribute::find($attributeId);
//        dd($attribute);
        if ($attribute){
            $attributeValue = new Attribute_value();
            $attributeValue->value = $request->input('value');
            $attribute->attribute_values()->save($attributeValue);
        }
        return redirect()->route('show_list_value.index',['id'=>$attributeId]);
    }
}
