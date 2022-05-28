@extends("Admin.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Registered Students</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    {{-- <a href="{{url('new-registration')}}"><button class="btn btn-primary">Create Student</button></a> --}}
                    <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr#</th>
                                                    <th>Student Name</th>
                                                    <th>Mobile No</th>
                                                    <th>Email Address</th>
                                                    <th>Course Name</th>
                                                    <th>Publication Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Zahid AKbar</td>
                                                    <td>03081312527</td>
                                                    <td>janujakhar2370@gmail.com</td></td>
                                                    <td>Laravel</td>

                                                    <td>
                                                        <a href="#" class="btn btn-danger">InActive</a>
                                                        <a href="#" class="btn btn-success">Active</a>
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#add-category"><i class="ti-eye"></i></a>
                                                        <a href="#" class="btn btn-info"><li class="ti-pencil-alt"></li></a>
                                                        <a href="#" class="btn btn-danger" onclick="return confirm('Do You want to Delete Script?')"><i class="ti-trash"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                                @if(!empty($allUsers))
                                                @foreach($allUsers as $user)
                                                <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->role}}</td>

                                                    @if($user->status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif

                                                    @if($user->status == "1")
                                                        <td><a href="update-user-status/{{$user->id}}/0" class="btn btn-danger">InActive</a></td>
                                                    @else
                                                        <td><a href="update-user-status/{{$user->id}}/1" class="btn btn-success">Active</a></td>
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


    

    <!-- Modal Add Category -->
    <div class="modal fade none-border" id="add-category">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
              <h4 class="modal-title">
                <strong>Student Profile (ID:1)</strong>
              </h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <label class="control-label"><strong>Name: </strong>Zahid Akbar Jakhar</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Mobile #: </strong>+92 308 1312527</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Email: </strong> janujakhar2370@gmail.com</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Publication Status: </strong>Active</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Course Name: </strong>Laravel</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Batch No: </strong>2</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>CNIC No: </strong>32203-3107588-9</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Address: </strong>Layyah</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Degree Name: </strong>BSCS</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Institute Name: </strong>FUUAST ISB</label>
                  </div>

                  <div class="col-md-6">
                    <label class="control-label"><strong>Passing Year: </strong>2022</label>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL -->

      
@endsection