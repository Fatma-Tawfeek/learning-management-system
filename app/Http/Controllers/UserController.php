<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function home()
    {
        return view('frontend.index');
    }

    public function UserProfile()
    {
        $userData = Auth::user();
        return view('frontend.dashboard.profile', compact('userData'));
    }

    public function UserProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $userData = User::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('uploads/images/user/' . $userData->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/user'), $filename);
            $userData['photo'] = $filename;
        }

        $userData->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        $notification = [
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function UserChangePassword()
    {
        $userData = Auth::user();
        return view('frontend.dashboard.change_password', compact('userData'));
    }

    public function UserPasswordUpdate(Request $request)
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
}
