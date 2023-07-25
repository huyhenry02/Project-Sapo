<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    public function show_list_attribute()
    {
        $attribute = Attribute::all();
        $attributeCount = Attribute::count();
        $activeAttributeCount = DB::table('attributes')->where('active', 1)->count();
        return view('page.attribute.list',['attribute'=>$attribute,'attributeCount'=>$attributeCount,'activeAttributeCount'=>$activeAttributeCount]);
    }
    public function show_add_attribute()
    {
        return view('page.attribute.add');
    }
    public function show_edit_attribute()
    {
        return view('page.attribute.add');
    }
    public function add(Request $request){
        $attribute = new Attribute();
        $attribute->name = $request->input('name');
        $attribute->active = $request->input('active');
        $attribute->save();
        return redirect()->route('show_list_attribute.index');
    }
}
