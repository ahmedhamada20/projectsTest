<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SettingSite extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name','notes'];

    protected $fillable = [
        'name',
        'status',
        'phone',
        'email',
        'notes',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'YouTube',
        'Fax',
        'url',
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
