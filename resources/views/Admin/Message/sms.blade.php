@extends("Admin.layout")
@section('content')

<div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>SENT SMS</h1>
              </div>
            </div>
          </div>
          {{-- <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">App-Email</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column --> --}}
        </div>
        <!-- /# row -->
        <div class="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="compose-email">
                    <div class="mail-box">
                      
                      <aside class="lg-side">
                        <div class="inbox-head">
                          <h3 class="input-text">Email</h3>
                          <form action="#" class="pull-right position">
                            <div class="input-append inner-append">
                              <input type="text" class="sr-input" placeholder="Search Mail">
                              <button class="btn sr-btn append-btn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                          </form>
                        </div>
                        {{-- <div class="mail-option">
                          <div class="chk-all chk-group">
                            <input type="checkbox" class="mail-checkbox mail-group-checkbox" id="checkAll" />
                            <div class="btn-group">
                              <a data-toggle="dropdown" href="#" class="btn mini all m-l-10" aria-expanded="false">All<i class="fa fa-angle-down "></i></a>
                              <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"> None</a></li>
                                <li><a href="#"> Read</a></li>
                                <li><a href="#"> Unread</a></li>
                              </ul>
                            </div>
                          </div>

                          <div class="btn-group">
                            <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                          <i class=" fa fa-refresh"></i>
                                                      </a>
                          </div>
                          <div class="btn-group hidden-phone">
                            <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false"> More<i class="fa fa-angle-down "></i></a>

                            <ul class="card-option-dropdown dropdown-menu">
                              <li><a href="#"><i class="ti-pencil"></i> Mark as Read</a></li>
                              <li><a href="#"><i class="ti-menu-alt"></i>Spam</a></li>
                              <li><a href="#"><i class="ti-trash"></i>Delete</a></li>
                            </ul>
                          </div>
                          <div class="btn-group">
                            <a data-toggle="dropdown" href="#" class="btn mini blue">Move to<i class="fa fa-angle-down "></i></a>
                            <ul class="card-option-dropdown dropdown-menu">
                              <li><a href="#">Draft</a></li>
                              <li><a href="#">Spam</a></li>
                              <li><a href="#"> Delete</a></li>
                            </ul>
                          </div>

                          <ul class="unstyled inbox-pagination pagination-list">
                            <li><span>1-50 of 234</span></li>
                            <li>
                              <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                            </li>
                            <li>
                              <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                            </li>
                          </ul>
                        </div> --}}
                        <div class="table-responsive">
                          <table class="table table-inbox table-hover table-responsive">
                            <tbody>
                              <tr style="width: 100% !important">
                                <td  style="width: 20px !important">
                                    <span>1</span>
                                </td>

                                <td  style="width: 50px !important">
                                  <span>3081312527</span>
                                </td>
                                {{-- <td class="inbox-small-cells"><i class="ti-star"></i></td> --}}
                                <td   style="width: 150px !important">Zahid Akbar</td>
                                <td   style="width: 620px !important">This is Test Message</td>
                                {{-- <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td> --}}
                                <td    style="width: 70px !important" class="text-right">9:27 AM</td>
                              </tr>
                            
                            </tbody>
                          </table>
                        </div>

                      </aside>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection