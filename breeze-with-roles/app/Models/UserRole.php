<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = "user_role";

    protected $fillable = [
        "user_id",
        "role_id"
    ];

    public function user() : BelongsTo
    {
        return $this->BelongsTo(User::class,'user_id','id');
    }

    public function role() : BelongsTo
    {
        return $this->BelongsTo(Role::class,'role_id','id');
    }
}
