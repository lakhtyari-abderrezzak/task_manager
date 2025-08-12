<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    public function tasks(){
        $this->hasMany(Task::class, 'list_id');
    }
    public function user(){
        $this->belongsTo(User::class, 'user_id');
    }
}
