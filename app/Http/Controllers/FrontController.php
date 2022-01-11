<?php

namespace App\Http\Controllers;

use App\Models\BioData;
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
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        return $request->all();
    }

    public function bioData()
    {
        return view('partials.biodata');
    }

    public function showPersonalInfo()
    {
        return view('biodata.personal_info');
    }

    public function personalInfoProcess(Request $request)
    {
        $validator = Validator(
            $request->all(),
            [
                'name' => 'required',
                'fatherName' => 'required',
                'fatherOccupation' => 'required',
                'motherName' => 'required',
                'motherOccupation' => 'required',
                'permanentAddress' => 'required',
                'presentAddress' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        BioData::create([
            'name' => $request->input('name'),
            'father_name' => $request->input('fatherName'),
            'father_occupation' => $request->input('fatherOccupation'),
            'mother_name' => $request->input('motherName'),
            'mother_occupation' => $request->input('motherOccupation'),
            'permanent_address' => $request->input('permanentAddress'),
            'present_address' => $request->input('presentAddress'),
        ]);
        session()->flash('message', 'create successfully!');
        return view('biodata.personal_info');
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
        // return view('partials.post')->with('users', $users);

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
