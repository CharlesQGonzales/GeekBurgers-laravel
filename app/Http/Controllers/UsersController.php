<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Models\Address;
use Session;
use DB;

class UsersController extends Controller
{

    public function editAddress(Request $request)
    {
        $this->validate($request, [
            'house_number' => 'required|string',
            'street' => 'required|string',
            'barangay' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'zipcode' => 'required|string',
        ]);

        if (Session::get("id")) {
            $user = User::where("user_id", "=", Session::get("id"))->first();
            if ($user) {
                $address = $user->address;
                if (!$address) {
                    $address = new Address();
                    $address->user_id = $user->user_id;
                }

                $address->house_number = $request->input("house_number");
                $address->street = $request->input("street");
                $address->barangay = $request->input("barangay");
                $address->province = $request->input("province");
                $address->city = $request->input("city");
                $address->zipcode = $request->input("zipcode");

                $address->save();

                return view('editaddress', compact('address'));
            }
        }
    }
    public function showEditAddress()
    {
        return view('editaddress');
    }
    public function showAddress()
    {
        if (Session::get("id")) {
            $user = User::where("user_id", "=", Session::get("id"))->first();
            $address = DB::select("SELECT user_id,house_number,street,barangay,province,city,zipcode FROM user_address WHERE user_id = " . Session::get("id"));
            return view('address', compact('user', 'address'));
        }
        // return view('address');
    }
    public function upload(Request $request, $id)
    {
        $ui = new UsersImage;
        $ui->user_id = $id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $ui->image = $filename;
        }
        $ui->save();
        return redirect('profile');
    }
    public function showUpload($id)
    {

        return view('editprofile', compact('userimage'));
    }
    public function editProfile(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mobile_number' => 'required|string',
            'email' => 'required|unique:users,email',
            'birthdate' => 'required|string',
            'password' => 'required|min:4|max:16',
            'con_password' => 'required|same:password',
        ], [], [
                'con_password' => 'password confirmation',

            ]);

        if (Session::get("id")) {
            $user = User::where("user_id", "=", Session::get("id"))->update([
                'first_name' => $request->input("first_name"),
                'last_name' => $request->input("last_name"),
                'birthdate' => $request->input("birthdate"),
                'gender' => $request->input("gender"),
                'mobile_number' => $request->input("mobile_number"),
                'email' => $request->input("email"),
                'password' => Hash::make($request->input("password")),

            ]);

            return view('editprofile');
        }


    }
    public function showEditProfile()
    {
        if (Session::get("id")) {
            $user = User::where("user_id", "=", Session::get("id"))->first();
            $profiles = DB::select("SELECT u.first_name, u.last_name, u.mobile_number,u.email, u.password, ui.image FROM users AS u INNER JOIN user_images AS ui ON u.user_id = ui.user_id WHERE u.user_id = " . Session::get("id"));
            $userimage = DB::select("SELECT ui.image FROM users AS u INNER JOIN user_images AS ui ON u.user_id = ui.user_id WHERE u.user_id = " . Session::get("id"));
            return view('editprofile', compact('user', 'profiles', 'userimage'));
        }
        // else {return view('errors/401');
        // }

    }
    public function showProfile()
    {
        if (Session::get("id")) {
            $user = User::where("user_id", "=", Session::get("id"))->first();
            $profiles = DB::select("SELECT first_name, last_name,mobile_number,email, ui.image FROM users AS u INNER JOIN user_images AS ui ON u.user_id = ui.user_id WHERE u.user_id = " . Session::get("id"));
            return view('profile', compact('user', 'profiles'));
        }
        // else {return view('errors/401');
        // }

    }
    public function showFaqs()
    {
        return view('faqs');
    }
    public function showSignIn()
    {
        return view('signin');
    }

    public function showSignUp()
    {
        return view('signup');
    }

    public function signout()
    {
        if (Session::has('id')) {
            Session::pull('id');
            Session::pull('email');
            Session::pull('role');
            Session::pull('first_name');
            Session::pull('last_name');
            return redirect('/');
        }
    }

    public function signin(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     $user = User::where('email', $request->email)->first();

        //     $request->session()->put('id', $user->user_id);
        //     $request->session()->put('email', $user->email);
        //     $request->session()->put('role', $user->role);
        //     $request->session()->put('first_name', $user->first_name);
        //     $request->session()->put('last_name', $user->last_name);

        //     if (Session::get('role') == 'admin') {
        //         return redirect('/admin')->with('success', "Logged in as admin!");
        //     }

        //     return redirect('/profile')->with('success', 'Logged in as student!');
        // }

        // return redirect('/signin')->with('fail', 'Incorrect email or password.');
        $user = User::where("email", "=", $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('id', $user->user_id);
                $request->session()->put('email', $user->email);
                $request->session()->put('role', $user->role);
                $request->session()->put('first_name', $user->first_name);
                $request->session()->put('last_name', $user->last_name);
                if (Session::get('role') == 'admin') {
                    return redirect('/admin')->with('success', "Logged in as admin!");
                }
                return redirect('/profile')->with('success', 'Logged in as student!');
            } else {
                return redirect('/signin')->with('fail', 'Incorrect password!');
            }
        } else {
            return redirect('/signin')->with('fail', 'An account with that email does not exist!');
        }

    }


    public function signup(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mobile_number' => 'required|string',
            'email' => 'required|unique:users,email',
            'birthdate' => 'required|string',
            'password' => 'required|min:4|max:16',
            'con_password' => 'required|same:password',
        ], [], [
                'con_password' => 'password confirmation',

            ]);

        $user = new User;
        $user->first_name = $request->input("first_name");
        $user->last_name = $request->input("last_name");
        $user->mobile_number = $request->input("mobile_number");
        $user->email = $request->input("email");
        $user->birthdate = $request->input("birthdate");
        $user->password = Hash::make($request->input("password"));
        $user->role = "user";
        $user->save();

        return redirect("/")->with('success', 'User successfully registered!');

    }
}