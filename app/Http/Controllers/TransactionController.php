<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function index(){
        return view('customers.transaction');
    }

    public function datatable(Request $request){
        $data = Transaction::all();
        return DataTables::of($data)->toJson();
    }
}
