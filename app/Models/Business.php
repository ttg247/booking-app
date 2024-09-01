<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'name',
        'address',
        'phone',
        'email',
    ];

    /**
     * Get the user that owns the business.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // You can also define other relationships here, like services, bookings, etc.

}
