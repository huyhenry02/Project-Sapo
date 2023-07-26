<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function show_list_brand()
    {
        $brand = Brand::all();
        $brandCount = Brand::count();
        $activeBrandCount = DB::table('brands')->where('active', 1)->count();
        return view('page.brand.list',['brand'=>$brand,'brandCount'=>$brandCount,'activeBrandCount'=>$activeBrandCount]);
    }
    public function show_add_brand()
    {
        return view('page.brand.add');
    }
    public function show_edit_brand()
    {
        return view('page.brand.edit');
    }

    public function add(Request $request){
        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->active = $request->input('active');
        $brand->save();
        return redirect()->route('show_list_brand.index');
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->route('show_list_brand.index')->with('error', 'Không tìm thấy thương hiệu!');
        }
        $brand->delete();
        return redirect()->route('show_list_brand.index')->with('success', 'Thương hiệu đã được xóa thành công!');
    }
}
