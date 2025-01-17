<?php
namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use App\Models\Purchase;  
use App\Models\Customer;  

class PurchaseController extends Controller  
{  
    public function create()  
    {  
        // Untuk menampilkan form, bisa juga menampilkan daftar customer agar user memilih  
        $customers = Customer::all();  
        return view('purchases.create', compact('customers'));  
    }  

    public function store(Request $request)  
    {  
        // Validasi singkat  
        $request->validate([  
            'CUSTOMER_ID' => 'required',  
            'PURCHASE_DATE' => 'required|date',  
            'TOTAL_PRICE' => 'required|numeric'  
        ]);  

        Purchase::create([  
            'CUSTOMER_ID'   => $request->CUSTOMER_ID,  
            'PURCHASE_DATE' => $request->PURCHASE_DATE,  
            'TOTAL_PRICE'   => $request->TOTAL_PRICE  
        ]);  

        return redirect()->route('purchases.create')->with('success', 'Transaksi berhasil disimpan');  
    }  
}