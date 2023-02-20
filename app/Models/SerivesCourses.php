<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SerivesCourses extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name', 'notes'];
    protected $fillable = [
        'name',
        'notes',
        'course_id',
        'status',
    ];


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
