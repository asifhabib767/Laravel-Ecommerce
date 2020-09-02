<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function project()
    {
        return $this->belongsTO(Project::class);
    }
}
