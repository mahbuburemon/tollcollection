@extends('layout')
@section('content')


<div class="content-wrapper">
          <h1 class="page-title">User Profile</h1>
          <div class="row user-profile">
            <div class="col-lg-6 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Information</h2>

                  <img src="{{URL::to($user_description_profile->user_image)}}" alt="">
                  <p class="name">{{strtoupper($user_description_profile->user_name)}}</p>
                  <p class="designation">-  UI/UX  -</p>
                  <a class="email" href="#">{{$user_description_profile->user_email}}</a>
                  <a class="number" href="#">{{$user_description_profile->user_number}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-7 mb-5">About</h2>
                    <p>User Total Information</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon"> Name</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$user_description_profile->user_name}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Vehicle No</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$user_description_profile->vehicle_no}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Address</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$user_description_profile->user_address}}</span>
                    </a>

                    <a class="website">
                      <i class="icon-globe icon">Number:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$user_description_profile->user_number}}</span>
                    </a>



                    
                    <!-- <a class="social-link" href="{{('/account_section')}}">
                    
                      <button type="button" class="btn btn-success">Account Section</button>
                    </a> -->




                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon"></i>
                      <span style="font-family: vernada; font-size: 15px;">https://www.facebook.com/</span>
                    </a>


                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon"></i>
                      <span>https://www.linkedin.com/</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
           





@endsection