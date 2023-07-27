<?php

namespace App\Http\Controllers;

use App\Models\Attribute_value;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_list_product()
    {
        return view('page.product.list');
    }
    public function show_add_product()
    {
        $category = Category::all();
        $brand = Brand::all();
        $vendor = Vendor::all();
        $color = Attribute_value::where('attribute_parent_id', 1)->get();
        $ram = Attribute_value::where('attribute_parent_id', 2)->get();
        $size = Attribute_value::where('attribute_parent_id', 3)->get();
        return view('page.product.add',['category'=>$category,'brand'=>$brand,'vendor'=>$vendor,'color'=>$color,'ram'=>$ram,'size'=>$size]);
    }
    public function show_edit_product()
    {
        return view('page.product.edit');
    }
    public function add(Request $request)
    {

    }
}
