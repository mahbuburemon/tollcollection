@extends('layout')
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

                    


                    <thead>
                      <tr>
                          <th>Date #</th>
                          <th>Name</th>
                          <th>Current Amount</th>
                          <th>Toll Amount</th>
                          <th>Due Amount</th>
                          <th>Total Amount</th>
                          
                      </tr>
                      </thead>
                      <tbody>


                      @foreach ($account_user_info as $v_account)

                      <tr>
                          <td>{{$v_account->date}}</td>
                          <td>{{$v_account->user_name}}</td>
                          <td>{{$v_account->current_amount}}</td>
                          <td>{{$v_account->toll_amount}}</td>
                          <td>{{$v_account->due_amount}}</td>
                          <td>{{$v_account->total_amount}}</td>
                          
                        </tr>
                   
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>


@endsection