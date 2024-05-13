<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Service\UploadFileService;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function __construct(public UploadFileService $uploadFileService)
    {
    }

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
