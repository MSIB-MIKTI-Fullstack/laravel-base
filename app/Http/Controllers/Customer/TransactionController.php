<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function index()
    {
        return view('customers.transaction');
    }

    public function datatable(Request $request)
    {
        $data = Transaction::all();

        return DataTables::of($data)->toJson();
    }
}
