@extends('layout')
@section('content')



<div class="content-wrapper">
          <h1 class="page-title">Account Details</h1>
          
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
                          <form class="forms-sample" method="post" action="{{('/save_amount')}}" >
                          
                          @csrf 

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Users</label>
                                  <select class="form-control p-input" id="user_id" name="user_id">
                                    <option value="">Select</option>
                                     @foreach (App\User::all() as $user): ?>
                                        <option value="{{ $user->user_id }}">{{ $user->user_name }}</option>
                                    @endforeach ?>
                                    
                              
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Date</label>
                                  <input type="date" class="form-control p-input" name="date" placeholder="date">
                                  
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Current Amount</label>
                                <div id="current_amount"></div>
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Toll Amount</label>
                                  <input type="text" class="form-control p-input" name="toll_amount"placeholder="Toll Amount">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Due Amount</label>
                                  <input type="text" class="form-control p-input" name="due_amount"placeholder="Due Amount">
                                  
                              </div>
                              <div class="form-group">
                              

                              <button type="submit" class="btn btn-success btn-block">Submit</button>

                          </form>
                      </div>
                  </div>
              </div>




@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
  $('#user_id').change(function() {
      var user_id = $(this).val();

      // ajax setup

      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
      });

      // ajax setup request start

      $.ajax({
    type: 'POST',
    url: '/get/current_amount',
    data: {
        user_id: user_id
    },
    success: function(data) {
        $("#current_amount").html(data);
    }
      });

      // ajax setup request end

  });
    });
</script>
@endsection