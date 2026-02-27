<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorTransaction extends Model

{
    public $timestamps = false;



    protected $fillable = [
        'vendor_id',
        'transaction_date',
        'status',
        'description',
        'amount',
        'notes',
    ];
      public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

}