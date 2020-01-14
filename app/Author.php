<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'age', 'address', 'created_at', 'updated_at',
    ];

    public function jobs()
    {
        return $this->hasMany('App\Book');
    }
}
