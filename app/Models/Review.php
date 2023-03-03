<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'title',
        'link',
    ];

    public function application(){
        return $this->belongsToMany(Application::class, 'application_review', 'review_id', 'application_id');
    }
}
