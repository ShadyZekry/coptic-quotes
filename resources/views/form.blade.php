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

    <link rel="stylesheet" href="{{ asset('css/multiple_select.css') }}" />
    {{-- <link rel="script" href="{{ asset('css/multiple_select.js') }}" /> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


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
    </style>

    {{-- <script>
        $(function() {
            var mySelectCheckbox = new checkbox_select({
                selector: "#make_checkbox_select",
                selected_translation: "selectat",
                all_translation: "Toate marcile",
                not_found: "Nici unul gasit",

                // Event during initialization
                onApply: function(e) {
                    alert("Custom Event: " + e.selected);
                }
            });

        });
    </script> --}}

</head>

<body dir="rtl">
    <div class="form-style-5">
        <form>
            <fieldset>
                <legend><span class="number">1</span>عن القائل</legend>
                {{-- <input type="email" name="field2" placeholder="Your Email *"> --}}
                {{-- <textarea name="field3" placeholder="About yourself"></textarea> --}}
                <label for="author">القائل:</label>
                <select id="author" name="field4">
                    @foreach ($authors as $author)
                        <option value="{{ $author->name }}">{{ $author->name }}</option>
                    @endforeach
                </select>

            </fieldset>
            <fieldset>
                <legend><span class="number">2</span>عن المقولة</legend>
                <label for="make">المقولة:</label>
                <textarea name="field3" placeholder="About Your School"></textarea>


                {{-- <label for="make">مواضيع:</label>
                <form id="make_checkbox_select">
                    <select name="make">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </form> --}}
            </fieldset>
            <input type="submit" value="Apply" />
        </form>
    </div>

</body>

</html>
