<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::input($data);
        if($pertanyaan){
            return redirect('/pertanyaan');
        }
    }

    public function edit($id){
        $data = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('data'));
    }

    public function update($id, Request $request){
        $data = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $deleted = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
