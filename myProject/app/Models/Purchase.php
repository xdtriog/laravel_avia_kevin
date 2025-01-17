<?php
namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  

class Purchase extends Model  
{  
    use HasFactory;  
    protected $table = 'purchases';  
    protected $primaryKey = 'PURCHASES_ID';  
    public $timestamps = false;  

    protected $fillable = [  
        'CUSTOMER_ID',  
        'PURCHASE_DATE',  
        'TOTAL_PRICE'  
    ];  

    public function customer()  
    {  
        return $this->belongsTo(Customer::class, 'CUSTOMER_ID', 'CUSTOMER_ID');  
    }  
}