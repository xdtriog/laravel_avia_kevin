<?php
namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  

class Customer extends Model  
{  
    use HasFactory;  
    protected $table = 'customers';  
    protected $primaryKey = 'CUSTOMER_ID';  
    public $timestamps = false; // jika tabel tidak memiliki kolom timestamps  

    protected $fillable = [  
        'CUSTOMER_NAME',  
        'CUSTOMER_EMAIL',  
        'CUSTOMER_PHONE',  
        'CUSTOMER_ADDRESS'  
    ];  

    public function purchases()  
    {  
        return $this->hasMany(Purchase::class, 'CUSTOMER_ID', 'CUSTOMER_ID');  
    }  
}