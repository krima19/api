@extends('hed')
@section('content')
    <!--//testimonials-->
    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container pb-md-5">
            <div class="header py-lg-5 pb-3 text-center">
                <h3 class="tittle mb-lg-5 mb-3"> Contact Us</h3>
            </div>

            <div class="contact-form mx-auto text-left">
                <form name="contactform" id="contactform1" method="POST" action="/addcontact">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 contact-page">
                            <div class="form-group">
                                <label>Submit *</label>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
            <ul class="list-unstyled row text-left mb-lg-5 mb-3">
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Location</h6>
                            <p>Ring Road
                                <br>Rajkot </p>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com">krimaghetiya19@gmail.com</a>
                            <br>
                             <a href="mailto:info@example.com">bhalodiyashreena@gmail.com</a>
                            <br>
                            <a href="mailto:info@example.com">nancydudani2310@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Phone Number</h6>
                            <p> 9909354674</p>
                            <p> 7567166446</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </section>
    <!-- //contact -->
    <!-- footer -->
@endsection