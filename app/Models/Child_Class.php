<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Child_Class extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'class_id',
        'child_id',

    ];
    public function children()
    {
        return $this->belongsTo(Children::class);
    }


    public function kider_classes()
    {
        return $this->belongsTo(kider_classes::class);
    }
    }
