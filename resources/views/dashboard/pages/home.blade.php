@extends('dashboard.default')

@section('title', 'Saicel dashbaord')

@section('dashboardContent')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="custom-icon-card card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <p class="card-category">Total Visitors</p>
                            <h3 id="visitorCount" class="card-title">Loading...</h3>
                        </div>
                        <div class="card-body">
                            <div class="stats">
                                <div class="progress" style="height: 4px">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <canvas id="mostVisitedPagesChart"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <canvas id="mostVisitedProductsChart"></canvas>
                    </div>
                </div>
            </div>

        </div>


        {{-- <div class="row">
                <div class="col-md-12">
                    <div class="card custom-user-info-card">
                        <div class="card-header card-header-danger">
                            <div class="float-left">
                                <a><span class="material-icons custom-material-icon">
                                        person </span><span>Tenant</span></a>
                            </div>
                            <div class="float-right">
                                <div class="user-profile-nav">
                                    <div class="searchbar">
                                        <input class="search_input" type="text" name=""
                                            placeholder="Search..." />
                                        <a href="#" class="search_icon"><i class="material-icons">search</i></a>
                                    </div>
                                    <div class="btn-add-group">
                                        <button type="submit" class="btn btn-white">
                                            <span class="material-icons add-icon">
                                                add_box
                                            </span>
                                            Add New
                                        </button>
                                        <button type="submit" class="btn btn-white">
                                            <span class="material-icons add-icon">
                                                picture_as_pdf
                                            </span>
                                            PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body custom-user-table-data">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-danger">
                                        <th style="width: 5%">Photo</th>
                                        <th style="width: 20%">Name</th>
                                        <th style="width: 22%">Flat</th>
                                        <th style="width: 10%">Unit</th>
                                        <th style="width: 20%">Flat Owner</th>
                                        <th style="width: 15%">Head Of Family</th>
                                        <th style="width: 20%">Contact</th>
                                        <th style="width: 10%">Gender</th>
                                        <th style="width: 10%" class="text-center">Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="circle" src="./img/19.png" alt="user" />
                                            </td>
                                            <td>Kumar Chandra Baura</td>
                                            <td>Mohmmad Kamrul Hasan</td>
                                            <td>ICT</td>
                                            <td>Mohmmad Kamrul Hasan</td>
                                            <td>Md.Matin</td>
                                            <td>+880 00000 0000000</td>
                                            <td>Female</td>
                                            <td class="text-primary">
                                                <div class="action-btn-group float-right d-flex">
                                                    <button type="button"
                                                        class="
                                    custom-action-btn
                                    btn btn-primary
                                    mr-2
                                    edit-btn
                                  ">
                                                        Edit
                                                    </button>
                                                    <button type="button"
                                                        class="
                                    custom-action-btn
                                    btn btn-danger
                                    delete-btn
                                  ">
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="circle" src="./img/19.png" alt="user" />
                                            </td>
                                            <td>Kumar Chandra Baura</td>
                                            <td>Mohmmad Kamrul Hasan</td>
                                            <td>ICT</td>
                                            <td>Mohmmad Kamrul Hasan</td>
                                            <td>Md.Matin</td>
                                            <td>+880 00000 0000000</td>
                                            <td>Female</td>
                                            <td class="text-primary">
                                                <div class="action-btn-group float-right d-flex">
                                                    <button type="button"
                                                        class="
                                    custom-action-btn
                                    btn btn-primary
                                    mr-2
                                    edit-btn
                                  ">
                                                        Edit
                                                    </button>
                                                    <button type="button"
                                                        class="
                                    custom-action-btn
                                    btn btn-danger
                                    delete-btn
                                  ">
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
    </div>
    </div>

@endsection
