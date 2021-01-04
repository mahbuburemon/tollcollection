@extends('layout')
@section('content')



<div class="content-wrapper">
          <h1 class="page-title">Add User</h1>
          
          <p class=" alert_success"><?php
              $exception=Session::get('exception');
              if ($exception) {
                echo "$exception";
                Session::put('exception',null);
              }
              ?></p>




          <div class="row">
              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"></h2>
                          <form class="forms-sample" method="post" action="{{url('/update_user',$user_description_profile->user_id)}}" >
                          
                          @csrf 


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Vehicle No</label>
                                  <input type="text" class="form-control p-input" name="vehicle_no" 
                                  value="{{($user_description_profile->vehicle_no)}}" >
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Name</label>
                                  <input type="text" class="form-control p-input" name="user_name" value="{{($user_description_profile->user_name)}}" >
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Nid</label>
                                  <input type="text" class="form-control p-input" name="user_nid" value="{{($user_description_profile->user_nid)}}">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Email</label>
                                  <input type="email" class="form-control p-input" name="user_email" value="{{($user_description_profile->user_email)}}">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Number</label>
                                  <input type="text" class="form-control p-input" name="user_number" value="{{($user_description_profile->user_number)}}" >
                                  
                              </div>

                             <div class="form-group">
                                  <label for="exampleInputEmail1">User Address</label>
                                  <input type="text" class="form-control p-input" name="user_address" value="{{($user_description_profile->user_address)}}" >
                                  
                              </div>

                              
                            


                                 

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Bridges</label>
                                  <select class="form-control p-input" name="user_amount" value="{{($user_description_profile->Bridges)}}">
                                  	<option value="1">bridge1</option>
                                  	<option value="2">bridge2</option>
                                  	<option value="3">bridge3</option>


                                  </select>
                                  
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Updated</button>
                          </form>
                      </div>
                  </div>
              </div>




@endsection