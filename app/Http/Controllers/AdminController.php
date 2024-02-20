<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminProfile()
    {
        $adminData = Auth::user();
        return view('admin.profile', compact('adminData'));
    }

    public function AdminProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('uploads/images/admin/' . $adminData->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/admin'), $filename);
            $adminData['photo'] = $filename;
        }

        $adminData->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $notification = [
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function AdminChangePassword()
    {
        $adminData = Auth::user();
        return view('admin.change_password', compact('adminData'));
    }

    public function AdminPasswordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $notification = [
                'message' => 'Old password dose not match',
                'alert-type' => 'error'
            ];

            return back()->with($notification);
        }

        //// update user password 
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        $notification = [
            'message' => 'Password has been changed',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin()
    {
        return view('admin.login');
    }

    public function Instructors()
    {
        $instructors = User::where('role', 'instructor')->latest()->get();
        return view('admin.instructors.index', compact('instructors'));
    }

    public function UpdateUserStatus(Request $request)
    {
        $user_id = $request->input('user_id');
        $status = $request->input('status', 0);

        User::where('id', $user_id)->update([
            'status' => $status
        ]);

        return response()->json(['message' => 'Status updated successfully.']);
    }
}
