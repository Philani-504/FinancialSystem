@extends('layouts.master')


@section('title')
    G&A | Financial Application
@endsection

@section('header')
<!-- Header -->
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">G&A</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">FTE</a></li>
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            <button type="button" class="btn btn-sm btn-success-dark" data-toggle="modal" data-target="#preset">Settings</button>
              <a href='/G&A-Exp' class="btn btn-sm btn-success-dark">EXP</a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal Calculation Settings-->
     <div class="modal fade" id="preset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-success-dark" id="exampleModalLabel">Calculation Settings</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item" id="salary">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-dollar-sign mr-2"></i>Salary</a>
                        </li>
                        <li class="nav-item" id="personalExpense">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="far fa-address-card mr-2"></i>Personal Expense</a>
                        </li>
                        <li class="nav-item" id="utilities">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fas fa-network-wired mr-2"></i>Utilities</a>
                        </li>
                        <li class="nav-item" id="AssetPurchase">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="true"><i class="fas fa-money-check-alt mr-2"></i>Asset Purchase</a>
                        </li>
                        <li class="nav-item" id="computer">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"><i class="ni ni-laptop mr-2"></i>Computer</a>
                        </li>
                        <li class="nav-item" id="other">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-6-tab" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-6" aria-selected="false"><i class="fab fa-ethereum mr-2"></i>Depreciation</a>
                        </li>
                    </ul>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                          <!--Salary Input-->
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                            <div class="p-4 bg-secondary" id="annualBonus">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Annual Bonus">
                            </div>
                            <div class="p-4 bg-secondary" id="AnnualRaise">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Annual Raise">
                            </div>
                            <div class="p-4 bg-secondary" id="monthlyBenefist">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Monthly Benefits">
                            </div>
                        </div>
                            
                            <!--Per Person Expense-->
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                            <div class="p-4 bg-secondary" id="Excutive">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Excutive">
                            </div>
                            <div class="p-4 bg-secondary" id="salesMarketing">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Sale & Marketing">
                            </div>
                            <div class="p-4 bg-secondary" id="operations">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Operations">
                            </div>
                            <div class="p-4 bg-secondary" id="generalAdmin">
                                <input type="number" class="form-control form-control-alternative" placeholder="% General & Admin">
                            </div>
                      </div>
                            <!-- Utilities -->
                      <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                      <div class="p-4 bg-secondary" id="Excutive">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Excutive">
                            </div>
                            <div class="p-4 bg-secondary" id="salesMarketing">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Sale & Marketing">
                            </div>
                            <div class="p-4 bg-secondary" id="operations">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Operations">
                            </div>
                            <div class="p-4 bg-secondary" id="generalAdmin">
                                <input type="number" class="form-control form-control-alternative" placeholder="% General & Admin">
                            </div>
                      </div>
                            <!-- Asset Purchase -->
                      <div class="tab-pane fade show" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                      <div class="p-4 bg-secondary" id="Excutive">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Excutive">
                            </div>
                            <div class="p-4 bg-secondary" id="salesMarketing">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Sale & Marketing">
                            </div>
                            <div class="p-4 bg-secondary" id="operations">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Operations">
                            </div>
                            <div class="p-4 bg-secondary" id="generalAdmin">
                                <input type="number" class="form-control form-control-alternative" placeholder="% General & Admin">
                            </div>
                      </div>
                            <!--Computer -->
                      <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                      <div class="p-4 bg-secondary" id="Excutive">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Excutive">
                            </div>
                            <div class="p-4 bg-secondary" id="salesMarketing">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Sale & Marketing">
                            </div>
                            <div class="p-4 bg-secondary" id="operations">
                                <input type="number" class="form-control form-control-alternative" placeholder="% Operations">
                            </div>
                            <div class="p-4 bg-secondary" id="generalAdmin">
                                <input type="number" class="form-control form-control-alternative" placeholder="% General & Admin">
                            </div>
                      </div>
                               <!--Depreciation -->
                      <div class="tab-pane fade" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-6-tab">
                            <div class="p-4 bg-secondary">
                                <label class="text-success-dark">Furniture</label>
                                <input type="number" class="form-control form-control-alternative" placeholder="Number Of Months">
                            </div>
                            <div class="p-4 bg-secondary">
                                <label class="text-success-dark">Computer</label>
                                <input type="number" class="form-control form-control-alternative" placeholder="Number Of Months">
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
        

          </div>
          <div class="modal-footer">
            <div class="text-center">
                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-md btn-success-dark">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('content')
<!--DataTable employeelist-->
<div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0 text-success-dark">Employees</h3>
              <p class="text-sm mb-0">
              <button type="button" class="btn btn-sm btn-success-dark" style="margin-top:15px;" data-toggle="modal" data-target="#AddEmployee">Add New</button>
              <button type="button" class="btn btn-sm btn-success-dark" style="margin-top:15px;" data-toggle="modal" data-target="#grahview">View Graph</button>
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
                    <th>Salary + Comm</th>
                    <th>Edit | Delete</th>
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
                    <th>Salary + Comm</th>
                    <th>Edit | Delete</th>
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
                    <td>
                        <div>
                            <i class="fas fa-user-edit text-success-dark"></i> |
                            <i class="fas fa-trash text-success-dark"></i>
                        </div>
                    </td>
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
                    <td>
                        <div>
                            <i class="fas fa-user-edit text-success-dark"></i> |
                            <i class="fas fa-trash text-success-dark"></i>
                        </div>
                    </td>
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
                    <td> 
                      <div>
                        <i class="fas fa-user-edit text-success-dark"></i> |
                        <i class="fas fa-trash text-success-dark"></i>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
</div>
<!--DataTable HeadCount track -->
<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0 text-success-dark">Expenses</h3>
        <p class="text-sm mb-0">
            <!--select year-->
        <div class="dropup">
              <div class="btn btn-sm btn-success-dark" style="margin-top: 15px" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span>select year</span>
              </div>
              <div class="dropdown-menu">
                  <a href="javascript:;" class="dropdown-item">
                  <span>2018</span>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                  <span>2019</span>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                  <span>2020</span>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                  <span>2021</span>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                  <span>2022</span>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                  <span>2023</span>
                  </a>
              </div>
          </div>
          <!--view data by -->
        <div class="dropdown">
              <button class="btn btn-sm btn-success-dark dropdown-toggle" style="margin-top: 15px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View by</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Year (12)</a>
                  <a class="dropdown-item" href="#">half-year (6)</a>
                  <a class="dropdown-item" href="#">quartly (4)</a>
              </div>
          </div>
        </p>
      </div>
      <!--Table-->
      <div class="table-responsive py-2">
      <span><h2 class="text-success-dark text-center">2020</h2></span>
        <table class="table table-flush" id="datatable-buttons">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Jan</th>
              <th>Feb</th>
              <th>Mar</th>
              <th>Apr</th>
              <th>May</th>
              <th>Jun</th>
              <th>Jul</th>
              <th>August</th>
              <th>Sept</th>
              <th>Oct</th>
              <th>Nov</th>
              <th>Dec</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>ID</th>
            <th>Jan</th>
              <th>Feb</th>
              <th>Mar</th>
              <th>Apr</th>
              <th>May</th>
              <th>Jun</th>
              <th>Jul</th>
              <th>August</th>
              <th>Sept</th>
              <th>Oct</th>
              <th>Nov</th>
              <th>Dec</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>            
              <td>0</td>            
            </tr>
            <tr>
            <td>2</td>
            <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
            <td>3</td>
            <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
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