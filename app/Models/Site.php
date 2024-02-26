<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Site extends Model
{
    use HasFactory;
    public $status;

    protected $fillable = [
        'name',
        'url',
        'type',
        'active'
    ];

    public static function getPossibleTypes()
    {
        $type = DB::select(DB::raw('SHOW COLUMNS FROM sites WHERE Field = "type"'))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $values = array();
        foreach (explode(',', $matches[1]) as $value) {
            $values[] = trim($value, "'");
        }
        return $values;
    }
}
