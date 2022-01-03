@extends('master')

<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Personal Info</p>

        <form action="{{route('register')}}" method="post">

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Name </label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" />
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Fathers Name</label>
                    <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Fathers Occupation</label>
                    <input type="text" name="fatherCccupation" value="{{old('fatherCccupation')}}" class="form-control" />
                    @error('fatherCccupation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Mother Name</label>
                    <input type="text" name="motherName" value="{{old('motherName')}}" class="form-control" />
                    @error('motherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Mother Occupation</label>
                    <input type="text" name="motherOccupation" value="{{old('motherOccupation')}}" class="form-control" />
                    @error('motherOccupation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Permanent Address</label>
                    <input type="text" name="permanentAddress" value="{{old('permanentAddress)}}" class="form-control" />
                    @error('permanentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Present Address</label>
                    <input type="text" name="presentAddress" value="{{old('presentAddress)}}" class="form-control" />
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Birth Day" name="email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Height" name="pswd">
                    </div>
                    <div class="col">
                        <label class="form-label" for="form3Example1c">Male</label>
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                        <label class="form-label" for="form3Example1c">Female</label>
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                    </div>
                </div>
            </form>


            <!-- <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <input type="text" name="name" value="" class="form-control" />
                    <label class="form-label" for="form3Example1c">Your Name</label>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> -->






            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button class="btn btn-primary btn-lg" type="submit">Next</button>
            </div>

        </form>
    </div>
</body>