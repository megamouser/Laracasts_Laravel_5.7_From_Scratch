<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($description)
    {

        dump($this->id);
        dump(request('description'));
        
        // Task::create([
        //     'project_id' => $this->id,
        //     'description' => request('description')
        // ]);
    }
}



