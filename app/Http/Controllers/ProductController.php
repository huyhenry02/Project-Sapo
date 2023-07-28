<?php

namespace App\Http\Controllers;

use App\Models\Attribute_value;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_list_product()
    {

        $product = Product::all();
//        dd($product);
        return view('page.product.list',['product'=>$product]);
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
        try {
            $validateProduct = $request->validate([
                'name' => 'required|string|max:255',
                'sku' => 'required|string|max:50',
                'price' => 'required|numeric|min:0',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'nullable|string',
                'attribute_value_id' => 'exists:attribute_values,id',
                'brand_id' => 'required|exists:brands,id',
                'category_id' => 'required|exists:categories,id',
                'vendor_id' => 'required|exists:vendors,id',
                'availability' => 'nullable|boolean',
            ]);
            $availability = $request->has('availability');
            $imagePath = $request->file('image')->store('products','public');
            $product = new Product();
            $product->name = $validateProduct['name'];
            $product->sku = $validateProduct['sku'];
            $product->price = $validateProduct['price'];
            $product->image = $imagePath;
            $product->description  = $validateProduct['description'];
            $product->attribute_value_id  = $validateProduct['attribute_value_id'];
            $product->brand_id  = $validateProduct['brand_id'];
            $product->category_id  = $validateProduct['category_id'];
            $product->vendor_id  = $validateProduct['vendor_id'];
            $product->availability  = $availability;
            $product->save();

            return redirect()->route('show_list_product.index');
        } catch (\Exception $e) {
            dd($e->getMessage()); // In ra thông báo lỗi để xác định nguyên nhân
        }
}
}
