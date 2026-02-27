<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
   protected $fillable = [
    'asset_name',
    'category_id',
    'asset_tag_prefix',
    'asset_tag',
    'serial_number',
    'model_brand',
    'specifications',
    'vendor_id',
    'purchase_date',
    'purchase_price',
    'warranty_expiry',
    'location_id',
    'assigned_user_id',
    'condition_status',
    'lifecycle_status',
    'photo_path',
    'notes',
    
     // ✅ QR
    'qr_code_uuid','qr_path','qr_generated_at',
];
}