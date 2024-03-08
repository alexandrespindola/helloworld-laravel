<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // protected $table = 'notes';

    protected $fillable = [
        'title',
        'description',
        'done'
    ];

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'done' => 'boolean'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}

/*

$note = new Note();
$note->title = 'My first note';
$note->description = 'This is my first note';
$note->save();

*/
