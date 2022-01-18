@extends('admin.layouts.main')

@section('subcontent')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{ route('customers') }}">Customer</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('importcustomers') }}">Import Customer</a></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">

          <h6 class="h2 text-white d-inline-block mb-0">Import Customer</h6>
        </div>
      </div>
      <!-- Card stats -->
    </div>
  </div>
</div>

@endsection


@section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
                <form>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input fileImport" id="customFileLang" lang="en">
                                <label class="custom-file-label" for="customFileLang">Select Customer XLSX file</label>
                            </div>
                        </div>
                        <div class="col text-right">
                            <button type="submit" class="btn btn-md btn-primary">Import Customer</button>
                            <button type="submit" class="btn btn-md btn-primary">Download Template</button>
                            <a href=""><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Customer Name</th>
                    <th scope="col" class="sort" data-sort="name">Inquiry Name</th>
                    <th scope="col" class="sort" data-sort="name">Inquiry Date</th>
                    <th scope="col" class="sort" data-sort="name">Duration</th>
                    <th scope="col" class="sort" data-sort="name">Budget</th>
                    <th scope="col" class="sort" data-sort="name">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <a href="" class="no-style"> Chathura Ekanayake <i class="fas fa-copy"></i></a>
                    </th>
                    <td>
                      Test Inquiry
                    </td>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      5 Days
                    </td>
                    <td>
                      Rs: 25000
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> Quatation Added
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <a href="" class="no-style"> Chathura Ekanayake <i class="fas fa-copy"></i></a>
                    </th>
                    <td>
                      Test Inquiry
                    </td>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      5 Days
                    </td>
                    <td>
                      Rs: 25000
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> Quatation Added
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <a href="" class="no-style"> Chathura Ekanayake <i class="fas fa-copy"></i></a>
                    </th>
                    <td>
                      Test Inquiry
                    </td>
                    <td>
                      2021-12-05
                    </td>
                    <td>
                      5 Days
                    </td>
                    <td>
                      Rs: 25000
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> Quatation Added
                    </td>
                  </tr>

                  

                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      
@endsection