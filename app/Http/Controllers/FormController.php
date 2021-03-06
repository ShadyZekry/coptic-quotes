<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Quote;
use App\Models\Source;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class FormController extends Controller
{
    public function getForm()
    {
        return view('form', [
            'authors' => Author::get(),
            'tags' => Tag::get(),
            'sources' => Source::get(),
        ]);
    }

    public function postForm()
    {
        $this->validate(
            request(),
            [
                'quote' => 'required',
                'author_text' => 'required_if:new_author,==,true',
                'selected_tags' => 'required',
                'source' => 'required',
            ],
            [
                'author_text.required_if' => 'يجب اختيار اسم القائل او ادخال اسم جديد',
                'selected_tags.required' => 'يجب اختيار موضوع واحد على الأقل',
                'source.required' => 'يجب ادخال مصدر للمقولة',
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

        $quote = Quote::create(
            [
                'quote' => request('quote'),
                'author_id' => $author->id,
                'source_id' => request('source'),
            ]
        );

        $quote->author()->associate($author);
        $quote->tags()->sync($tagModels);

        $quote->save();
        $author->save();

        return redirect('/coptic-quotes-form')->with('message', 'تم إضافة القول بنجاح و سيتم مراجعها');
    }
}
