@extends('Admin.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Service</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <h4>Create New Student</h4>
                            <div class="card">
                               
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="#" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h6>Login Detail</h6>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <h6>Personal Information</h6>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Course Name</label>
                                                        <select class="form-control" name="password">
                                                            <option value="">Select Course</option>
                                                            <option value="laravel">Laravel</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Batch No</label>
                                                        <input type="number" class="form-control" name="password" value="2">
                                                    </div>
                                                </div>
                            
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mobile No</label>
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>CNIC No</label>
                                                        <input type="text" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Degree Name</label>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            <select class="form-control" name="password">
                                                                <option value="">Select Degree</option>
                                                                <option value="metric">Metric</option>
                                                                <option value="inter">Inter</option>
                                                                <option value="bs">BS</option>
                                                                <option value="ma">MA</option>
                                                                <option value="mcs">MCS</option>
                                                                <option value="bsc">BSC</option>
                                                                <option value="adp">ADP</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            </div>

                                                            <div class="col-lg-6">
                                                            <select class="form-control" name="password">
                                                                <option value="">Select Course</option>
                                                                <option value="it">IT</option>
                                                                <option value="cs">CS</option>
                                                                <option value="se">SE</option>
                                                                <option value="science">Science</option>
                                                                <option value="arts">Arts</option>
                                                                <option value="other">other</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        {{-- <input type="text" class="form-control" name="password"> --}}
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Pass Year</label>
                                                        <select class="form-control" name="password">
                                                            <option value="">Select Year</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Institute Name</label>
                                                        <input type="text" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Create">
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>

@endsection