<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\QuestionModel;
class PertanyaanController extends Controller
{
  public function create(){
    return view('form');
  }

  public function store(Request $request){
    $new_item = QuestionModel::save($request->all());
    return redirect('/pertanyaan');
  }

  public function index(){
    $items = QuestionModel::get_all();
    // dd($question);
    return view('index', compact('question'));
    // return view('index');
  }
}
