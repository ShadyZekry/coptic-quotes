<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>أقوال الاباء</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/tags.css') }}" />
    <script src="{{ asset('js/tags.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/tags_search.css') }}" />
    <script src="{{ asset('js/tags_search.js') }}"></script>


    <!-- Styles -->
    <style type="text/css">
        .form-style-5 {
            max-width: 500px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: "Tajawal", "Times New Roman", Times, serif;
        }

        .form-style-5 fieldset {
            border: none;
        }

        .form-style-5 legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }

        .form-style-5 label {
            display: block;
            margin-bottom: 8px;
        }

        .form-style-5 input[type="text"],
        .form-style-5 input[type="date"],
        .form-style-5 input[type="datetime"],
        .form-style-5 input[type="email"],
        .form-style-5 input[type="number"],
        .form-style-5 input[type="search"],
        .form-style-5 input[type="time"],
        .form-style-5 input[type="url"],
        .form-style-5 textarea,
        .form-style-5 select {
            font-family: "Tajawal", "Times New Roman", Times, serif;
            background: rgba(255, 255, 255, .1);
            border: none;
            border-radius: 4px;
            font-size: 15px;
            margin: 0;
            outline: 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            background-color: #e8eeef;
            -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        }

        .form-style-5 input[type="text"]:focus,
        .form-style-5 input[type="date"]:focus,
        .form-style-5 input[type="datetime"]:focus,
        .form-style-5 input[type="email"]:focus,
        .form-style-5 input[type="number"]:focus,
        .form-style-5 input[type="search"]:focus,
        .form-style-5 input[type="time"]:focus,
        .form-style-5 input[type="url"]:focus,
        .form-style-5 textarea:focus,
        .form-style-5 select:focus {
            background: #d2d9dd;
        }

        .form-style-5 select {
            -webkit-appearance: menulist-button;
            height: 35px;
        }

        .form-style-5 .number {
            background: #1abc9c;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-left: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
            border-radius: 15px 15px 15px 0px;
        }

        .form-style-5 input[type="submit"],
        .form-style-5 input[type="button"] {
            position: relative;
            display: block;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            margin: 0 auto;
            background: #1abc9c;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            width: 100%;
            border: 1px solid #16a085;
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
        }

        .form-style-5 input[type="submit"]:hover,
        .form-style-5 input[type="button"]:hover {
            background: #109177;
        }

        /* toggle-pill-color */
        .toggle-pill-color input[type="checkbox"] {
            display: none;
        }

        .toggle-pill-color input[type="checkbox"]+label {
            display: block;
            position: relative;
            width: 3em;
            height: 1.6em;
            margin-bottom: 20px;
            border-radius: 1em;
            background: #e84d4d;
            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-transition: background 0.1s ease-in-out;
            transition: background 0.1s ease-in-out;
        }

        fieldset {
            margin-bottom: 30px;
        }

        .toggle-pill-color input[type="checkbox"]+label:before {
            content: "";
            display: block;
            width: 1.2em;
            height: 1.2em;
            border-radius: 1em;
            background: #fff;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.2);
            position: absolute;
            left: 0.2em;
            top: 0.2em;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .toggle-pill-color input[type="checkbox"]:checked+label {
            background: #47cf73;
        }

        .toggle-pill-color input[type="checkbox"]:checked+label:before {
            box-shadow: -2px 0px 5px rgba(0, 0, 0, 0.2);
            left: 1.6em;
        }

        /* toggle-pill-color end */
    </style>

</head>

<body dir="rtl">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible text-center" style="font-family: Tajawal">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="form-style-5">
        <form method="POST" action="/coptic-quotes-form" onsubmit="onSubmit()">
            @csrf
            <fieldset>
                <div style="display: flex; flex-direction: column;">
                    <legend><span class="number">1</span>القائل</legend>
                    <select id="author" name="author">
                        @foreach ($authors as $author)
                            <option value="{{ $author->name }}">{{ $author->name }}</option>
                        @endforeach
                    </select>

                    <input type="text" id="author_text" name="author_text" placeholder="اكتبلنا الاسم هنا..."
                        style="display: none">
                    @error('author_text')
                        <span style="color: red;"> {{ $message }} </span>
                    @enderror

                    <div style="display: flex;flex-direction: row;align-items: center;padding-top: 10px;">
                        <label for="checkbox" style="margin-left: 10px;">مش لاقي الاسم ؟</label>
                        <div class="item" id="checkbox">
                            <div class="toggle-pill-color">
                                <input type="checkbox" id="pill3" onchange="onSwitch()">
                                <label for="pill3"></label>
                                <input type="hidden" id="new_author" name="new_author" value="" />
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend><span class="number">2</span>القول</legend>
                {{-- مــــن يـهرب مـــن الضيـــــقة يهـــــرب مـــن الله --}}
                {{-- إبن الطاعة تحل عليه البركة --}}
                <textarea rows="10" name="quote" placeholder="كثيرًا ما تكلمت وندمت، أما عن السكوت فلم أندم قط."></textarea>
                @error('quote')
                    <span style="color: red;"> {{ $message }} </span>
                @enderror
            </fieldset>

            <fieldset>
                <legend><span class="number">3</span>المصادر</legend>

                <select name="source">
                    @foreach ($sources as $source)
                        <option value={{ $source->id }}>{{ $source->name }}</option>
                    @endforeach
                </select>

                @error('source')
                    <span style="color: red;"> {{ $message }} </span>
                @enderror
            </fieldset>

            <fieldset>
                <legend><span class="number">4</span>المواضيع</legend>
                <ul id="tagsList" style="padding-bottom: 10px"></ul>
                <input type="hidden" id="selectedTags" name="selected_tags" value="" />

                <div style="display: flex; flex-direction: row;">
                    <input type="text" id="searchInput" onkeyup="search()" placeholder="ابحت عن اسم موضوع...">
                    <span onclick="newElement()" class="addBtn">اضافة</span>
                </div>
                @error('selected_tags')
                    <span style="color: red;"> {{ $message }} </span>
                @enderror
                <ul id="tagsSearchList">
                    @foreach ($tags as $tag)
                        <li onclick="newElement('{{ $tag->name }}')">
                            <a href="#">{{ $tag->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </fieldset>
            <input type="submit" value="تأكيد" />
        </form>
    </div>
</body>

</html>

<script>
    function onSubmit(tagName) {
        // on user clicks submit button, this code will be executed first
        // we'll take all values of the selected tags and put them in 1 string
        var all_values = '';
        const listItemTextContent = Array.from(document.querySelectorAll("#tagsList > li"));

        const listItemTextArray =
            listItemTextContent.map(itemText => itemText.firstChild.data);

        document.querySelector('#selectedTags').value = listItemTextArray.join(',');
        document.querySelector('#new_author').value = document.getElementById("pill3").checked;
    };

    function onSwitch() {
        var isChecked = document.getElementById("pill3").checked;

        if (isChecked) {
            document.getElementById("author_text").style.display = "block";
            document.getElementById("author").style.display = "none";
        } else {
            document.getElementById("author_text").style.display = "none";
            document.getElementById("author_text").value = "";
            document.getElementById("author").style.display = "block";
        }
    };
</script>
