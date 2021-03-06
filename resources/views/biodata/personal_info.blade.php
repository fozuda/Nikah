@extends('master')

@section('content')

<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Personal information</p>
        <form action="{{route('personalinfoprocess')}}" method="post">

            @csrf
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">
                        Name <span style="color: red;">*</span>
                    </label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" />
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Father's Name<span style="color: red;">*</span></label>
                    <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Father's Occupation<span style="color: red;">*</span></label>
                    <input type="text" name="fatherOccupation" value="{{old('fatherOccupation')}}" class="form-control" />
                    @error('fatherOccupation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Mother's Name<span style="color: red;">*</span></label>
                    <input type="text" name="motherName" value="{{old('motherName')}}" class="form-control" />
                    @error('motherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Mother's Occupation<span style="color: red;">*</span></label>
                    <input type="text" name="motherOccupation" value="{{old('motherOccupation')}}" class="form-control" />
                    @error('motherOccupation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Permanent Address<span style="color: red;">*</span></label>
                    <input type="text" placeholder="Please give details address here" name="permanentAddress" value="{{old('permanentAddress')}}" class="form-control" />
                    @error('permanentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Present Address<span style="color: red;">*</span></label>
                    <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                    @error('presentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Date of Birth (Original)<span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="dateOfBirth" value="{{old('dateOfBirth')}}" />
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Height<span style="color: red;">*</span></label>
                            <div class="row">
                                <div class="col-md-4" style="padding-right: 0;">
                                    <input type="text" placeholder="Foot only" name="heightFt" value="{{old('heightFt')}}" class="form-control" />
                                    @error('presentAddress')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-1" style="padding: 2;">
                                    <label class="form-label" for="form3Example1c">ft'</label>
                                </div>
                                <div class="col-md-4" style="padding-right: 0;">
                                    <input type="text" placeholder="Inch only" name="heightInch" value="{{old('heightInch')}}" class="form-control" />
                                    @error('presentAddress')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-1" style="padding-left: 2;">
                                    <label class="form-label" for="form3Example1c">inch"</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Weight<span style="color: red;">*</span></label>
                            <input type="text" placeholder="KG only" name="weight" value="{{old('weight')}}" class="form-control" />
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Complexion<span style="color: red;">*</span></label>
                            <input type="text" name="complexion" value="{{old('complexion')}}" class="form-control" />
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="bloodGroup">Blood Group</label>
                            <select class="form-control" name="option" id="bloodGroup">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Majhab<span style="color: red;">*</span></label>
                            <select class="form-control" name="majhab" id="majhab">
                                <option value="Hanafi">Hanafi</option>
                                <option value="Shafeyi">Shafeyi</option>
                                <option value="Maleki">Maleki</option>
                                <option value="Hamboli">Hamboli</option>
                                <option value="Others">Others</option>
                            </select>
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Educational Qualification<span style="color: red;">*</span></label>
                    <input type="text" name="educationalQualification" value="{{old('educationalQualification')}}" class="form-control" />
                    @error('presentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Occupation<span style="color: red;">*</span></label>
                            <input type="text" name="occupation" value="{{old('occupation')}}" class="form-control" />
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="maritualStatus">Maritual Status<span style="color: red;">*</span></label>
                            <select class="form-control" name="maritualStatus" id="maritualStatus">
                                <option value="volvo">Single</option>
                                <option value="saab">Widowed </option>
                                <option value="opel">Separated </option>
                                <option value="audi">Divorced </option>
                                <option value="audi">Married </option>
                            </select>
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">The political point of view</label>
                            <input type="text" name="politicalView" value="{{old('politicalView')}}" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">About Yourself<span style="color: red;">*</span></label>
                    <textarea class="col-md-12" placeholder="Write something about you. not more then 250 words" name="aboutYourself" rows="5"></textarea>
                    @error('presentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </form>
    </div>

    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
        <button class="btn btn-primary btn-lg" type="submit">Next</button>
    </div>

    </div>
</body>


<!-- <script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    });
</script> -->