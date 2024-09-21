<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";

    protected $fillable = [
        'event_id',
        'category_name',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    // public function event()
    // {
    //     return $this->belongsTo(Event::class, 'event_id');
    // }
    public function criteria()
{
    return $this->hasMany(Criteria::class);
}
}
