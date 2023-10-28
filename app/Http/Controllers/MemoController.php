<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{

    public function index()
    {
        $memos = Memo::all();
        return view('memos.index', ['memos' => $memos]);
    }
    
    public function show($id)
    {
        $memo = Memo::find($id);
        return view("memos.show", ["memo" => $memo]);
    }
}
