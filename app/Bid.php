<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'project_id', 'author_id', 'price', 'comment'
    ];
}
