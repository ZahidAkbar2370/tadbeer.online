@extends("Admin.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>All Contact Messages</span></h1>
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
                                                    <th>From Email</th>
                                                    <th>Name</th>
                                                    <th>Mobile No</th>
                                                    <th>Message</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allContactMessages))
                                                @foreach($allContactMessages as $contact_message)
                                                <tr>
                                                    <td>{{$contact_message->id}}</td>
                                                    <td>{{$contact_message->name}}</td>
                                                    <td>{{$contact_message->email}}</td>
                                                    <td>{{$contact_message->mobile_no}}</td>
                                                    <td>{{$contact_message->message}}</td>
                                                    <td>{{$contact_message->status}}</td>

                                                    @if($contact_message->status == "pending")
                                                        <td><a href="done-contact-message/{{$contact_message->id}}" class="btn btn-danger">Done</a></td>
                                                    @else
                                                        <td><a href="pending-contact-message/{{$contact_message->id}}" class="btn btn-success">Pending</a></td>
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