<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes, HasFactory;
    
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'birthday'
    ];
    // protected $guarded = [];

    public function fulName()
    {
        return $this->lastname . " " . $this->firstname . " " .$this->middlename;
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

}
