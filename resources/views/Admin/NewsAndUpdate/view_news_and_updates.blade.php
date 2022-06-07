@extends("Admin.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>All News & Events</span></h1>
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
                                                    <th>Image</th>
                                                    <th>Type</th>
                                                    <th>Description</th>
                                                    <th>Publication Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <tr>
                                                    <td>1</td>
                                                    <td>Zahid AKbar</td>
                                                    <td>Laravel</td>
                                                    <td>Laravel</td>
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
                                                    
                                                </tr> --}}
                                                @if(!empty($allNewsUpdates))
                                                @foreach($allNewsUpdates as $news_update)
                                                <tr>
                                                    <td>{{$news_update->id}}</td>
                                                    <td>{{$news_update->title}}</td>
                                                    <td><img src="{{$news_update->image_url}}" alt="" style="width: 50px;height: 50px;"></td>
                                                    <td>{{$news_update->type}}</td>
                                                    <td>{{$news_update->description}}</td>
                                                    
                                                    

                                                    @if($news_update->publication_status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif

                                                    @if($news_update->publication_status == "1")
                                                        <td><a href="active-news-update/{{$news_update->id}}/0" class="btn btn-danger">InActive</a></td>
                                                    @else
                                                        <td><a href="inactive-news-update/{{$news_update->id}}/1" class="btn btn-success">Active</a></td>
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