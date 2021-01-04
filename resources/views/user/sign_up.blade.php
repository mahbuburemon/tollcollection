@php

     $user_id=Session::get('user_id');
     $user_info= DB::table('user_tbl')                      
               ->where('user_id',$user_id)
               ->first();           

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Toll Collection</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/node_modules/rickshaw/rickshaw.min.css" />
  <link rel="stylesheet" href="/bower_components/chartist/dist/chartist.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.html" />
</head>
<body class="sidebar-dark">
  
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    
      <!-- chat section tabends -->
    </div>
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ url('/')}}"> Toll Collection </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        

        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">

              <img src="" alt="">
            </div>
            <div class="details">
              <p class="user-name"></p>
              
            </div>
          </div>
          
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
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
                          <form class="forms-sample" method="post" action="{{('/sign_up')}}" enctype="multipart/form-data">
                          
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
                                  <label for="exampleInputEmail1">Toll Amount</label>
                                  <input type="text" class="form-control p-input" name="user_amount"placeholder="Nid No">
                                  
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

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">@Mahbub</a> &copy; 2020
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="/node_modules/flot/jquery.flot.js"></script>
  <script src="/node_modules/flot/jquery.flot.resize.js"></script>
  <script src="/node_modules/flot/jquery.flot.categories.js"></script>
  <script src="/node_modules/flot/jquery.flot.pie.js"></script>
  <script src="/node_modules/rickshaw/vendor/d3.v3.js"></script>
  <script src="/node_modules/rickshaw/rickshaw.min.js"></script>
  <script src="/bower_components/chartist/dist/chartist.min.js"></script>
  <script src="/node_modules/chartist-plugin-legend/chartist-plugin-legend.js"></script>
  <script src="/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <script src="/node_modules/datatables.net/js/jquery.dataTables.js"></script>
  <script src="/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="/js/data-table.js"></script>
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/misc.js"></script>
  <script src="/js/settings.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/js/dashboard_1.js"></script>
  <!-- End custom js for this page-->
</body>
</html>




