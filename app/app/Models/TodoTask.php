<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoTask extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description'
    ];

    public function creator() {
        return $this->hasOne(User::class);
    }

    public function assignedTo() {
        return $this->hasMany(User::class);
    }
}
