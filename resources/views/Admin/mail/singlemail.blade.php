@extends('Admin.layout')
@section('content')

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">
                        <h4>Send Mail</h4>
                        <div class="card">

                            <div class="card-body">
                                <div class="basic-elements">
                                    <form action="{{ url('admin/send-singlemail') }}" method="post">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" style="width: 490px;">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="w3review">Write your Message:</label>
                                                    <textarea id="w3review" name="message" name="w3review" rows="10" cols="60">
                                                    </textarea>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">

                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary" value="Send Message">
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
            @endsection

