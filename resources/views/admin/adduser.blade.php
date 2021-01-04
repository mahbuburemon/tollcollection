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
                          <form class="forms-sample" method="post" action="{{('/save_user')}}" enctype="multipart/form-data">
                          
                          @csrf 


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Vehicle No</label>
                                  <input type="text" class="form-control p-input" name="vehicle_no" placeholder="Vehicle No">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Name</label>
                                  <input type="text" class="form-control p-input" name="user_name" placeholder="Name">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Nid</label>
                                  <input type="text" class="form-control p-input" name="user_nid"placeholder="Nid No">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Email</label>
                                  <input type="email" class="form-control p-input" name="user_email"placeholder="Email">

                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">User Password</label>
                                  <input type="password" class="form-control p-input" name="user_password" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User Number</label>
                                  <input type="text" class="form-control p-input" name="user_number" placeholder="Number">
                                  
                              </div>
                              

                             <div class="form-group">
                                  <label for="exampleInputEmail1">User Address</label>
                                  <input type="text" class="form-control p-input" name="user_address" placeholder="Address">
                                  
                              </div>

                              
                               <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>image</label>
                                      <input type="file" class="form-control-file" name="user_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>


                                 

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Bridges</label>
                                  <select class="form-control p-input" name="Bridges">
                                  	<option value="1">bridge1</option>
                                  	<option value="2">bridge2</option>
                                  	<option value="3">bridge3</option>


                                  </select>
                                  
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>




@endsection