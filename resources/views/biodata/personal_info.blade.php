@extends('master')

@section('content')

<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Personal Info</p>
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
                    <label class="form-label" for="form3Example3c">Fathers Name<span style="color: red;">*</span></label>
                    <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Fathers Occupation<span style="color: red;">*</span></label>
                    <input type="text" name="fatherOccupation" value="{{old('fatherOccupation')}}" class="form-control" />
                    @error('fatherOccupation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Mother Name<span style="color: red;">*</span></label>
                    <input type="text" name="motherName" value="{{old('motherName')}}" class="form-control" />
                    @error('motherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Mother Occupation<span style="color: red;">*</span></label>
                    <input type="text" name="motherOccupation" value="{{old('motherOccupation')}}" class="form-control" />
                    @error('motherOccupation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Permanent Address<span style="color: red;">*</span></label>
                    <input type="text" name="permanentAddress" value="{{old('permanentAddress')}}" class="form-control" />
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
                            <label class="form-label" for="form3Example1c">Date of Birth<span style="color: red;">*</span></label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Complexion<span style="color: red;">*</span></label>
                            <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
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
                            <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
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
                            <label class="form-label" for="form3Example1c">Weight<span style="color: red;">*</span></label>
                            <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
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
                                <option value="volvo">A+</option>
                                <option value="saab">A-</option>
                                <option value="opel">O+</option>
                                <option value="audi">O-</option>
                                <option value="audi">B+</option>
                                <option value="audi">B-</option>
                                <option value="audi">AB+</option>
                                <option value="audi">AB-</option>
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
                            <label class="form-label" for="form3Example1c">Majhab<span style="color: red;">*</span></label>
                            <select class="form-control" name="option" id="bloodGroup">
                                <option value="volvo">Hanafi</option>
                                <option value="saab">Shafeyi</option>
                                <option value="opel">Maleki</option>
                                <option value="audi">Hamboli</option>
                                <option value="audi">Others</option>
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
                            <label class="form-label" for="form3Example1c">Occupation<span style="color: red;">*</span></label>
                            <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
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
                            <select class="form-control" id="maritualStatus">
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
                            <label class="form-label" for="form3Example1c">Political philosophy</label>
                            <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">About Yourself<span style="color: red;">*</span></label>
                    <textarea class="col-md-12" name="message" rows="5">Write something about you. not more then 250 words</textarea>
                    @error('presentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    </div>


    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
        <button class="btn btn-primary btn-lg" type="submit">Next</button>
    </div>

    </form>
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