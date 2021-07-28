@extends('hed')
@section('content')
    <!-- Gallery -->
    <section class="gallery py-5" id="gallery">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-3">Our Gallery</h3>
            </div>
            <div class="row news-grids text-center gallery-wrap">
                <div class="col-md-3 gal-img">
                    <a href="#gal1"><img src="{{ asset('client/images/g1.jpg')}}" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 gal-img">
                    <a href="#gal2"><img src="{{ asset('client/images/g2.jpg')}}" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 gal-img">
                    <a href="#gal3"><img src="{{ asset('client/images/g3.jpg')}}" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 gal-img">
                    <a href="#gal4"><img src="{{ asset('client/images/g4.jpg')}}" alt="news image" class="img-fluid"></a>
                </div>

            </div>

            <!-- popup-->
            <div id="gal1" class="pop-overlay animate">
                <div class="popup">
                    <img src="{{ asset('client/images/g1.jpg')}}" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->

            <!-- popup-->
            <div id="gal2" class="pop-overlay animate">
                <div class="popup">
                    <img src="{{ asset('client/images/g2.jpg')}}" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay animate">
                <div class="popup">
                    <img src="{{ asset('client/images/g3.jpg')}}" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay animate">
                <div class="popup">
                    <img src="{{ asset('client/images/g4.jpg')}}" alt="Popup Image" class="img-fluid" />

                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->


        </div>
    </section>
    <!--// gallery -->

  @endsection