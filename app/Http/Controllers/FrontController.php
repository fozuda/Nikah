<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function welcome()
    {
        $users = DB::table('registrations')
            ->select('name', 'email')
            ->get();

        $infos = DB::table('personal_info')
            ->select('name', 'father_name')
            ->get();
        return view('welcome')->with('users', $users)->with('infos', $infos);
    }

    public function showLoginPage()
    {
        return view('login');
    }

    public function showRegisterPage()
    {
        return view('register');
    }


    public function loginProcess(Request $request)
    {
        $validator = Validator(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]
        );

        $login = DB::table('registrations')
        ->select('email')
        ->where('email', $request('email'))
        ->first();
        var_dump($login);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        // ]);
        // var_dump($request->all());

       

            // return $request->all()->with('login', $login);

    }

    public function aboutUs()
    {
        return view('partials.about_us');
    }

    public function blog()
    {
        return view('partials.blog');
    }

    public function rules()
    {
        return view('partials.rules');
    }

    public function posts()
    {
        $users = DB::table('registrations')
            ->select('name', 'email')
            ->get();

        $infos = DB::table('personal_info')
            ->select('name', 'father_name')
            ->get();
        return view('partials.post')->with('users', $users)->with('infos', $infos);
    }

    public function successStory()
    {
        return view('partials.success_story');
    }

    public function registerProcess(Request $request)
    {
        $validator = Validator(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password|min:6',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Registration::create([
            'name' => $request->input('name'),
            'email' => trim($request->input('email')),
            'password' => Hash::make($request->input('password')),
        ]);

        session()->flash('message', 'successful');

        return view('login');

        // $data = [];

        // $hashed =  Hash::make($request->password);

        // echo $hashed;

        // if (Hash::check($request->input('confirm_password'), $hashed)) {

        //     echo "<br/>" . "passowrd match!";
        // } else
        //     echo "<br/>" . "passowrd don't match!";
        // echo $request->input('name');
        // echo $request->input('email');


        // $this->validate($request, [
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'password'=>'required|min:6',
        //     'confirm_password'=>'required|same:password|min:6',
        // ]);
        // return $request->all();

        // return 'ok';

        // public function user($name, $id = '')
        // {
        //     echo "My name is : $name"  . '   ' .  "and age is: $id";
        // }

        // public function okay()
        // {
        //     $data = [];
        //     $data['day'] = 'friday';
        //     $data['date'] = '121212';
        //     return view('okay', ['data' => $data]);
        // }


        // public function login()
        // {
        //     return view('login');
        // }
    }
}
