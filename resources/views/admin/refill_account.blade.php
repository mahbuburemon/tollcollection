@extends('layout')
@section('content')



<div class="content-wrapper">
          <h1 class="page-title">Refill Account</h1>
          
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
                          <form class="forms-sample" method="post" action="{{('/save_refill')}}" >
                          
                          @csrf 

                          <div class="form-group">
                                  <label for="exampleInputEmail1">Users</label>
                                  <select class="form-control p-input" name="user_id">
                                     @foreach (App\User::all() as $user): ?>
                                        <option value="{{ $user->user_id }}">{{ $user->user_name }}</option>
                                    @endforeach ?>
                                    
                              
                                  </select>
                              </div>


                              <div class="form-group">
                                  <label for="date">Date</label>
                                  <input type="date" class="form-control p-input" name="date" placeholder="date">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="Refill_Amount">Refill Amount</label>
                                  <input type="text" class="form-control p-input" name="refill_amount" placeholder="Refill Amount">
                                  
                              </div>
                              
                              <div class="form-group">
                              

                              <button type="submit" class="btn btn-success btn-block">Submit</button>

                          </form>
                      </div>
                  </div>
              </div>




@endsection