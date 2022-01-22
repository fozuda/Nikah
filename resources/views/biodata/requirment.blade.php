@extends('master')

@section('content')

<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">What kind of bride / groom do you want?</p>
        <form action="{{route('personalinfoprocess')}}" method="post">

            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Age<span style="color: red;">*</span></label>
                            <input type="number" name="" class="form-control" />
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
            </div>

            <div class="row">
                <div class="col-md-6">
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


                <div class="col-md-6">
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

            </div>


            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Education<span style="color: red;">*</span></label>
                    <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                    @error('presentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">District<span style="color: red;">*</span></label>
                            <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Current location<span style="color: red;">*</span></label>
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
                    <label class="form-label" for="form3Example1c">Special qualities: (short)<span style="color: red;">*</span></label>
                    <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                    @error('presentAddress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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