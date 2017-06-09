@extends('user.default')

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


    </style>
@endsection
@section('content')

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">

    <div class="account-bg">
        <div class="card-box m-b-0">
            <div class="text-xs-center m-t-20">
                <a href="index.html" class="logo">
                    <i class="zmdi zmdi-group-work icon-c-logo"></i>
                    <span>كليه علوم الحاسبات</span>
                </a>
            </div>
            <div class="m-t-30 m-b-20">
                <div class="col-xs-12 text-xs-center">
                    <h6 class="text-muted text-uppercase m-b-0 m-t-0">الدخول</h6>
                </div>
                <form class="form-horizontal m-t-20" method="post" action="{{action('loginController@index')}}">

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="البريد الالكتروني" id="name" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="كلمه المرور" id="password" name="password">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">  دخول</button>
</form>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">

                        </div>
                    </div>
    </div>
</div>




@endsection
@section('js')
    <script>
$(document).ready(function () {
  $('#send').on('click',function(){
var name=$('#name').val();

var password=$('#password').val();
var token = $("#token").val();

if(name=='' || password==''){
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
        url: 'login',
        data: {
            name: name,

            password: password,

            _token: token
        },
        success: function (msg) {
            console.log(msg);
            Command: toastr["error"](msg, "")

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



        },
        error: function (msg) {
            console.log(msg.responseText)
        }
    });
}



  });//end of send function
});



    </script>
@endsection