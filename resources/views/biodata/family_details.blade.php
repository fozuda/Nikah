@extends('master')

@section('content')

<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Family Details</p>
        <form action="{{route('personalinfoprocess')}}" method="post">

            @csrf

            <label class="form-label" for="form3Example3c"><b>How many Brothers & Sisters Do you Have?</b></label>

            <div id="addMore">
                <div class="row">
                    <div class="col-md-8">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example1c">Brothers or Sisters Name<span style="color: red;">*</span></label>
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
                                <label class="form-label" for="form3Example1c">Relation<span style="color: red;">*</span></label>
                                <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                                @error('presentAddress')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div id="blank">
            </div>


            <button type="button" onClick="addInput('addMore', 'blank');"> Add more </button>





            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Family status<span style="color: red;">*</span></label>
                    <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control" />
                    @error('fatherName')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Uncles Name<span style="color: red;">*</span></label>
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
                            <label class="form-label" for="form3Example1c">Type of Relation<span style="color: red;">*</span></label>
                            <input type="text" name="presentAddress" value="{{old('presentAddress')}}" class="form-control" />
                            @error('presentAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>



            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button class="btn btn-primary btn-lg" type="submit">Next</button>
            </div>

        </form>
    </div>
</body>


<script>
    function addInput(divName, template) {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = document.getElementById(divName).innerHTML;
        document.getElementById(template).appendChild(newdiv);
    }
</script>