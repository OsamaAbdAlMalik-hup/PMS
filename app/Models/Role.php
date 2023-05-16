<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    const ROLE_OWNER = 1;
    const ROLE_Supplier = 2;
    const ROLE_Employee = 3;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
