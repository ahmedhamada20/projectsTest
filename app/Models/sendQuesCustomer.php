<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendQuesCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'customer_id',
        'exam_id',
        'text',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }

}
