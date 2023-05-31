<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script type="module" src="{{ asset('js\app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>






    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            background-color: whitesmoke;
        }

        #kategoriaValaszto {
            margin: auto;
            text-align: center;
        }

        #kerdesek {
            background-color: green;
            border-radius: 1rem;
            max-width: 600px;
            margin: auto;
            text-align: center;
            margin-top: 3rem;
        }

        .kerdesLabel {
            background-color: green;
            color: white;
            margin: auto;
            text-align: left;
            padding-left: 13px;
        }

        .valaszMezok {
            background-color: grey;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: wrap;
            max-width: 1000px;
        }

        .valaszMezok #valasz {
            height: 45%;
            width: 50%;
        }

        #valasz {
            height: 100%;
            width: 100%;
            padding: 20px;
            border-radius: 3rem;
        }

        article {
            padding: 20px;
            width: 90%;
            background-color: whitesmoke;
            margin: auto;
            text-align: center;
        }
    </style>
</head>

<body class="antialiased">
    <article>

        <div id="kategoriaValaszto">
        </div>

        <div id="kerdesek">
        </div>

    </article>

</body>

</html>