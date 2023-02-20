<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcripeCorses extends Model
{
    use HasFactory;

    protected $appends = ['image'];
    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/SubcripeCorses/' . $this->id .'/'.$this->photo->Filename ) : null;
    }


    protected $fillable  = [
        'customer_id',
        'course_id',
        'status',
        'exam',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
