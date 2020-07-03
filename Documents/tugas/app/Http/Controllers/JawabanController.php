<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\QuestionModel;
// use Illuminate\Http\Request;

class JawabanController extends Controller
{
  public function index($id){
    return view('jawaban');
  }

  public function store(Request $request){
    $new_item = QuestionModel::save($request->all());
    return redirect('/pertanyaan');
  }

  public function index(){
    // $items = ItemModel::get_all();
    // return view('item.index', compact('items'));
    return view('index');
  }
}
