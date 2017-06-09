@extends('layouts.admin.default')

@section('title')
    HR systems
@endsection
@section('css')
    <style>
        .navigation-menu {
            float: right;
        }

        .RTL {
            float: right;
            direction: rtl;

        }
        body{
            font-size: 25px;
            float: right;
            direction: rtl;


        }


    </style>
@endsection

@section('content')

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title RTL">
                        <button type="button" id="addUser" class="btn btn-success waves-effect waves-light">اضافه موظف
                            جديد
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box ">
                    <h1 class="page-title RTL">اضافه تفاصيل للموظف</h1>
                </div>
            </div>
        </div>
    </div>



<div class="container">
                            <div class="row ">
                            @foreach($employs as $employ)
                            <div class="col-lg-12">
                                <div class="card card-block">
                                    <h3 class="card-title"><label>اسم الموظف</label>  {{$employ->name}}</h3>
                                    <p class="card-text">  <label>اسم الام</label> {{$employ->mother}}</p><br>
                                    <p class="card-text">    <label>التحصيل الدراسي</label> {{$employ->stduy}}</p><br>
                                    <label>الحاله الزوجيه</label> {{$employ->zojea}}<br>


                                    <p class="card-text">  <label>سنوات الخدمه</label> {{$employ->history}}</p><br>
                                    <p class="card-text">  <label>محل الولاده</label> {{$employ->b_address}}</p><br>
                                    <p class="card-text">  <label>السكن الحالي</label> {{$employ->address}}</p><br>
                                    <p class="card-text">  <label>تاريخ التعين</label> {{$employ->work_date}}</p><br>
                                    <p class="card-text">  <label>نوع الوظيفه</label> {{$employ->job_type}}</p><br>
                                    <p class="card-text">  <label>العقوبات</label> {{$employ->alert}}</p><br>
                                    <button type="button" id="{{$employ->id}}"
                                            class="btn btn-danger  waves-effect waves-light userinfo">اضافه تفاصيل
                                    </button>
                                </div>

                            </div>
                            @endforeach
                                {{$employs->links()}}
                    </div>
                </div>



    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h1 class="page-title ">توجيه عقوبه</h1>

                    <form>
                        <fieldset class="form-group">
                            <label for="exampleSelect1">الاسم</label>
                            <select class="form-control" id="name2">
                                @foreach($employs as $employ)
                                <option value="{{$employ->id}}">{{$employ->name}}</option>
                            @endforeach
                            </select>
                        </fieldset>



                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">العقوبه</label>
                            <input type="text" class="form-control" id="alert" placeholder="العقوبه">
                        </fieldset>


                        <input type="hidden" id="token" value="{{ csrf_token() }}">

                    </form>
                    <button type="button" id="addalert" class="btn btn-primary waves-effect waves-light">اضافه
                    </button>
                </div>
            </div>
        </div>
    </div>

                    <div class="modal fade RTL" id="UserModel" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close RTL" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">اضافه موظف</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">الاسم </label>
                            <input type="text" class="form-control" id="user_name" placeholder="الاسم">
                        </fieldset>


                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">البريد الالكتروني </label>
                            <input type="text" class="form-control" id="user_email" placeholder="البريد">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">كلمه المرور</label>
                            <input type="password" class="form-control" id="Password" placeholder="كلمه المرور">
                        </fieldset>


                        <input type="hidden" id="token" value="{{ csrf_token() }}">

                    </form>

                    <button id="Add_user" class="btn btn-primary">اتمام الاضافه</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default RTL" data-dismiss="modal">غلق</button>
                </div>
            </div>
        </div>

    </div>



    <div class="modal fade RTL" id="inofModel" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close RTL" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">اضافه معلومات جديده</h4>
                </div>
                <div class="modal-body">
                    <form>

                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">الاسم </label>
                            <input type="text" class="form-control" id="name" placeholder="الاسم">
                        </fieldset>



                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">اسم الام </label>
                            <input type="text" class="form-control" id="mother" placeholder="الاسم الام">
                        </fieldset>



                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">رقم الهاتف </label>
                            <input type="text" class="form-control" id="number" placeholder="رقم الهاتف">
                        </fieldset>


                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">العمر</label>
                            <input type="text" class="form-control" id="age" placeholder="العمر">
                        </fieldset>


                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">الحاله الزوجيه</label>
                            <input type="text" class="form-control" id="zojea" placeholder="الحاله الزوجيه">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">الخدمات</label>
                            <input type="text" class="form-control" id="servies" placeholder="سنوات الخدمه">
                        </fieldset>



                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">الدراسه</label>
                            <input type="text" class="form-control" id="stduy" placeholder="الدراسه">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">كتب الشكر</label>
                            <input type="text" class="form-control" id="book" placeholder="كتب الشكر">
                        </fieldset>





                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">محل الولادة</label>
                            <input type="text" class="form-control" id="b_address" placeholder="محل الولادة">
                        </fieldset>


                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">العنوان الحالي</label>
                            <input type="text" class="form-control" id="address" placeholder="العنوان الحالي">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">الجنس</label>
                            <input type="text" class="form-control" id="sex" placeholder="الجنس">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">تاريخ التعين</label>
                            <input type="date" class="form-control" id="date" placeholder="تاريخ التعين">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">تاريخ المباشره</label>
                            <input type="date" class="form-control" id="direct_date" placeholder="تاريخ المباشره">
                        </fieldset>

                        <h6 class="m-b-20 text-muted">نوع الوظيفه</h6>
                        <select class="c-select" id="job_type">
                            <option   value="اجر يومي" >اجر يومي</option>
                            <option value="عقد">عقد </option>
                            <option value="ملاك دائم">ملاك دائم</option>

                        </select>

                        <input type="hidden" id="token" value="{{ csrf_token() }}">

                    </form>

                    <button id="edit_user" class="btn btn-primary">اتمام الاضافه</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default RTL" data-dismiss="modal">غلق</button>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#addUser').on('click', function () {
                $('#UserModel').modal('show');
                $('#Add_user').on('click', function () {
                    var name = $('#user_name').val();
                    var email = $('#user_email').val();
                    var password = $('#Password').val();
                    var token = $("#token").val();
                    //user_email

                    if (name == '' || password == '' || email=='') {
                        Command: toastr["error"]("الرجاء التأكد من ملاء جميع الحقول", "حدث خطاء")

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-center",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }

                    }
                    else {

                        $.ajax({
                            type: "POST",
                            url: 'user/add',
                            data: {
                                Name: name,
                                email: email,
                                Password: password,

                                _token: token
                            },
                            success: function (msg) {
                                Command: toastr["success"]("تمت اضافه موظف جديد ", "تم الاضافه")

                                toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": false,
                                    "positionClass": "toast-top-center",
                                    "preventDuplicates": false,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                }

                                $('#UserModel').modal('toggle');
                                setTimeout(function () {
                                    window.location.reload();
                                }, 1000);
                            },
                            error: function (msg) {
                                console.log(msg.responseText)
                            }
                        });

                    }

                });


            });

            $('#addalert').on('click',function () {
                var name = $('#name2').val();
                var alert = $('#alert').val();
                var token = $("#token").val();
                if(alert ==''){

                    Command: toastr["error"]("الرجاء التأكد من ملاء جميع الحقول", "حدث خطاء")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }



                }

                else{
                    $.ajax({
                        type: "POST",
                        url: 'employ/alert',
                        data: {
                            name: name,
                            alert: alert,
                            _token: token
                        },
                        success: function (msg) {
                            Command: toastr["success"]("تمت اضافه العقوبه بنجاح", "تم الاضافه")

                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": false,
                                "positionClass": "toast-top-center",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                            setTimeout(function () {
                                window.location.reload();
                            }, 1000);

                        },
                        error: function (msg) {
                            console.log(msg.responseText)
                        }
                    });

                }





            });
        });

        $('body').on('click', '.userinfo', function () {
            var id = $(this).attr('id');






            var token = $("#token").val();
            $('#inofModel').modal('show');


            $.ajax({
                type: "POST",
                url: 'employ/edit',
                data: {
                    id:id,
                    _token: token
                },
                success: function (msg) {


                    var name = $('#name').val(msg.name);

                    var number = $('#number').val();
                    var age = $('#age').val();
                    var zojea = $('#zojea').val(msg.zojea);
                    var servies = $('#servies').val(msg.history);
                    var stduy = $('#stduy').val(msg.stduy);
                    var sex = $('#sex').val();
                    var address = $('#address').val(msg.address);
                    var b_address=$("#address").val(msg.b_address);
                    var work_date=$("#date").val(msg.work_date);
                    var job_type=$("#job_type").val(msg.job_type);
                    var mother=$("#mother").val(msg.mother);
                    var direct_date=$("#direct_date").val(msg.direct_date);




                },


                error: function (msg) {
                    console.log(msg.responseText)
                }



            });

            $('#edit_user').on('click',function () {

                var name = $('#name').val();

                var number = $('#number').val();
                var age = $('#age').val();
                var zojea = $('#zojea').val();
                var servies = $('#servies').val();
                var stduy = $('#stduy').val();
                var book= $('#book').val();
                var sex = $('#sex').val();
                var address = $('#address').val();
                var b_address=$("#address").val();
                var work_date=$("#date").val();
                var job_type=$("#job_type").val();
                var mother=$("#mother").val();
                var direct_date=$("#direct_date").val();


                if(name==""|| number=='' ||age==''||servies==''|| stduy==''){
                    Command: toastr["error"]("الرجاء التأكد من ملاء جميع الحقول", "حدث خطاء")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }

                }

                else{
                    $.ajax({
                        type: "POST",
                        url: 'employ/edit',
                        data: {
                            id:id,
                            name: name,
                            address:address,
                            number:number,
                            age:age,
                            zojea:zojea,
                            servies:servies,
                            stduy:stduy,
                            book:book,
                            sex:sex,
                            b_address:b_address,
                            work_date:work_date,
                            mother:mother,
                            job_type:job_type,
                            direct_date:direct_date,



                            _token: token
                        },
                        success: function (msg) {
                            Command: toastr["success"]("تمت الاضافه بشكل ناجح ", "تم الاضافه")

                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": false,
                                "positionClass": "toast-top-center",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }

                            $('#inofModel').modal('toggle');
                            setTimeout(function () {
                                window.location.reload();
                            }, 1000);
                        },
                        error: function (msg) {
                            console.log(msg.responseText)
                        }
                    });

                }

            });



        });

    </script>

@endsection