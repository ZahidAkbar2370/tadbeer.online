@extends("Admin.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>All Programs</span></h1>
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
                                                    <th>Program Name</th>
                                                    <th>Image</th>
                                                    <th>Duration</th>
                                                    <th>Publication Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allPrograms))
                                                @foreach($allPrograms as $program)
                                                <tr>
                                                    <td>{{$program->id}}</td>
                                                    <td>{{$program->program_name}}</td>
                                                    <td><img src="{{$program->image_url}}" alt="" style="width: 50px;height: 50px;"></td>
                                                    <td>{{$program->duration}}</td>

                                                    @if($program->publication_status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif

                                                    @if($program->publication_status == "1")
                                                        <td><a href="active-program/{{$program->id}}" class="btn btn-danger">InActive</a></td>
                                                    @else
                                                        <td><a href="inactive-program/{{$program->id}}" class="btn btn-success">Active</a></td>
                                                    @endif
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