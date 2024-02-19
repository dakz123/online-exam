<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
   public function index(Request $request){
    $quiz=Question::with('answers')->find(1);
  
    return view('quiz',['quiz'=>$quiz]);
   }
}
