@extends('user.default')

@section('title')
    HR systems
@endsection
@section('css')
    <style>
        body{
            font-size: large;
        }
        .navigation-menu {
            float: right;
        }

        .RTL {
            float: right;
            direction: rtl;

        }
        th{
            text-align: center;
        }


    </style>
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">
            <br>
            <br>

            <div class="container">
            <div class="row">
                <div class=" card-box col-sm-8 offset-5">
                    <div>
                        <img src="image/profile.png">
                    </div>
                    <div class="table-responsive RTL">
                        <h1>معلومات شخصيه</h1>
                        </hr>
                        <strong> <label class="RTL">الاسم</label><p >  :{{Auth::user()->employ->name}}  </p>

                            <label class="RTL">اسم الام</label><p >  :{{Auth::user()->employ->mother}}  </p>
                            <strong> <label class="RTL">التحصيل الدراسي </label><p >  :{{Auth::user()->employ->stduy}}  </p>
                                <label class="RTL"> السكن الحالي</label><p >  :{{Auth::user()->employ->address}}  </p>
                                <label class="RTL">محل الولاده </label><p >  :{{Auth::user()->employ->b_address}}  </p></strong>

                            <label class="RTL">رقم الهاتف </label><p >  :{{Auth::user()->employ->moblie}}  </p></strong>

                        <label class="RTL">محل الولاده </label><p >  :{{Auth::user()->employ->b_address}}  </p></strong>




							   <div class="m-t-30">




								
                            </div>
							
							
								 <div class="m-t-30">
                                     <label class="RTL">نوع الوظيفه</label><p >  :{{Auth::user()->employ->job_type}}  </p>

								
								
								
                            </div>
						
								<br>
							<br>
							<br>
							<br>
                    </div>


            </div>
            </div>
            <div class="row">



                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h1 class="m-t-0 header-title RTL"><b>معلوماتك الخاصه بلوضيفه</b></h1>

                        <br>
                        <br>
                        <br>
                        <table id="datatable" class="table table-striped table-bordered RTL text-center">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                            
                                <th>العلاوات</th>
                                <th>العقوبات</th>
                                <th>تاريخ المباشره</th>
                                <th>تاريخ  اول التعين</th>

                                <th>الاجازات</th>
							
                            </tr>
                            </thead>


                            <tbody>

                            <tr>
                            <td>{{Auth::user()->employ->name}} </td>
                      
                                <td>10%</td>
                                <td>{{Auth::user()->employ->alert}}</td>
								 <td>{{Auth::user()->employ->direct_date}}</td>
                                <td>{{Auth::user()->employ->work_date}}</td>
                                <td>15</td>
                            </tr>





                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end row -->

                <br>
                <div class="row">



                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h1 class="m-t-0 header-title RTL"><b>معلومات ادرايه</b></h1>

                            <br>
                            <br>
                            <br>
                            <table id="datatable" class="table table-striped table-bordered RTL text-center">
                                <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>سنوات الخدمه</th>

                                    <th>العقوبات</th>
                          

                                </tr>
                                </thead>


                                <tbody>

                                <tr>
                                    <td>{{Auth::user()->employ->name}} </td>
                                    <td>15</td>

                                    <td>{{Auth::user()->employ->alert}}</td>
                                 

                                </tr>





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
        </div>
    </div>

@endsection