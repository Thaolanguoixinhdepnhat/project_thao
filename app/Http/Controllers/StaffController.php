<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use Carbon\Carbon; 
use App\Models\Role;

class StaffController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
  public function __construct()
    {
        // Áp dụng middleware auth:admin cho tất cả các phương thức trừ login và showLoginForm
        $this->middleware('auth:admin')->except(['showLoginForm', 'login']);
    }
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:3',
        ]);

        // Tìm kiếm tài khoản theo username
        $staff = Staff::where('username', $request->username)->first();

        if ($staff) {
            // Tài khoản tồn tại, kiểm tra mật khẩu
            if (Hash::check($request->password, $staff->password)) {
                // Đăng nhập thành công
                Auth::guard('admin')->login($staff);
                $request->session()->regenerate();

                // Chuyển hướng đến trang admin
                return redirect()->route('layout.app');
            } else {
                // Tài khoản đúng nhưng mật khẩu sai
                return back()->withErrors([
                    'password' => 'Mật khẩu không đúng.',
                ])->withInput($request->except('password'));
            }
        } else {
            // Tài khoản không tồn tại
            return back()->withErrors([
                'username' => 'Tài khoản không tồn tại.',
            ])->withInput($request->except('password'));
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('success', 'Bạn đã đăng xuất thành công.');
    }
      // Hiển thị form đổi mật khẩu
      public function showChangePasswordForm()
      {
          return view('admin.change_password'); 
      }
  
    // public function changePassword(Request $request)
    // {
    //     // Xác thực dữ liệu đầu vào
    //     $request->validate([
    //         'current_password' => 'required',
    //         'new_password' => 'required|min:3',
    //         'confirm_password' => 'required|same:new_password',
    //     // ], [
    //     //     'current_password.required' => 'Mật khẩu hiện tại không được bỏ trống.',
    //     //     'new_password.required' => 'Mật khẩu mới không được bỏ trống.',
    //     //     'new_password.min' => 'Mật khẩu mới phải có ít nhất 8 ký tự.',
    //     //     'confirm_password.required' => 'Vui lòng xác nhận lại mật khẩu.',
    //     //     'confirm_password.same' => 'Mật khẩu xác nhận không trùng khớp.',
    //     ]);

    //     // Lấy thông tin người dùng hiện tại
    //     $user = Auth::guard('admin')->user();

    //     // Kiểm tra mật khẩu hiện tại
    //     if ($request->current_password !== $user->password) {
    //         return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng!']);
    //     }

    //     // Cập nhật mật khẩu mới (Không mã hóa)
    //     $user->password = $request->new_password;
    //     $user->save();

    //     return back()->with('success', 'Mật khẩu đã được thay đổi thành công.');
    // }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:3',
            'confirm_password' => 'required|same:new_password',
        ]);
    
        $user = Auth::guard('admin')->user();
    
        // So sánh mật khẩu đúng cách
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng!']);
        }
    
        // Cập nhật mật khẩu mới (CẦN mã hóa)
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        return back()->with('success', 'Mật khẩu đã được thay đổi thành công.');
    }

    


    public function index(Request $request)
    {
        $roles = Role::all()->keyBy('id');

        $query = Staff::query();
        if ($request->filled('role_name')) {
            $query->whereHas('role', function ($q) use ($request) {
                $q->where('role_name', 'like', '%' . $request->role_name . '%');
            });
        }

        if ($request->filled('username')) {
            $query->where('username', 'like', '%' . $request->username . '%');
        }

        $staffs = $query->orderBy('id', 'desc')->paginate(5);

        return view('admin.register_index', compact('staffs', 'roles'));
    }

    public function create()
    {
        $roles = Role::all(); 
        return view('admin.register_create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:staff,username|max:64',
            'password' => 'required|min:3',
            'role_id' => 'required|integer',
        ]);

        $staff = new Staff();
        $staff->username = $request->username;
        $staff->password = bcrypt($request->password); 
        $staff->role_id = $request->role_id;
        $staff->create_staff = Auth::guard('admin')->id(); 
        $staff->created_at = now();

        $staff->save();

        return redirect()->route('admin.register_index')->with('success', 'Tạo tài khoản thành công!');
    }


    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);

        // Ghi lại ID người xóa
        $staff->delete_staff = Auth::guard('admin')->id();
        $staff->deleted_at = Carbon::now(); 
        $staff->save();

        return redirect()->route('admin.register_index')
            ->with('success', 'Nhân viên đã được xóa thành công');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        $roles = Role::all(); 
        return view('admin.register_edit', compact('staff', 'roles'));
    }
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'username' => 'required|max:64|unique:staff,username,' . $id,
    //         'role_id' => 'required|integer',
    //         // Không cần kiểm tra password vì không cho phép đổi
    //     ]);

    //     $staff = Staff::findOrFail($id);
    //     $staff->username = $request->username;
    //     $staff->role_id = $request->role_id;

    //     // Không cập nhật mật khẩu
    //     $staff->update_staff = Auth::guard('admin')->id(); 
    //     $staff->updated_at = now();

    //     $staff->save();

    //     return redirect()->route('admin.register_index')->with('success', 'Cập nhật tài khoản thành công!');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:64|unique:staff,username,' . $id,
            'role_id' => 'required|integer',
            'password' => 'nullable|min:3',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->username = $request->username;
        $staff->role_id = $request->role_id;

        // Chỉ cập nhật mật khẩu nếu người dùng nhập mới
        if (!empty($request->password)) {
            $staff->password = bcrypt($request->password);
        }

        $staff->update_staff = Auth::guard('admin')->id(); 
        $staff->updated_at = now();

        $staff->save();

        return redirect()->route('admin.register_index')->with('success', 'Cập nhật tài khoản thành công!');
    }



    public function showHomePage()
    {
        $staff = Auth::guard('admin')->user();
        $roles = Role::all(); 
    
        return view('homeadmin.index', compact('staff', 'roles'));
    }
    
    
    public function updateProfile(Request $request)
{
    // Lấy thông tin người dùng hiện tại
    $staff = Auth::guard('admin')->user();

    // Xác thực dữ liệu đầu vào
    $request->validate([
   'username' => 'required|string|max:255|regex:/^[^0-9]*$/'
    ], [
        'username.string' => 'Họ và tên  phải là chuỗi ký tự.',
        'username.max' => 'Họ và tên không được quá 255 ký tự.',
        'username.regex' => 'Họ và tên  không được chứa số.',
    ]);

    // Cập nhật thông tin (chỉ username)
    $staff->username = $request->username;
    $staff->update_staff = Auth::guard('admin')->id(); 
    $staff->updated_at = now();
    $staff->save();

  

    // Làm mới lại session user
    Auth::guard('admin')->setUser($staff->fresh());

    // Quay lại với thông báo
    return redirect()->route('homeadmin.index')->with('success', 'Cập nhật thông tin thành công!');
}

    
    


   
    
    

}

