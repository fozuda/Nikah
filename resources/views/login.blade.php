<html>

<section class="h-100 gradient-form" style="background-color: #eee;">

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.png" style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">We are The Destraza Team</h4>
                                </div>

                                <form action="{{route('loginprocess') }}" method="post">
                                    @csrf
                                    <p>Please login to your account</p>

                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Phone number or email address" />
                                        <label class="form-label" for="exampleInputEmail1">Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" class="form-control" />
                                        <label class="form-label" for="exampleInputPassword1">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                                        <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>