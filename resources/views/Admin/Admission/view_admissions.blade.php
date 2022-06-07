@extends("Admin.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>All Admission</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr#</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allAdmission))
                                                @foreach($allAdmission as $admission)
                                                <tr>
                                                    <td>{{$admission->id}}</td>
                                                    <td>{{$admission->title}}</td>
                                                    <td>{{$admission->start_date}}</td>
                                                    <td>{{$admission->end_date}}</td>
                                                    <td><img src="{{$admission->image_url}}" alt="" style="width: 50px;height: 50px;"></td>

                                                    <td><a href="#" class="btn btn-success">Delete</a></td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>

      
@endsection