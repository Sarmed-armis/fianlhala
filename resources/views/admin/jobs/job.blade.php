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


    </style>
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title RTL">
                        <button type="button" id="addjobs" class="btn btn-success waves-effect waves-light">اضف وضيفه جديده</button>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="p-20">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                <th>عدد الموضفين</th>
                                    <th>التفاصيل</th>
                                    <th>اسم الوضيفه</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                <tr>

                                    <td>{{$job->numVecance}}</td>
                                    <td>{{ $job->detials}}</td>
                                    <td>{{ $job->name}}</td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade RTL" id="jobModel" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close RTL" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">اضافه وضيفه</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">الاسم </label>
                            <input type="text" class="form-control" id="job" placeholder="الاسم">
                        </fieldset>


                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">تفاصيل</label>
                            <input type="text" class="form-control" id="details" placeholder="تخصص">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">عدد الموضفين</label>
                            <input type="text" class="form-control" id="numbers" placeholder="5">
                        </fieldset>



                        <input type="hidden" id="token" value="{{ csrf_token() }}">

                    </form>

                    <button id="Add_jobs" class="btn btn-primary">اتمام الاضافه</button>
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
   $('#addjobs').on('click',function () {
    $('#jobModel').modal('show');

$('#Add_jobs').on('click',function () {
    var job = $("#job").val();
    var details = $("#details").val();
    var numbers = $("#numbers").val();
    var token  = $("#token").val();


    if (numbers== '' || details =='' || job=='') {

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
            url: '/job/add',
            data: {
                job: job,
                details:details,
                numbers:numbers,
                _token: token
            },
            success: function (msg) {
                Command: toastr["success"]("لقد قمت بضافه وضيفه جديده جديد ", "تم الاضافه")

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

                $('#jobModel').modal('toggle');
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


});

    </script>
@endsection