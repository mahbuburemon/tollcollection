@extends('layout')
@section('content')

<div class="content-wrapper">
          <h1 class="page-title">Details about Bridges</h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"></h2>
              <div class="row">
                <div class="table-sorter-wrapper col-lg-12 table-responsive">
                  <table id="myTable" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th class="sortStyle">Bridges<i class="mdi mdi-chevron-down ml-2"></i></th>
                        <th class="sortStyle">car<i class="mdi mdi-chevron-down ml-2"></i></th>
                        <th class="sortStyle">bike<i class="mdi mdi-chevron-down ml-2"></i></th>
                        <th class="sortStyle">bus<i class="mdi mdi-chevron-down ml-2"></i></th>
                        <th class="sortStyle">truck<i class="mdi mdi-chevron-down ml-2"></i></th>
                        <th class="sortStyle">cargo<i class="mdi mdi-chevron-down ml-2"></i></th>
                        <th class="sortStyle">Web Site<i class="mdi mdi-chevron-down ml-2"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Bridge1</td>
                        <td>100</td>
                        <td>40</td>
                        <td>200</td>
                        <td>150</td>
                        <td>150</td>
                        <td>http://www.bridge1.com</td>
                      </tr>
                      <tr>
                        <td>Bridge2</td>
                        <td>100</td>
                        <td>40</td>
                        <td>200</td>
                        <td>150</td>
                        <td>150</td>
                        <td>http://www.bridge2.com</td>
                      </tr>
                      <tr>
                        <td>Bridge4</td>
                        <td>100</td>
                        <td>40</td>
                        <td>200</td>
                        <td>150</td>
                        <td>150</td>
                        <td>http://www.bridge3.com</td>
                      </tr>
                      <tr>
                        <td>Bridge4</td>
                        <td>100</td>
                        <td>40</td>
                        <td>200</td>
                        <td>150</td>
                        <td>150</td>
                        <td>http://www.bridge4.com</td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>




@endsection