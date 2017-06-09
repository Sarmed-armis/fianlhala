<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user as userModel;
use App\Employ as employModel;


class addUserController extends Controller
{


    public function index(){


        $employs= employModel::paginate(5);

        return view('admin.user.user',compact('employs'));
    }


    
    public function add(Request $request)
    {
        $user = new userModel;
        $employ=new employModel;

        if ($request->ajax()) {

            $user->name = $request->input('Name');
			  $user->email = $request->input('email');

            $user->password = bcrypt($request->input('Password'));

            $user->save();

            $id = $user->id;



$employ->user_id=$id;

$employ->name=userModel::find($id)->name;



            $employ->history=1;

            $employ->zojea="غير محدث";

            $employ->moblie=000;

            $employ->age=20;

            $employ->book=1;

            $employ->alert='لاتوجد عقوبات';

            $employ->stduy="لم يرسل شهادته";

            $employ->address="قيد التحضير";

            $employ->b_address="قيد التحضير";

            $employ->sex="قيد التحضير";

            $employ->work_date="لم يرسل امر التعين";

            $employ->sinetafic_name="لم يرسل شهادته";

            $employ->work_status="موضف";
            $employ->mother="لم يرسل";


            $employ->workplace="لم يرسل";
            $employ->direct_date="لم يرسل";
            $employ->job_type="لم يرسل";
            $employ->save();

        }

        return 'done';

    }
}
