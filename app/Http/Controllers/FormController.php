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
        $this->validate(
            request(),
            [
                'quote' => 'required',
                'author_text' => 'required_if:new_author,==,true'
            ],
            [
                'author_text.required_if' => 'يجب اختيار اسم القائل او ادخال اسم جديد'
            ]
        );
    }
}
