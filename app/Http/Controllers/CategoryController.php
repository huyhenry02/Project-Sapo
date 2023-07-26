<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show_list_category()

    {
        $category = Category::all();
        $categoryCount = Category::count();
        $activeBrandCount = DB::table('categories')->where('active', 1)->count();
        return view('page.category.list',['category'=>$category,'categoryCount'=>$categoryCount,'activeBrandCount'=>$activeBrandCount]);
    }
    public function show_add_category()
    {
        return view('page.category.add');
    }
    public function show_edit_category()
    {
        return view('page.category.edit');
    }
    public function add(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->active = $request->input('active');
        $category->save();
        return redirect()->route('show_list_category.index');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('show_list_category.index')->with('error', 'Không tìm thấy danh mục!');
        }
        $category->delete();
        return redirect()->route('show_list_category.index')->with('success', 'Danh mục đã được xóa thành công!');
    }
}
