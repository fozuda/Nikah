@extends('master')

@section('content')

<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Means of communication</p>
        <form action="{{route('personalinfoprocess')}}" method="post">

            @csrf
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Have you informed your parents about your marriage Plan?<span style="color: red;">*</span></label>
                    &nbsp;
                    &nbsp;
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Do your parents well aware of Posting the Bio-data in the Nikah group?<span style="color: red;">*</span></label>
                    &nbsp;
                    &nbsp;
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label class="form-label" for="form3Example1c"><b>Mobile Number</b><span style="color: red;">*</span></label>


                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">

                        <div class="row">

                            <div class="col-md-3">
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <label class="form-label" for="form3Example1c">Mobile Number-1<span style="color: red;">*</span></label>
                                        <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                                        @error('presentAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <label class="form-label" for="form3Example1c">Mobile Number-2<span style="color: red;">*</span></label>
                                        <input type="number" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                                        @error('presentAddress')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <label class="form-label" for="form3Example1c">Email</label>
                                        <input type="mail" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p> <span style="color: red;"><b>Special Note:</b></span> <br>

                <span style="color: red;">* Call only if you are satisfied with the biodata and match the requirements. <br></span>
                <span style="color: red;">* After mailing the biodata, you must confirm over the phone. <br></span>
                <span style="color: red;">* Before Marriage or without asking to Guardians never exchange photo.
            </p></span>

            <p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    <span style="color: green;"><b>I Accept the Terms & Conditions</b></span>
                </label>
            </div>
            I promise to complete the biodata to the effect that all the information given in the biodata is correct. <br>
            Jazakallah khairan for filling up the form with patience! </p>

            <div class="row">
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button class="btn btn-primary btn-lg" type="submit">Back</button>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <button class="btn btn-primary btn-lg" type="submit">Submit Your Biodata</button>
                </div>
            </div>

        </form>
    </div>
</body>