<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    // public function index(Request $request)
    // {
    //     // Lấy mã nhà sản xuất từ request
    //     $categoryId = $request->input('id'); 
    //     $category_name= $request->input('category_name'); 
    
    //     // Tìm kiếm theo ID hoặc tên nhà sản xuất
    //     $categorys = Category::when($categoryId, function ($query) use ($categoryId) {
    //         return $query->where('id', $categoryId);
    //     })->when($category_name, function ($query) use ($category_name) {
    //         return $query->where('category_name', 'LIKE', "%$category_name%");
    //     })->paginate(5);
    
    //     return view('category.index_category', compact('categorys', 'categoryId', 'category_name'));
    // }

    // public function destroy($id)
    // {
    //     $category = Category::findOrFail($id);
    //     $category->delete();
    //     return redirect()->route('category.index')->with('success', 'Loại sản xuất đã được xóa thành công.');
    // }

    // public function edit($id)
    // {
    //     $category = Category::findOrFail($id);
    //     return view('category.edit_category', compact('category'));
    // }

    // public function create()
    // {
    //     return view('category.create_category');
    // }

    // public function store(Request $request)
    // {
    //     // Xác thực dữ liệu đầu vào
    //     $request->validate([
    //         'category_name' => 'required', 
    //     ]);
    
    //     // Kiểm tra tên nhà sản phẩm đã tồn tại chưa
    //     if (Category::where('category_name', $request->category_name)->exists()) {
    //         return back()->withErrors(['category_name' => 'Tên loại sản phẩm đã tồn tại, vui lòng chọn tên khác.'])->withInput();
    //     }

    
    //     // Lưu nhà sản phẩm mới
    //     $category = new Category();
    //     $category->category_name = $request->category_name;
    //     $category->created_at = Carbon::now();
    //     $category->save();
    
    //     return redirect()->route('category.index')->with('success', 'Loại sản phẩm đã được đăng ký thành công.');
    // }
    
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'category_name' => 'required',
    //     ]);
    //     if (Category::where('category_name', $request->category_name)->where('id', '!=', $id)->exists()) {
    //         return back()->withErrors(['category_name' => 'Tên loại sản phẩm đã tồn tại, vui lòng chọn tên khác.'])->withInput();
    //     }
        

    //     $category = Category::findOrFail($id);
    //     $category->category_name = $request->category_name;
    //     $category->updated_at = Carbon::now();
    //     $category->save();
    
    //     return redirect()->route('category.index')->with('success', 'Thông tin loại sản phẩm đã được cập nhật.');
    // }
    public function index(Request $request)
    {
        $categoryId = $request->input('id'); 
        $category_name = $request->input('category_name'); 
    
        $categorys = Category::when($categoryId, function ($query) use ($categoryId) {
            return $query->where('id', $categoryId);
        })->when($category_name, function ($query) use ($category_name) {
            return $query->where('category_name', 'LIKE', "%$category_name%");
        })->paginate(5);
    
        return view('category.index_category', compact('categorys', 'categoryId', 'category_name'));
    }

    public function create()
{
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     return redirect()->route('category.index')->with('error', 'Bạn không có quyền tạo loại sản phẩm.');
    // }

    return view('category.create_category');
}

public function store(Request $request)
{
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     return redirect()->route('category.index')->with('error', 'Bạn không có quyền tạo loại sản phẩm.');
    // }

    $request->validate([
        'category_name' => 'required', 
    ]);

    if (Category::where('category_name', $request->category_name)->exists()) {
        return back()->withErrors(['category_name' => 'Tên loại sản phẩm đã tồn tại, vui lòng chọn tên khác.'])->withInput();
    }

    $category = new Category();
    $category->category_name = $request->category_name;
    $category->created_at = Carbon::now();
    $category->create_staff = Auth::guard('admin')->id(); // Gán người tạo
    $category->save();

    return redirect()->route('category.index')->with('success', 'Loại sản phẩm đã được đăng ký thành công.');
}


public function edit($id)
{
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     return redirect()->route('category.index')->with('error', 'Bạn không có quyền sửa loại sản phẩm.');
    // }

    $category = Category::findOrFail($id);
    return view('category.edit_category', compact('category'));
}

public function update(Request $request, $id)
{
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     return redirect()->route('category.index')->with('error', 'Bạn không có quyền sửa loại sản phẩm.');
    // }

    $request->validate([
        'category_name' => 'required',
    ]);

    if (Category::where('category_name', $request->category_name)->where('id', '!=', $id)->exists()) {
        return back()->withErrors(['category_name' => 'Tên loại sản phẩm đã tồn tại, vui lòng chọn tên khác.'])->withInput();
    }

    $category = Category::findOrFail($id);
    $category->category_name = $request->category_name;
    $category->updated_at = Carbon::now();
    $category->update_staff = Auth::guard('admin')->id(); // Gán người cập nhật
    $category->save();

    return redirect()->route('category.index')->with('success', 'Loại sản phẩm đã được cập nhật.');
}


public function destroy($id)
{
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     return redirect()->route('category.index')->with('error', 'Bạn không có quyền xóa loại sản phẩm.');
    // }

    $category = Category::findOrFail($id);
    $category->delete_staff = Auth::guard('admin')->id(); // Gán người xóa
    $category->save(); // Lưu lại trước khi xóa

    $category->delete();
    return redirect()->route('category.index')->with('success', 'Loại sản phẩm đã được xóa.');
}





} 
