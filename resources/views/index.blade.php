@extends('layouts.master')
@section('title', 'Main')
@section('content')

 <!-- ======= Home Section ======= -->
  <section id="hero">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">
                <h1>System of Knowledge of Averages for  <span>Sixth Students</span></h1>
                <h2>We are team work to find problems and solve them by programming.</h2>
            </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <img src="{{asset('assets/img/main-img.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)"></g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)"></g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff"></g>
    </svg>

</section>
<!-- End Home -->
    
<!-- ======= Go Section ======= -->
    <section id="contact" class="contact mt-3">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Let's</h2>
          <p>knowing which colleges that accept you</p>
        </div>
        <div class="row">
          <div class="col-lg-12" data-aos="fade-left" data-aos-delay="200">
            <form action="{{route('avarage')}}" method="post" >
              @csrf
              @if(count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul class="text-right"> 
                          @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                          @endforeach 
                      </ul>
                  </div>
              @endif
              @if($message = Session::get('success'))
                  <div class="alert alert-success text-right"> 
                      {{$message}}
                  </div>
              @endif
              @if($message = Session::get('error'))
                  <div class="alert alert-danger text-right"> 
                      {{$message}}
                  </div>
              @endif
            <div class="row">
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="avarage"  placeholder="Enter Your Avarage"/>
                  <div class="validate"></div>
            </div>
        </div><br>
          <select class="form-select" aria-label="Default select example" name="section">
                <option selected disabled>الدراسة</option>
                <option value="تطبيقي">
                  تطبيقي</option>
                <option value="احيائي">
                  احيائي</option>
                <option value="ادبي">
                  ادبي</option>
                </select>
                <br>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Search">
                </div>
          </form>
        </div>
    </div>
  </div>
</section>
<!-- End Go Section -->






<br>





<!-- ======= Team Section ======= -->
  <section id="team" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

      <div class="row justify-content-center" data-aos="fade-left">
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Hassan Kadhim</h4>
                    <span>Team Lader</span>
                    <div class="social">
                        <a href="#" target="_blank"><i class="icofont-twitter"></i></a>
                        <a href="#"><i class="icofont-facebook" target="_blank"></i></a>
                        <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                        <a href="#" target="_blank"><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="assets/img/team/1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Ali J.D</h4>
                      <span>Team Member</span>
                      <div class="social">
                      <a href="#" target="_blank"><i class="icofont-facebook"></i></a>
                      <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4> Mohmeed</h4>
                  <span>Team Member</span>
                  <div class="social">
                  <a href="#" target="_blank" ><i class="icofont-facebook"></i></a>
                  <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    
</section><!-- End Team Section -->
@stop
