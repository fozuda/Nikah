@extends('master')

<body>
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="{{route('personalinfo')}}">Personal Information</a>
                <a class="p-2 link-secondary" href="{{route('familyDetails')}}">Family Details</a>
                <a class="p-2 link-secondary" href="{{route('brideGroomMoreDetails')}}"> Bride/Grooms More Details </a>
                <a class="p-2 link-secondary" href="{{route('requirment')}}">Requirment</a>
                <a class="p-2 link-secondary" href="{{route('communication')}}">Communication</a>
            </nav>
        </div>

        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Welcome To Nikha Group!</p>
        <form action="{{route('personalinfoprocess')}}" method="post">

            @csrf
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <p>
                    <h4 class="text-center"> <b>BIO-Data Format (English)</b></h4> <br>
                    <b><span style="color: red;">Please read carefully before filling up the form.</span></b> <br>
                    a) Please add the title as Bride/Groom wanted <br>
                    b) Please must provide the Applicant's full name, Parents full name & Parmanent Address. <i> <span style="color: blue;"> (We are well aware of our members' Privacy, thus we DO NOT Publish any private information on Social media. This information will be deposited with the Nikah Group's authority for keeping in the database. But this information is required for our official verifications only.)</span></i> <br>
                    c) Please must fill-up the<b><span style="color: red;"> * </span></b>star marks and other options are volunteers. <br>
                    d) Please Discuss your parents regarding the marriage and our Nikah Group's concept before contacting here. <br>
                    e) You must provide two male Guardian numbers to contact. <i> <span style="color: blue;"> (your relationship with the Guardian and their name must be mentioned).
                            Will be verified if necessary. It is better to give the number in English.) </span></i> <br>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <br>
                    <b><span style="color: red;">***The Bio-Data will only be published after verifying all the information*** </span></b><br>
                    </p>

                    <b>Bride/Groom wanted</b> <br>
                    <p><b><span style="color: green;">POSTCODE FOR FUTURE UPDATE: (For Official Admins' only) </span></p> <br>
                </div>
            </div>


            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Have you informed your parents about your marriage Plan?<span style="color: red;">*</span></label>
                    &nbsp;
                    &nbsp;
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Bride</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Groom</label>
                    </div>
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="maritualStatus">Name of the person filling the biodata <span style="color: red;">*</span></label>
                    <select class="form-control" id="maritualStatus">
                        <option value="volvo">Brother</option>
                        <option value="saab">Sister </option>
                        <option value="opel">Father </option>
                        <option value="audi">Mother </option>
                        <option value="audi">Uncle </option>
                        <option value="audi">Aunt </option>
                    </select>
                    @error('presentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button class="btn btn-primary btn-lg" type="submit">Next</button>
                </div>
            </div>
        </form>
    </div>

</body>