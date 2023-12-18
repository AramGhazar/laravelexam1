<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'created_by', 'assigned_to', 'status', 'description'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
