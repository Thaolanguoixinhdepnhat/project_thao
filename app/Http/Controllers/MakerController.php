<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maker;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MakerController extends Controller
{
    // public function index(Request $request)
    // {
    //     // Lấy mã nhà sản xuất từ request
    //     $makerId = $request->input('id'); 
    //     $maker_name = $request->input('maker_name'); 
    
    //     // Tìm kiếm theo ID hoặc tên nhà sản xuất
    //     $makers = Maker::when($makerId, function ($query) use ($makerId) {
    //         return $query->where('id', $makerId);
    //     })->when($maker_name, function ($query) use ($maker_name) {
    //         return $query->where('maker_name', 'LIKE', "%$maker_name%");
    //     })->paginate(5);
    
    //     return view('maker.index_maker', compact('makers', 'makerId', 'maker_name'));
    // }

    // public function destroy($id)
    // {
    //     $maker = Maker::findOrFail($id);
    //     $maker->delete();
    //     return redirect()->route('maker.index')->with('success', 'Nhà sản xuất đã được xóa thành công.');
    // }

    // public function edit($id)
    // {
    //     $maker = Maker::findOrFail($id);
    //     return view('maker.edit_maker', compact('maker'));
    // }


    // public function create()
    // {
    //     return view('maker.create_maker');
    // }

    // public function store(Request $request)
    // {
    //     // Xác thực dữ liệu đầu vào
    //     $request->validate([
    //         'maker_name' => 'required',
    //         'tel'        => 'required|numeric',
    //         'email'      => 'required|string|email',
    //         'note'       => 'nullable|string',
    //     ]);
    
    //     // Kiểm tra tên nhà sản xuất đã tồn tại chưa
    //     if (Maker::where('maker_name', $request->maker_name)->exists()) {
    //         return back()->withErrors(['maker_name' => 'Tên nhà sản xuất đã tồn tại, vui lòng chọn tên khác.'])->withInput();
    //     }
    
    //     // Kiểm tra email đã tồn tại chưa
    //     if (Maker::where('email', $request->email)->exists()) {
    //         return back()->withErrors(['email' => 'Email nhà sản xuất đã tồn tại, vui lòng chọn email khác.'])->withInput();
    //     }
    
    //     // Lưu nhà sản xuất mới
    //     $maker = new Maker();
    //     $maker->maker_name = $request->maker_name;
    //     $maker->email = $request->email;
    //     $maker->tel = $request->tel;
    //     $maker->note = $request->note;
    //     $maker->created_at = Carbon::now();
    //     $maker->save();
    
    //     return redirect()->route('maker.index')->with('success', 'Nhà sản xuất đã được đăng ký thành công.');
    // }
    
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'maker_name' => 'required',
    //         'tel'        => 'required|numeric',
    //         'email'      => 'required|string|email',
    //         'note' => 'nullable|string',

    //     ]);
    //     if (Maker::where('maker_name', $request->maker_name)->where('id', '!=', $id)->exists()) {
    //         return back()->withErrors(['maker_name' => 'Tên nhà sản xuất đã tồn tại, vui lòng chọn tên khác.'])->withInput();
    //     }

    //     if (Maker::where('email', $request->email)->where('id', '!=', $id)->exists()) {
    //         return back()->withErrors(['email' => 'Email nhà sản xuất đã tồn tại, vui lòng chọn email khác.'])->withInput();
    //     }
    
    //     $maker = Maker::findOrFail($id);
    //     $maker->maker_name = $request->maker_name;
    //     $maker->email = $request->email;
    //     $maker->tel = $request->tel;
    //     $maker->note = $request->note;
    //     $maker->updated_at = Carbon::now();
    //     $maker->save();
    //     return redirect()->route('maker.index')->with('success', 'Thông tin nhà sản xuất đã được cập nhật.');
    // }
    




    public function index(Request $request)
    {
        $makerId = $request->input('id'); 
        $maker_name = $request->input('maker_name'); 
    
        // Kiểm tra quyền của người dùng
        if (Auth::guard('admin')->user()->role_id == 1) {
            // Nhân viên chỉ có quyền xem thông tin
            $makers = Maker::when($makerId, function ($query) use ($makerId) {
                return $query->where('id', $makerId);
            })->when($maker_name, function ($query) use ($maker_name) {
                return $query->where('maker_name', 'LIKE', "%$maker_name%");
            })->paginate(5);
        } else {
            // Quản trị viên, quản lý có quyền thêm, sửa, xóa
            $makers = Maker::when($makerId, function ($query) use ($makerId) {
                return $query->where('id', $makerId);
            })->when($maker_name, function ($query) use ($maker_name) {
                return $query->where('maker_name', 'LIKE', "%$maker_name%");
            })->paginate(5);
        }
    
        return view('maker.index_maker', compact('makers', 'makerId', 'maker_name'));
    }
    

    public function create()
    {
        // // Kiểm tra quyền của người dùng
        // if (Auth::guard('admin')->user()->role_id == 1) {
        //     // Nhân viên không có quyền tạo nhà sản xuất
        //     return redirect()->route('maker.index')->with('error', 'Bạn không có quyền tạo nhà sản xuất.');
        // }
    
        return view('maker.create_maker');
    }
    
    public function store(Request $request)
{
    // // Kiểm tra quyền của người dùng
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     // Nhân viên không có quyền tạo nhà sản xuất
    //     return redirect()->route('maker.index')->with('error', 'Bạn không có quyền tạo nhà sản xuất.');
    // }

    $request->validate([
        'maker_name' => 'required',
        'tel'        => 'required|numeric',
        'email'      => 'required|string|email',
        'note'       => 'nullable|string',
    ]);

    if (Maker::where('maker_name', $request->maker_name)->exists()) {
        return back()->withErrors(['maker_name' => 'Tên nhà sản xuất đã tồn tại.'])->withInput();
    }

    if (Maker::where('email', $request->email)->exists()) {
        return back()->withErrors(['email' => 'Email nhà sản xuất đã tồn tại.'])->withInput();
    }

    $maker = new Maker();
    $maker->maker_name = $request->maker_name;
    $maker->email = $request->email;
    $maker->tel = $request->tel;
    $maker->note = $request->note;
    $maker->created_at = Carbon::now();
    $maker->create_staff = Auth::guard('admin')->id(); // Gán người tạo
    $maker->save();

    return redirect()->route('maker.index')->with('success', 'Nhà sản xuất đã được đăng ký thành công.');
}

public function edit($id)
{
    // // Kiểm tra quyền của người dùng
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     // Nhân viên không có quyền chỉnh sửa nhà sản xuất
    //     return redirect()->route('maker.index')->with('error', 'Bạn không có quyền sửa thông tin nhà sản xuất.');
    // }

    $maker = Maker::findOrFail($id);
    return view('maker.edit_maker', compact('maker'));
}

public function update(Request $request, $id)
{
    // // Kiểm tra quyền của người dùng
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     // Nhân viên không có quyền sửa nhà sản xuất
    //     return redirect()->route('maker.index')->with('error', 'Bạn không có quyền sửa thông tin nhà sản xuất.');
    // }

    $request->validate([
        'maker_name' => 'required',
        'tel'        => 'required|numeric',
        'email'      => 'required|string|email',
        'note'       => 'nullable|string',
    ]);

    if (Maker::where('maker_name', $request->maker_name)->where('id', '!=', $id)->exists()) {
        return back()->withErrors(['maker_name' => 'Tên nhà sản xuất đã tồn tại.'])->withInput();
    }

    if (Maker::where('email', $request->email)->where('id', '!=', $id)->exists()) {
        return back()->withErrors(['email' => 'Email nhà sản xuất đã tồn tại.'])->withInput();
    }

    $maker = Maker::findOrFail($id);
    $maker->maker_name = $request->maker_name;
    $maker->email = $request->email;
    $maker->tel = $request->tel;
    $maker->note = $request->note;
    $maker->updated_at = Carbon::now();
    $maker->update_staff = Auth::guard('admin')->id(); // Gán người cập nhật
    $maker->save();

    return redirect()->route('maker.index')->with('success', 'Thông tin nhà sản xuất đã được cập nhật.');
}

public function destroy($id)
{
    // // Kiểm tra quyền của người dùng
    // if (Auth::guard('admin')->user()->role_id == 1) {
    //     // Nhân viên không có quyền xóa nhà sản xuất
    //     return redirect()->route('maker.index')->with('error', 'Bạn không có quyền xóa nhà sản xuất.');
    // }

    $maker = Maker::findOrFail($id);
    $maker->delete_staff = Auth::guard('admin')->id(); // Gán người xóa
    $maker->save(); // Lưu trước khi xóa

    $maker->delete(); 
    return redirect()->route('maker.index')->with('success', 'Nhà sản xuất đã được xóa thành công.');
}

}  



