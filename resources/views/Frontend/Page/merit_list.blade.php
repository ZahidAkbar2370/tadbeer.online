@extends('Frontend.layout')
@section('content')
    


    <!-- end header -->
        <!-- start page title -->
        <section class="wow animate__fadeIn bg-light-gray padding-25px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-6">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom text-center text-lg-start">Marit List 2022</h1>
                    </div>
                    <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                        {{-- <ul class="xs-text-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop-wide.html">Shop</a></li>
                            <li>Checkout</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- start section -->
        <section class="pt-20 wow animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 padding-70px-right lg-padding-40px-right md-padding-15px-right">
                      <div class="row align-items-center">
                            <div class="col-12">
                                <table class="table cart-products margin-60px-bottom md-margin-40px-bottom sm-no-margin-bottom">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="alt-font">Sr #</th>
                                            <th scope="col" class="alt-font">Student Name</th>
                                            <th scope="col" class="alt-font">Father Name</th>
                                            <th scope="col" class="alt-font">CNIC No</th>
                                            <th scope="col" class="alt-font">Toatl Marks</th>
                                            <th scope="col" class="alt-font">Obtained Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-name">
                                                <span class="variation">1</span>
                                            </td> 
                                            <td class="product-name">
                                                <span class="variation">Zahid Akbar</span>
                                            </td>
                                            <td class="product-name">
                                                <span class="variation">Ghulam Akbar</span>
                                            </td>
                                            <td class="product-name">
                                                <span class="variation">3220331075889</span>
                                            </td>
                                            <td class="product-name">
                                                <span class="variation">100</span>
                                            </td>
                                            <td class="product-name">
                                                <span class="variation">90</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </section>
        <!-- end section -->

@endsection