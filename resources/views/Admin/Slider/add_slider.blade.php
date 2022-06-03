@extends('Admin.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Slider</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <h4>Create New Slider</h4>
                            <div class="card">
                               
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="#" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Slider Text</label>
                                                        <input type="text" class="form-control" name="slider_text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Button Text</label>
                                                        <input type="text" class="form-control" name="button_text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Button URL</label>
                                                        <input type="text" class="form-control" name="button_url">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <label>Thumbnail</label>
                                                    <div class="row">
                                                        <div class="col-lg-1">
                                                            <div class="form-group">
                                                                
                                                                <a href="#" data-toggle="modal" data-target="#add-category" title="Select From Media"><button class="btn btn-primary"><i class="ti-gallery"></i></button></a>
                                                            </div>
                                    
                                                        </div>

                                                        <div class="col-lg-10 ml-1">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="image_url" id="thumbnail-value" placeholder="Please Select Thumbnail From Media" readonly style="width=200px !important;">
                                                            </div>
                                    
                                                        </div>
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




    <!-- Modal Add Category -->
    <div class="modal fade none-border" id="add-category">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
              <h4 class="modal-title">
                <strong>Select Media</strong>
              </h4>
            </div>
            <div class="modal-body" style="overflow-y: scroll; max-height: 200px">
              <form>
                <div class="row">
                    
                    <div class="col-md-3">
                        <a onclick="Thumbnail(1)" href="#" data-dismiss="modal"><img src="{{asset('Images/Offering/laravelvuereact.jpeg')}}" id="image-1" style="width:100px" alt=""/></a>
                    </div>

                    <div class="col-md-3">
                        <a onclick="Thumbnail(2)" href="#" data-dismiss="modal"><img src="{{asset('Images/Offering/webdesign.jpeg')}}" id="image-2"  style="width:100px" alt=""/></a>
                    </div>

                    <div class="col-md-3">
                        <a onclick="Thumbnail(3)" href="#" data-dismiss="modal"><img src="{{asset('Images/Offering/wordpresscsharp.jpeg')}}"  id="image-3" style="width:100px" alt=""/></a>
                    </div>

                    <div class="col-md-3">
                        <a onclick="Thumbnail(4)" href="#" data-dismiss="modal"><img src="{{asset('Images/Offering/webdesign.jpeg')}}"  id="image-4" style="width:100px" alt=""/></a>
                    </div>

                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button> --}}
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL -->


      <script>
          function Thumbnail(id){
              var img = document.getElementById('image-'+id);
              document.getElementById('thumbnail-value').value = img.src;
          }
      </script>

@endsection