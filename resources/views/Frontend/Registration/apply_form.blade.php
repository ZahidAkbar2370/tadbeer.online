@extends('Frontend.layout')
@section('content')
    


    <!-- end header -->
        <!-- start page title -->
        <section class="wow animate__fadeIn bg-light-gray padding-25px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-6">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom text-center text-lg-start">Online Registration</h1>
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



        {{-- <!-- start section -->
        <section class="wow animate__fadeIn checkout">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12" id="accordion1">
                        <!--start tab content -->
                        <div class="d-sm-flex justify-content-center align-items-center padding-10px-bottom text-center">
                            <i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>
                            <span class="text-extra-dark-gray alt-font">Returning customer?&nbsp;</span><a class="accordion-toggle text-extra-dark-gray text-decoration-underline" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#collapseOne"><span class="alt-font">Click here to login</span></a>
                        </div>
                        <div id="collapseOne" class="collapse text-center" data-bs-parent="#accordion1">
                            <div class="w-40 mx-auto margin-4-half-rem-tb text-start lg-w-50 sm-w-100">
                                <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the billing section.</p>
                                <div class="row margin-10px-bottom text-start">
                                    <div class="col-6">
                                        <label class="margin-15px-bottom">Username or email <span class="text-radical-red">*</span></label>
                                        <input class="small-input" type="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="col-6">
                                        <label class="margin-15px-bottom">Password <span class="text-radical-red">*</span></label>
                                        <input class="small-input" type="password" name="password" placeholder="Enter your password">
                                    </div>
                                </div>
                                <span class="d-block w-100 d-flex align-items-center margin-25px-bottom">
                                    <input class="d-inline w-auto mb-0 margin-10px-right" type="checkbox" name="checkbox">
                                    <span>Remember me</span>    
                                </span>
                                <a href="#" class="btn btn-medium btn-dark-gray d-block margin-20px-bottom">Login</a>
                                <p class="text-end"><a href="#" class="btn btn-link  btn-medium text-extra-dark-gray margin-20px-bottom">Lost your password?</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <div class="col-md-12">
                        <!-- start tab content -->
                        <div class="bg-transparent">
                            <div class="d-sm-flex justify-content-center align-items-center text-center">
                                <i class="feather icon-feather-scissors text-fast-blue margin-10px-right"></i>
                                <span class="text-extra-dark-gray alt-font">Have a coupon?&nbsp;</span><a class="accordion-toggle text-extra-dark-gray text-decoration-underline" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#collapseTwo"><span class="alt-font">Click here to enter your code</span></a>
                            </div>
                            <div id="collapseTwo" class="collapse">
                                <div class="w-40 mx-auto margin-4-half-rem-tb text-start lg-w-50 sm-w-100">
                                    <label class="margin-15px-bottom">If you have a coupon code, please apply it below. <span class="text-radical-red">*</span></label>
                                    <input class="small-input margin-25px-bottom" type="text" placeholder="Enter coupon code">
                                    <a href="#" class="btn btn-medium btn-dark-gray d-block margin-20px-bottom">Apply coupon</a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> --}}
        <!-- start section -->
        <section class="pt-20 wow animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 padding-70px-right lg-padding-40px-right md-padding-15px-right">
                        <span class="alt-font text-large text-extra-dark-gray margin-40px-bottom d-inline-block font-weight-500">Personal Information</span>
                        <form class="">
                            <div class="row">
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Email<span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="email" name="email" placeholder="Your Email Address" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Your Name <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="text" name="student_name" placeholder="Enter Your Name" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Father Name <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="text" name="father_name" placeholder="Enter Father Name" required>
                                </div>  
                                
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Date of Birth <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="date" name="date_of_birth" required>
                                </div> 
                                
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">CNIC # <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="number" name="cnic_no" placeholder="with out - " required>
                                </div> 

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Parmanent Address<span class="text-radical-red"> *</span></label>
                                    <textarea class="medium-input" rows="2" cols="5" name="address" required placeholder="Your Address as Per CNIC"></textarea>
                                </div>

                                {{-- <div class="col-12 margin-10px-bottom">
                                    <label class="margin-15px-bottom" for="contry">Country <span class="text-radical-red">*</span></label>
                                    <select name="contry" id="contry" class="small-input">
                                        <option>Select a country</option>
                                        <option value="Afganistan">Afghanistan</option>
                                    </select>
                                </div> --}}
                                
                            </div>
                        </form>
                    </div>


                    <div class="col-12 col-lg-12 col-md-12 padding-70px-right lg-padding-40px-right md-padding-15px-right">
                        <span class="alt-font text-large text-extra-dark-gray margin-40px-bottom d-inline-block font-weight-500">Madrassah Education</span>
                        <div class="row">
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Aalmiyyah (Total No)                                        <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="number" name="total_marks" placeholder="Your Answer" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Obtained Marks <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="number" name="obtained_marks" placeholder="Your Answer" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Percentage <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="text" name="percentage" placeholder="Percentage 100%" required>
                                </div>  
                                
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Madrassah <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="text" name="madrassah" required>
                                </div> 
                                
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom" for="contry">Board <span class="text-radical-red">*</span></label>
                                    <select name="board" id="board" class="small-input">
                                        <option>Select a Board</option>
                                        <option value="وفاق المدارس العربیہ پاکستان">وفاق المدارس العربیہ پاکستان</option>
                                        <option value="وفاق المدارس السلفیہ">وفاق المدارس السلفیہ</option>
                                        <option value="تنظیم المدارس">تنظیم المدارس</option>
                                        <option value="رابطۃ المدارس">رابطۃ المدارس</option>
                                        <option value="اتحاد تنظیمات مدارس دینیہ">اتحاد تنظیمات مدارس دینیہ</option>
                                        <option value="تبلیغی مدارس اور اس کی شاخیں">تبلیغی مدارس اور اس کی شاخیں</option>
                                        <option value="جامعۃ الحسنین اور اس کی شاخیں">جامعۃ الحسنین اور اس کی شاخیں</option>
                                        <option value="مجمع العلوم الاسلامیہ">مجمع العلوم الاسلامیہ</option>
                                        <option value="دیگر">دیگر</option>
                                    </select>
                                </div>
                            </div>
                    </div>

                    
                    
                    
                    <div class="col-12 col-lg-12 col-md-12 padding-70px-right lg-padding-40px-right md-padding-15px-right">
                        <span class="alt-font text-large text-extra-dark-gray margin-40px-bottom d-inline-block font-weight-500">Contemporary Education</span>
                        <div class="row">
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Bachelors (BA/BS) Obtained Marks <span class="text-radical-red"> *</span></label>                                      <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="number" name="backelors_obtained_marks" placeholder="Your Answer" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Percentage <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="text" name="percentage" placeholder="Percentage 100%" required>
                                </div>  
                                
                                <div class="col-md-12 margin-10px-bottom">
                                    <label class="margin-15px-bottom">University/Board <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="text" name="board_university_name" required placeholder="University/Board Name">
                                </div> 

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Master (MA) Obtained Marks</label>                                      <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="number" name="master_obtained_marks" placeholder="Your Answer" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Percentage</label>
                                    <input class="small-input" type="text" name="master_percentage" placeholder="Percentage 100%" required>
                                </div>  
                                
                                <div class="col-md-12 margin-10px-bottom">
                                    <label class="margin-15px-bottom">University </label>
                                    <input class="small-input" type="text" name="university_name" placeholder="University Name">
                                </div> 

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Optional</label>
                                    <input class="small-input" type="text" name="optional" placeholder="Your Skills or any other degree">
                                </div> 
                                
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom" for="contry">Board <span class="text-radical-red">*</span></label>
                                    <select name="board" id="board" class="small-input" required>
                                        <option value="">Select a Board</option>
                                        <option value="Good">Good</option>
                                        <option value="Very Good">Very Good</option>
                                        <option value="Excellent">Excellent</option>
                                    </select>
                                </div>
                            </div>
                    </div>



                    <div class="col-12 col-lg-12 col-md-12 padding-70px-right lg-padding-40px-right md-padding-15px-right">
                        <span class="alt-font text-large text-extra-dark-gray margin-40px-bottom d-inline-block font-weight-500">Questions</span>
                        <div class="row">
                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Whether you are employed or doing any business? If yes, then details please? <span class="text-radical-red"> *</span></label> 
                                    <input class="small-input" type="text" name="question_1" placeholder="Your Answer" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom">Will you join this program as full time student or part time? <span class="text-radical-red"> *</span></label>
                                    <input class="small-input" type="text" name="question_1" placeholder="Your Answer" required>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom" for="contry">Do you want to avail scholarship or not? <span class="text-radical-red">*</span></label>
                                    <select name="board" id="board" class="small-input" required>
                                        <option value="">Select a Board</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Maybe">Maybe</option>
                                    </select>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom" for="contry">I want to avail scholarship with the following facilities? <span class="text-radical-red">*</span></label>
                                    <select name="board" id="board" class="small-input" required>
                                        <option value="">Select a Board</option>
                                        <option value="Food">Food</option>
                                        <option value="Hostel">Hostel</option>
                                        <option value="Waiving off tution fee">Waiving off tution fee</option>
                                        <option value="None of these">None of these</option>
                                        <option value="All facilities">All facilities</option>
                                    </select>
                                </div>

                                <div class="col-md-6 margin-10px-bottom">
                                    <label class="margin-15px-bottom" for="contry">I can afford, I want to pay monthly fee? <span class="text-radical-red">*</span></label>
                                    <select name="board" id="board" class="small-input" required>
                                        <option value="">Select a Board</option>
                                        <option value="500 to 1000">500 to 1000</option>
                                        <option value="1000-3000">1000-3000</option>
                                        <option value="3000-5000">3000-5000</option>
                                        <option value="5000-10,000">5000-10,000</option>
                                        <option value="None of these">None of these</option>
                                    </select>
                                </div>

                               
                            </div>
                    </div>




                </div>
            </div>
        </section>
        <!-- end section -->

@endsection