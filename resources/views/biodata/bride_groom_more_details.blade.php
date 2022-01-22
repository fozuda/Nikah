@extends('master')

@section('content')

<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">The basic idea about the Bride and Groom</p>
        <form action="{{route('personalinfoprocess')}}" method="post">

            <div class="row">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Concept about Marriage (short note)<span style="color: red;">*</span></label>
                        <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                        @error('fatherName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Vail ( Do you follow Mahram, Non-Mahram, Hijab, or Nikab?)<span style="color: red;">*</span></label>
                        <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                        @error('fatherName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Will you allow your wife to have a job? (Gents only)<span style="color: red;">*</span></label>
                        <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                        @error('fatherName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Do you want to join any jobs in the future? (Ladies only)<span style="color: red;">*</span></label>
                        <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                        @error('fatherName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Do you have beards? (Gents only)<span style="color: red;">*</span></label>
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
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Do you watch TV or listen to any kind of music?</label>
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
                </div>
            </div>


            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Do you know how to recite The Holy Quran in Sahih Tajbid (purely)?<span style="color: red;">*</span></label>
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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Roughly</label>
                    </div>
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Do you have any disease or any mental/physical disability?<span style="color: red;">*</span></label>
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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Roughly</label>
                    </div>
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Do you Perform 5 times Salat every day?<span style="color: red;">*</span></label>
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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Roughly</label>
                    </div>
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    </div>

    <div class="row">
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button class="btn btn-primary btn-lg" type="submit">Back</button>
            &nbsp;
            &nbsp;
            &nbsp;
            <button class="btn btn-primary btn-lg" type="submit">Next</button>
        </div>
    </div>


    </form>
    </div>
</body>