<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id', 'name', 'email', 'amount', 'status', 'order_id'
    ];
    public $incrementing = false;

    public function course()
    {
        return $this->belongsTo(Course::class, 'courses_id', 'id');
    }
}
