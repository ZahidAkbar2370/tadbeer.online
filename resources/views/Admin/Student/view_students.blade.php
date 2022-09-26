@extends("Admin.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>All Students</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="#" data-toggle="modal" data-target="#add-category"><button class="btn btn-primary">Create Student</button></a>
                    <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr#</th>
                                                    <th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>DOB</th>
                                                    <th>CNIC</th>
                                                    <th>Address</th>
                                                    <th>Madrassa total Marks</th>
                                                    <th>Madrassa Otained Marks</th>
                                                    <th>Madrassa percentage</th>
                                                    <th>Madrassa Name</th>
                                                    <th>Madrassa board</th>
                                                    <th>Bachlors Obtained marks</th>
                                                    <th>Bachlors percentage</th>
                                                    <th>Bachlors university</th>
                                                    <th>Master Obtained marks</th>
                                                    <th>Master Percentage</th>
                                                    <th>Master Uni Name</th>
                                                    <th>Optional Skill</th>
                                                    <th>Optional expert</th>
                                                    <th>Question 1</th>
                                                    <th>Question 2</th>
                                                    <th>Question 3</th>
                                                    <th>Question 4</th>
                                                    <th>Question 5</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if(!empty($Students))
                                                @foreach($Students as $student)
                                                <tr>
                                                    <td>{{ $student->id }}</td>
                                                    <td>Abid</td>
                                                    <td>{{$student->father_name}}</td>
                                                    <td>{{$student->date_of_birth}}</td>
                                                    <td>{{$student->cnic_no}}</td>
                                                    <td>{{$student->parmanent_address}}</td>
                                                    <td>{{$student->madrassah_total_marks}}</td>
                                                    <td>{{$student->madrassah_obtained_marks}}</td>
                                                    <td>{{$student->madrassah_percentage}}</td>
                                                    <td>{{$student->madrassah_name}}</td>
                                                    <td>{{$student->madrassah_board}}</td>
                                                    <td>{{$student->bachelors_obtained_marks}}</td>
                                                    <td>{{$student->bachelors_percentage}}</td>
                                                    <td>{{$student->bachelors_university}}</td>
                                                    <td>{{$student->master_obtained_marks}}</td>
                                                    <td>{{$student->master_percentage}}</td>
                                                    <td>{{$student->master_university_name}}</td>
                                                    <td>{{$student->optional_skill}}</td>
                                                    <td>{{$student->optional_expert}}</td>
                                                    <td>{{$student->question_1}}</td>
                                                    <td>{{$student->question_2}}</td>
                                                    <td>{{$student->question_3}}</td>
                                                    <td>{{$student->question_4}}</td>
                                                    <td>{{$student->question_5}}</td>
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
                <strong>Add New Category</strong>
              </h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label">Category Name</label>
                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Optional</label>
                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Publication Status</label>
                        <input type="checkbox" name="category-name" />
                    </div>

                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL -->


@endsection
