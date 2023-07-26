<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    public function show_list_vendor()
    {
        $vendor = Vendor::all();
        $vendorCount = Vendor::count();
        $activeVendorCount = DB::table('vendors')->where('active', 1)->count();
        return view('page.vendor.list',['vendor'=>$vendor,'vendorCount'=>$vendorCount,'activeVendorCount'=>$activeVendorCount]);
    }
    public function show_add_vendor()
    {
        return view('page.vendor.add');
    }
    public function show_edit_vendor()
    {
        return view('page.vendor.edit');
    }
    public function add(Request $request){
        $vendor = new Vendor();
        $vendor->name = $request->input('name');
        $vendor->active = $request->input('active');
        $vendor->save();
        return redirect()->route('show_list_vendor.index');
    }
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        if (!$vendor) {
            return redirect()->route('show_list_vendor.index')->with('error', 'Không tìm thấy danh mục!');
        }
        $vendor->delete();
        return redirect()->route('show_list_vendor.index')->with('success', 'Danh mục đã được xóa thành công!');
    }
}
