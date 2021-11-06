@extends('layouts.master')
@section('title', 'Main')
@section('content')

<section id="contact" class="contact mt-5">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-left">
            <h1 class="text-center" style="background-color:#1a1d94; color:white; font-family: 'Droid Arabic Kufi', serif;font-size:150%;"> الكليات التي تقبل معدل : {{$avg}}</h1>
<table class="table table-hover" style="direction: rtl">
    <thead>
      <tr style="background-color:#1acc8e; ">
        <th scope="col" style="font-size:130%;">التسلسل</th>
        <th scope="col" style="font-size:130%;">اسم الكلية</th>
        <th scope="col" style="font-size:130%;">المعدل</th>
        <th scope="col" style="font-size:130%;">الفرع</th>
        <th scope="col" style="font-size:130%;">الجنس</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($avarage as $counter => $item)
            <tr>
                <th >{{$counter + 1 }}</th> 
                <td>{{$item->college_name}}</td>
                <td>{{$item->avarage}}</td>
                <td>{{$item->section}}</td>
                <td>{{$item->sex}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
    </div>
<section>




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
