<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
       protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function user() {
    return $this->belongsTo(User::class); // الأدمن الذي أنشأ التقرير
}

}
