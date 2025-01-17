<?php
namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use App\Models\Customer;  
use Illuminate\Support\Facades\DB;

class ReportController extends Controller  
{  
    public function index()  
    {  
        return view('report.index');  
    }  

    public function data(Request $request)  
    {  
        // Query total pembelian per customer  
        // Menggunakan join atau relationship  
        $query = Customer::select(  
            'customers.CUSTOMER_ID',  
            'customers.CUSTOMER_NAME',  
            'customers.CUSTOMER_EMAIL',  
            'customers.CUSTOMER_PHONE',  
            'customers.CUSTOMER_ADDRESS',  
            DB::raw('COALESCE(SUM(purchases.TOTAL_PRICE), 0) as total_belanja')  
        )  
        ->leftJoin('purchases', 'customers.CUSTOMER_ID', '=', 'purchases.CUSTOMER_ID')  
        ->groupBy('customers.CUSTOMER_ID');  

        // Implementasi server-side DataTables  
        // Tergantung plugin DataTables, misalnya:  
        if ($request->ajax()) {  
            return datatables()->eloquent($query)  
                ->toJson();  
        }  
    }  
}