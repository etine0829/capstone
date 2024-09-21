<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Event;


class participant extends Model
{
    use HasFactory;

    protected $table = "participant";

    protected $fillable =[
        'event_id',
        'picture',
        'f_name',
        'l_name',
        'm_name',
        'gender',
        'comment',
        'department'

        
    ];
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}

