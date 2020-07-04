<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pertanyaan;
use App\Models\jawaban;

class JawabanController extends Controller
{
    public function index($pertanyaan_id){
    	$data = Jawaban::get_id($pertanyaan_id);
    	return view('content.jawab.index',compact('data'));
    }

    public function store(Request $request, $pertanyaan_id){
		// dd($req->all(),$pertanyaan_id);die;
		// dd($request->all());die;
		// $comment_at = time();
		$simpan = Jawaban::save($request->all(),$pertanyaan_id);
    	return redirect('pertanyaan');
    }
}