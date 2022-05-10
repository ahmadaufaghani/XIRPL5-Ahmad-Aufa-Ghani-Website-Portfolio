<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $fillable = [
        'projek_selesai',
        'client_senang',
        'review_positif',
        'skill_html',
        'skill_css',
        'skill_javascript',
        'skill_php',
    ];
}
