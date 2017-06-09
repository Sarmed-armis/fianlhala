<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employ as employModel;


class empployController extends Controller
{
 public function  index(){
$emlpoys= employModel::all();

     return view('admin.employ.employ',compact('emlpoys'));
 }



 public function show (Request $request){

     if($request->ajax()){
         $result=employModel::findOrFail($request->input('id'));


     }

     return $result;


 }


 public  function alert(Request $request){
  employModel::where('id',$request->input('name'))->update(['alert'=>$request->input('alert')]);

  return 'success';





 }
 public function edit(Request $request){



if($request->input('name')==''){

return $emlpoys= employModel::find($request->input('id'));



}

else{

$emlpoy=employModel::find($request->input('id'));
$emlpoy->name=$request->input('name');

$emlpoy->history=$request->input('servies');
$emlpoy->zojea=$request->input('zojea');
$emlpoy->age=$request->input('age');
$emlpoy->moblie=$request->input('number');
$emlpoy->stduy=$request->input('stduy');
$emlpoy->book=$request->input('book');
    $emlpoy->sex=$request->input('sex');
    $emlpoy->address=$request->input('address');
    $emlpoy->b_address=$request->input('b_address');
    $emlpoy->work_date=$request->input('work_date');


    $emlpoy->mother=$request->input('mother');
    $emlpoy->workplace='لم يرسل بعد';

    $emlpoy->direct_date=$request->input('direct_date');
    $emlpoy->job_type=$request->input('job_type');


$emlpoy->save();



}





 }
}
