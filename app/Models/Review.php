<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $table='review';
    protected $guarded =['id'];
    protected $dates = ['date'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
