@extends('layout')
@section('content')

 
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All User Table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Vehicle No</th>
                          <th>User Name</th>
                          <th>User Nid</th>
                          <th>User Email</th>
                          <th>User Number</th>
                          <th>User Address</th>
                          <th>User image</th>
                          <th>Bridges</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	
                    	@foreach ($bridge1_user_info as $v_user)
                    		
                   
                      <tr>
                          <td>{{$v_user->vehicle_no}}</td>
                          <td>{{$v_user->user_name}}</td>
                          <td>{{$v_user->user_nid}}</td>
                          <td>{{$v_user->user_email}}</td>
                          <td>{{$v_user->user_number}}</td>
                          <td>{{$v_user->user_address}}</td>

                          <td><img src="{{$v_user-> user_image}}" height="80" width="100" style="border-radius: 50%;"></td>

                          <td>
                          	  @if ($v_user->Bridges== 1)
                          	  <span class="label label-success">{{'bridge1'}}</span>
                          	  @elseif($v_user->Bridges== 2)
                          	  <span class="label label-primary">{{'bridge2'}}</span>
                          	  @elseif($v_user->Bridges== 3)
                          	  <span class="label label-warning">{{'bridge3'}}</span>
                          	  @else
                          	  <span class="label label-important">{{'Not defined'}}</span>
                          	  @endif

                          </td>

                          
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                      
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
       




@endsection