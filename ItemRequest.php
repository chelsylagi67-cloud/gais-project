<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemRequest extends Model
{
    protected $table = 'item_requests';

    protected $fillable = [
        'user_id',
        'inventories_id',
        'quantity',
        'reason',
        'status',
        'approved_by',
        'approved_at',
        'request_datetime'
    ];

    protected $casts = [
        'request_datetime' => 'datetime',
        'approved_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

 public function inventory()
{
    return $this->belongsTo(Inventory::class, 'inventories_id', 'id');
}


    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
