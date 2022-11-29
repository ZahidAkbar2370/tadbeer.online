@extends('Admin.layout')
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>All videos</span></h1>
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
                                        @if (Session::has('message'))
                                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                                        @endif
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr#</th>
                                                    <th>Title</th>
                                                    <th>Short Intro</th>
                                                    <th>Image Url</th>
                                                    <th>Video URL</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($viewVideos))
                                                    @foreach ($viewVideos as $videos)
                                                        <tr>
                                                            <td>{{ $videos->id }}</td>
                                                            <td>{{ $videos->title }}</td>
                                                            <td>{{ $videos->short_introduction }}</td>
                                                            <td><img src="{{ $videos->image_url }}" alt=""
                                                                    style="width: 50px;height: 50px;"></td>
                                                            <td>{{ $videos->video_url }}</td>
                                                           <td><a href="edit-video/{{ $videos->id }}"
                                                                class="btn btn-info">Edit</a>
                                                                <a href="delete-videos/{{ $videos->id }}"
                                                                    class="btn btn-danger">Delete</a></td>

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
