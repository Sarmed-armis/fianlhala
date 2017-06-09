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
                        <h1>معلومات العامه</h1>
                        <br>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="p-20">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th></th>

                                            <th>العمر</th>

                                            <th>الحاله الزوجيه</th>
                                            <th>الدراسه</th>
                                            <th>الاسم</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($emlpoys as $emlpoy)
                                            <tr>
                                                <td>
                                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                    <button type="button" id="{{$emlpoy->id}}"
                                                            class="btn btn-dark waves-effect waves-light Details">التفاصيل
                                                    </button>
                                                </td>

                                                <td>{{$emlpoy->age}}</td>

                                                <td>{{$emlpoy->zojea}}</td>
                                                <td>{{$emlpoy->stduy}}</td>
                                                <td>{{$emlpoy->name}}</td>


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
    </div>
    </div>

    <div class="modal fade RTL" id="showModel" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close RTL" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">عرض التفاصيل</h4>
                </div>
                <div class="modal-body">

                    <label>الاسم </label><p id="name"></p>
                    <hr>
                    <label>كتب الشكر:</label> <p id="book"></p>
                    <hr>
                    <label>سنوات الخدمه</label> <p id="history"></p>
                    <hr>
                    <label>التحصيل الدراسي</label> <p id="stduy"></p>

                    <label>الحاله الزوجيه</label> <p id="zojea"></p>
                    <hr>
                    <label>رقم الهاتف</label> <p id="moblie"></p>
                    <hr>
                    <label>العقوبات</label> <p id="alert"></p>



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
$('body').on('click','.Details',function () {
var token=$('#token').val();

var ID=$(this).attr('id');
    $.ajax({
        type: "POST",
        url: 'employ/show',
        data: {
            id: ID,

            _token: token
        },
        success: function (msg) {
            console.log(msg);

            $('#book').text(msg.book);
            $('#history').text(msg.history);
            $('#stduy').text(msg.stduy);
            $('#zojea').text(msg.zojea);
            $('#name').text(msg.name);
            $('#moblie').text(msg.moblie);
            $('#alert').text(msg.alert);


            $('#showModel').modal('show');

        },
        error: function (msg) {
            console.log(msg);
        }
    });

});
});

    </script>
@endsection