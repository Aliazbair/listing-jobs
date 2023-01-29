<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags', 'logo', 'user_id'];

    public static function search($search)
    {
        return empty($search) ? static::query() : static::query()->where('id', 'like', '%' . $search . '%')->orWhere('title', 'like', '%' . $search . '%');
    }
}
