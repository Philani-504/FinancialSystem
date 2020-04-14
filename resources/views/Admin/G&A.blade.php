@extends('layouts.master')


@section('title')
    G&A | Financial Application
@endsection

@section('content')
<!--DataTable employeelist-->
<div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Employees</h3>
              <p class="text-sm mb-0">
              <button type="button" class="btn btn-sm btn-success" style="margin-top:15px;" data-toggle="modal" data-target="#AddEmployee">Add New</button>
              <button type="button" class="btn btn-sm btn-success" style="margin-top:15px;" data-toggle="modal" data-target="#grahview">View Graph</button>
              </p>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>2015/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                  <td>2</td>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>2015/04/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                  <td>3</td>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>2015/04/25</td>
                    <td>$86,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    
<!-- Modal new employee form -->
<div class="modal fade" id="AddEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-success-dark" id="exampleModalLabel" ><i class="ni ni-fat-add"></i>new Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center text-success-dark">
            <large><i class="ni ni-circle-08" style="font-size: 60px"></i><large>
        </div>

        <div class="wrap-drop" id="departments">
            <span>Department</span>
                <ul class="drop">
                    <li class="selected"><a>Department</a></li>
                    <li><a>General & Admin</a></li>
                    <li><a>Sales & Marketing</a></li>
                    <li><a>Product Development</a></li>
                    <li><a>Reg & Qual</a></li>
                    <li><a>Clinical</a></li>
                    <li><a>Finance</a></li>
                </ul>
        </div>
        <div class="wrap-drop" id="position">
            <span>Position</span>
                <ul class="drop">
                    <li class="selected"><a>Position</a></li>
                    <li><a>Telesales</a></li>
                    <li><a>Manager</a></li>
                </ul>
        </div>
        <div class="wrap-drop" id="levels">
            <span>Level</span>
                <ul class="drop">
                    <li class="selected"><a>Level</a></li>
                    <li><a>Excutive</a></li>
                    <li><a>General & Admin</a></li>
                    <li><a>Operations</a></li>
                    <li><a>Excutive</a></li>
                </ul>
        </div>

        <form role="form">
            <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-success-dark"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control text-success-dark" placeholder="Name" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-success-dark"><i class="ni ni-money-coins"></i></span>
                    </div>
                    <input class="form-control text-success-dark" placeholder="Salary" type="number">
                </div>
            </div>
            <!--date picker-->
            <div id="date-picker-section" class="">
                                    <div id="date-picker-container">
                                        <!--DATE DISPLAY-->
                                        <div id="date-picker-dates">
                                            <div id="date-picker-date-first" class="date-picker-date">
                                                24/12/2017
                                            </div>
                                            <div class="date-picker-date">
                                                28/12/2017
                                            </div>
                                        </div>
                                        <!--CALANDER TABLE-->
                                        <div id="date-picker-modal" class="hidden-2">
                                            <div id="date-picker-top-bar">
                                                <div id="date-picker-previous-month" class="date-picker-change-month">
                                                    &lsaquo;</div>
                                                <div id="date-picker-month">December 17</div>
                                                <div id="date-picker-next-month" class="date-picker-change-month">
                                                    &rsaquo;</div>
                                            </div>
                                            <div id="date-picker-exit">&times;</div>
                                            <table id="date-picker">
                                                <tr id="date-picker-weekdays">
                                                    <th>S</th>
                                                    <th>M</th>
                                                    <th>T</th>
                                                    <th>W</th>
                                                    <th>T</th>
                                                    <th>F</th>
                                                    <th>S</th>
                                                </tr>
                                                <!-- Actual calendar rows added dynamically -->
                                                <!--<tr class="date-picker-calendar-row"></tr>-->
                                            </table>
                                        </div>

                                    </div>
                                </div>
    
   
            
            <div class="text-center">

                <button type="button" class="btn btn-md btn-success-dark my-4">Submit</button>
            </div>
        </form>
      </div>
     

      







      <!-- Modal Graphview -->




 



    </div>
  </div>
</div>
<!--CHART Modal-->
<div class="modal fade" id="grahview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card bg-success-dark">
    <div class="card-body">
        <div class="chart">
            <!-- Chart wrapper -->
            <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>
@endsection