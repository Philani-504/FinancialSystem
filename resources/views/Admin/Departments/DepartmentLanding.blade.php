@extends('layouts.master')


@section('title')
    Departments | Financial Application
@endsection

@section('header')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Departments</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-building mr-4"></i></a></li>
              <div class="dropdown">
                <button class="btn btn-sm btn-success-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Department</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/G&A">General & Admin</a>
                  <a class="dropdown-item" href="#">Sales & Marketing</a>
                  <a class="dropdown-item" href="#">Product Development</a>
                  <a class="dropdown-item" href="#">Reg & Qual</a>
                  <a class="dropdown-item" href="#">Clinical</a>
                  <a class="dropdown-item" href="#">Finance</a>
                  <a class="dropdown-item" href="#">Human Resource</a>
                </div>
              </div>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
        <button type="button" class="btn btn-sm btn-success-dark" data-toggle="modal" data-target="#Create_Dep"><i class="fas fa-plus mr-2"></i> Create Dep</button>
        <button type="button" class="btn btn-sm btn-success-dark" data-toggle="modal" data-target="#Graph"><i class="fas fa-chart-area mr-2"></i>Graph</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Create Dep -->
<div class="modal fade" id="Create_Dep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success-dark" id="exampleModalLabel">Create New Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <!-- Input groups with icon -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user text-success-dark"></i></span>
                    </div>
                    <input class="form-control" placeholder="Department Name" type="text">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope text-success-dark"></i></span>
                    </div>
                    <input class="form-control" placeholder="Division" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <input class="form-control" placeholder="Region" type="text">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-map-marker text-success-dark"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <input class="form-control" placeholder="Password" type="password">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-eye"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Input groups with icon -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                    </div>
                    <input class="form-control" placeholder="Payment method" type="text">
                    <div class="input-group-append">
                      <span class="input-group-text"><small class="font-weight-bold">USD</small></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                    </div>
                    <input class="form-control" placeholder="Phone number" type="text">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-md btn-success-dark">Submit<i class="fas fa-upload ml-2"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- GraphView of Departments -->
<div class="modal fade" id="Graph" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <div class=" " style="margin-bottom: 3rem;">
            <!-- Surtitle -->
            <h6 class="surtitle text-success-dark">Department Performance</h6>
            <!-- Title -->
            <h5 class="h3 mb-0 text-success-dark">Total</h5>
          </div>
          
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <div class="dropdown mb-3">
                    <button class="btn btn-sm btn-success-dark dropdown-toggle" style="margin-top: 15px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View by</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Year (12)</a>
                        <a class="dropdown-item" href="#">half-year (6)</a>
                        <a class="dropdown-item" href="#">quartly (4)</a>
                    </div>
                </div>
              <div class="col-xl">
              
                <div class="chart">
                  <!-- Chart wrapper -->
                  <canvas id="chart-bars" class="chart-canvas"></canvas>
                </div>
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
              <h3 class="mb-0 text-success-dark">Departments</h3>
              <p class="text-sm mb-0">
              </p>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Dep ID</th>
                    <th>Dep Name</th>
                    <th>Date Dep Created</th>
                    <th>Dep Total Cost</th>
                    <th>Last Action</th>
                    <th>Edit | Delete</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>Dep ID</th>
                    <th>Dep Name</th>
                    <th>Date Dep Created</th>
                    <th>Dep Total Cost</th>
                    <th>Last Action</th>
                    <th>Edit | Delete</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>d1</td>
                    <td>General & Admin</td>
                    <td>2015/02/23</td>
                    <td>$ 200,000.00</td>
                    <td> </td>
                    <td>
                        <div>
                            <i class="fas fa-pen text-success-dark"></i> |
                            <i class="fas fa-trash text-success-dark"></i>
                        </div>
                    </td>
                  </tr>
                  <tr>
                  <td>2</td>
                    <td>Sales & Marketing</td>
                    <td>2015/02/23</td>
                    <td>$ 250,000.00</td>
                    <td> </td>
                    <td>
                        <div>
                            <i class="fas fa-pen text-success-dark"></i> |
                            <i class="fas fa-trash text-success-dark"></i>
                        </div>
                    </td>
                  </tr>
                  <tr>
                  <td>3</td>
                    <td>Prod Development</td>
                    <td>2015/02/23</td>
                    <td>$ 350.000.00</td>
                    <td> </td>
                    <td>
                        <div>
                            <i class="fas fa-pen text-success-dark"></i> |
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
@endsection

@section('scripts')
<script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
@endsection