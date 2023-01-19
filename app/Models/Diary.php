<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Diary extends Model
{
    use HasFactory;
    protected $table = 'diaries';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'msg'];

    protected $appends = [
        'display_date'
        ];

    public function getDisplayDateAttribute()
        {
            $date = Carbon::parse($this->created_at);
            return $date->isoFormat('LL');
        }
}
