<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    public function Instructordashboard()
    {
        return view('instructor.index');
    }

    public function InstructorLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/instructor/login');
    }

    public function InstructorLogin()
    {
        return view('instructor.login');
    }

    public function InstructorProfile()
    {
        $instructorData = Auth::user();
        return view('instructor.profile', compact('instructorData'));
    }

    public function InstructorProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $instructorData = User::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('uploads/images/instructor/' . $instructorData->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/instructor'), $filename);
            $instructorData['photo'] = $filename;
        }

        $instructorData->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $notification = [
            'message' => 'Instructor Profile Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function InstructorChangePassword()
    {
        $instructorData = Auth::user();
        return view('instructor.change_password', compact('instructorData'));
    }

    public function InstructorPasswordUpdate(Request $request)
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

    public function BecomeInstructor()
    {
        return view('frontend.instructor.register');
    }

    public function InstructorRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
        ]);

        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'instructor',
            'status' => '0',
        ]);

        $notification = [
            'message' => 'Instructor Account Created Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('instructor.login')->with($notification);
    }
}
