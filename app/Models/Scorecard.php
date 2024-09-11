<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\participant;
use \App\Models\Category;
use \App\Models\Criteria;


class Scorecard extends Model
{
    use HasFactory;

    protected $table = "scorecard";

    protected $fillable =[
        'participant_id',
        'category_id',
        'criteria_id',
        'scorecard_id'
        
    ];
    public function participant()
    {
        return $this->belongsTo(Participant::class, 'participant_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, foreignKey: 'category_id');
    }
    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'criteria_id');
    }
}

