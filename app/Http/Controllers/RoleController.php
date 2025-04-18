<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    // Hiển thị form tạo vai trò mới
    public function create()
    {
        return view('role.create');
    }

    // Lưu vai trò mới
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|max:255|unique:roles,role_name',
        ]);

        Role::create([
            'role_name' => $request->role_name,
            'created_staff' => auth()->id(),
        ]);

        return redirect()->route('role.index')->with('success', 'Vai trò đã được tạo thành công!');
    }

    // Hiển thị form chỉnh sửa vai trò
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
    }

    // Cập nhật vai trò
    public function update(Request $request, $id)
    {
        $request->validate([
            'role_name' => 'required|string|max:255|unique:role,role_name,' . $id,
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'role_name' => $request->role_name,
            'updated_staff' => auth()->id(),
        ]);

        return redirect()->route('role.index')->with('success', 'Vai trò đã được cập nhật!');
    }

    // Xóa vai trò (có thể sử dụng xóa mềm)
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete_staff = auth()->id();
        $role->save();

        $role->delete();  // Xóa mềm
        return redirect()->route('role.index')->with('success', 'Vai trò đã bị xóa!');
    }
}
