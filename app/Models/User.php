<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Hiker\Models\User as HikerUser;
use Illuminate\DatabAse\Eloquent\Factories\HasFactory;

class User extends HikerUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
}
