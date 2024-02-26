<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const IS_ADMIN = 1;
    const IS_SUPPORT = 2;
    const IS_DEV = 3;
    const IS_FINANCES = 4;
    const IS_COMMERCIAL = 5;
    const IS_MARKETING = 6;
}
