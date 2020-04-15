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
        <button type="button" class="btn btn-sm btn-success-dark" data-toggle="modal" data-target="#preset"><i class="fas fa-plus mr-2"></i> Create Dep</button>
        <button type="button" class="btn btn-sm btn-success-dark" data-toggle="modal" data-target="#preset"><i class="fas fa-chart-area mr-2"></i>Graph</button>
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
                            <i class="fas fa-user-edit text-success-dark"></i> |
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
@endsection

@section('scripts')

@endsection