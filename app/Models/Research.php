<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'author',
        'content'
    ];

    public function diseaseType() {
        $this->belongsTo(DiseaseType::class);
    }
}