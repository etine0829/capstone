<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Event;


class Category extends Model
{
    use HasFactory;

    protected $table = "event";

    protected $fillable =[
        'event_id',
        'category_id',
        'category_name',
        
    ];
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}

