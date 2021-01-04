@extends('user_layout')
@section('content')


<div class="card">
            <div class="card-body">
              <h2 class="card-title">Account Section</h2>
              
              <p class=" alert_success"><?php
              $exception=Session::get('exception');
              if ($exception) {
                echo "$exception";
                Session::put('exception',null);
              }
              ?></p>
               

              <div class="row">
                 
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">

                    <a class="social-link" href="{{('/account')}}">
                      <button type="button" class="btn btn-primary">Account</button>
                    <a class="social-link" href="{{('/refill_account')}}">
                    <button type="button" class="btn btn-success">Refill Account</button>
                    </a>


                    <thead>
                      <tr>
                          <th>Date #</th>
                          <th>Current Amount</th>
                          <th>Toll Amount</th>
                          <th>Due Amount</th>
                          <th>Total Amount</th>
                          
                      </tr>
                      </thead>
                      <tbody>

                        

                      
                      <tr>
                          <td>{{$amount_profile->date}}</td>
                          <td>{{$amount_profile-current_amount}}</td>
                          <td>{{$amount_profile->toll_amount}}</td>
                          <td>{{$amount_profile->due_amount}}</td>
                          <td>{{$amount_profile->total_amount}}</td>
                          
                        </tr>
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>




@endsection