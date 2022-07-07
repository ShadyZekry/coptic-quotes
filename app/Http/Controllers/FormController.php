<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Tag;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getForm()
    {
        return view('form', [
            'authors' => Author::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function postForm()
    {
    }
}
