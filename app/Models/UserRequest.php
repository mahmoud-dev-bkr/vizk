<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    use HasFactory;
    protected $table = 'user_requests';

    protected $fillable = [
        'name',
        'phone',
        'type',
        'email',
        'course_id',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
