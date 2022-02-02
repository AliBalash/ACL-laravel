<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'permission'
    ];

    protected $table = 'roles';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }



}
