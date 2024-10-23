<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagController extends Model
{
    use HasFactory;

    public function __invoke(Tag $tag)
    {
        return view('results', ['jobs' => $tag->jobs]);
    }
}
