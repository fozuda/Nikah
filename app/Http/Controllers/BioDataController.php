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
                'dateOfBirth'=>'required',
                'heightFt'=>'required',
                'heightInch'=> 'required',
                'weight'=>'required',
                'complexion'=>'required',
                'majhab'=>'required',
                'educationalQualification'=>'required',
                'occupation'=>'required',
                'maritualStatus'=>'required',
                'aboutYourself'=>'required',
            ],
            [
                'name.required' => 'Give your proper Name!',
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
            'date_of_birth' => $request->input('dateOfBirth'),
            'height_ft' => $request->input('heightFt'),
            'height_inch' => $request->input('heightInch'),
            'weight' => $request->input('weight'),
            'complexion' => $request->input('complexion'),
            'blood_group' => $request->input('bloodGroup'),
            'majhab' => $request->input('majhab'),
            'educational_qualification' => $request->input('educationalQualification'),
            'occupation' => $request->input('occupation'),
            'maritual_status' => $request->input('maritualStatus'),
            'political_view' => $request->input('politicalView'),
            'about_yourself' => $request->input('aboutYourself'),
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
