<?php


namespace App\Http\Controllers;

use App\Models\BioData;
use Illuminate\Http\Request;

class BioDataController extends Controller
{
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

    public function familyDetails()
    {
        return view('biodata.family_details');
    }

    public function brideGroomMoreDetails()
    {
        return view('biodata.bride_groom_more_details');
    }

    public function requirment()
    {
        return view('biodata.requirment');
    }

    public function communication()
    {
        return view('biodata.communication');
    }
}
