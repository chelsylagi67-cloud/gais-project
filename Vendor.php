<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
protected $fillable = [
    'name',
    'vendor_type',
    'contact_person',
    'phone',
    'email',
    'contract',
    'notes',
];
public function transactions()
{
    return $this->hasMany(VendorTransaction::class);
}
}
