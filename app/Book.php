<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * @var array
     */

    protected $fillable = [
        'title', 'release_date', 'author_id', 'created_at', 'updated_at',
    ];

    public function company() {
        return $this->belongsTo('App\Author');
    }
}
