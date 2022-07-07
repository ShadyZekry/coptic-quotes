<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
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
                'author_text' => 'required_if:new_author,==,true',
                'selected_tags' => 'required'
            ],
            [
                'author_text.required_if' => 'يجب اختيار اسم القائل او ادخال اسم جديد',
                'selected_tags.required' => 'يجب اختيار موضوع واحد على الأقل'
            ]
        );

        $authorName = request('author');
        if (request('new_author') === 'true')
            $authorName = request('author_text');

        $author = Author::firstOrCreate(
            ['name' => $authorName],
            ['name' => $authorName]
        );

        $tags = explode(',', request('selected_tags'));
        $tagModels = new Collection();
        foreach ($tags as $tag) {
            $tagModel = Tag::firstOrCreate(
                ['name' => $tag],
                ['name' => $tag]
            );
            $tagModels->add($tagModel);
        }

        $quote = $author->quotes()->create(
            ['quote' => request('quote')]
        );

        $quote->tags()->sync($tagModels);
        $quote->author()->associate($author);

        $quote->save();
        $author->save();

        return redirect('/form')->with('message', 'تم إضافة المقولة بنجاح و سيتم مراجعها');
    }
}
