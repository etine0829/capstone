<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "event";

    protected $fillable =[
        'event_id',
        'event_name',
        'event_date',
        'venue',
        'type_of_scoring'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
