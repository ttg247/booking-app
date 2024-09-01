<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    use HasFactory;protected $fillable = [
        'name',
        'description',
        'price',
        'business_id',
    ];

    /**
     * Get the business that owns the service.
     */
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
