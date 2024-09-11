<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;


class Criteria extends Model
{
    use HasFactory;

    protected $table = "Criteria";

    protected $fillable =[
        'category_id',
        'criteria_id',
        'criteria_name',
        'criteria_score',
    
        
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

