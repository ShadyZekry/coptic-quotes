<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> --}}

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
            color: #8a97a0;
            -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            margin-bottom: 30px;
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
    <div class="form-style-5">
        <form onsubmit="onSubmit()">
            <fieldset>
                <div style="display: flex; flex-direction: column;">
                    <legend><span class="number">1</span>عن القائل</legend>
                    {{-- <input type="email" name="field2" placeholder="Your Email *"> --}}
                    {{-- <textarea name="field3" placeholder="About yourself"></textarea> --}}
                    <label for="author">القائل:</label>
                    <select id="author" name="author">
                        @foreach ($authors as $author)
                            <option value="{{ $author->name }}">{{ $author->name }}</option>
                        @endforeach
                    </select>

                    <input type="text" id="authorText" name="author" placeholder="اكتبلنا الاسم هنا..."
                        style="display: none">

                    <div style="display: flex;flex-direction: row;align-items: center;">
                        <label for="checkbox" style="margin-left: 10px;">مش لاقي الاسم ؟</label>
                        <div class="item" id="checkbox">
                            <div class="toggle-pill-color" name="new_author">
                                <input type="checkbox" id="pill3" onchange="onSwitch()">
                                <label for="pill3"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend><span class="number">2</span>عن المقولة</legend>
                <label for="make">المقولة:</label>
                {{-- مــــن يـهرب مـــن الضيـــــقة يهـــــرب مـــن الله --}}
                <textarea name="quote" placeholder="إبن الطاعة تحل عليه البركة"></textarea>

                <label for="searchInput">مواضيع:</label>
                <ul id="tagsList" style="padding-bottom: 10px"></ul>
                <input type="hidden" id="selectedTags" name="selected_tags" value="" />

                <div style="display: flex; flex-direction: row;">
                    <input type="text" id="searchInput" onkeyup="search()" placeholder="ابحت عن اسم موضوع...">
                    <span onclick="newElement()" class="addBtn">اضافة</span>
                </div>
                <ul id="tagsSearchList">
                    @foreach ($tags as $tag)
                        <li style="display: none" onclick="newElement('{{ $tag->name }}')"><a
                                href="#">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            </fieldset>
            <input type="submit" value="Apply" />
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
    };

    function onSwitch() {
        var isChecked = document.getElementById("pill3").checked;

        if (isChecked) {
            document.getElementById("authorText").style.display = "block";
            document.getElementById("author").style.display = "none";
        } else {
            document.getElementById("authorText").style.display = "none";
            document.getElementById("authorText").value = "";
            document.getElementById("author").style.display = "block";
        }
    };
</script>
