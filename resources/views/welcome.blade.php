<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AUDIO</title>
        <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gradient-to-r from-body_color to-secondary_color">
        <div id="navbar">
            <navbar/>
        </div>
        <div class="content-style mt-20">
            <div class="flex flex-col justify-center items-center">
                <img class="w-44" src="https://th.bing.com/th/id/R.c86d641beb7fa0a6293b8d3f73652dd8?rik=sTbrA%2fuDvPzqZQ&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fsound-waves-transparent-background%2fsound-waves-transparent-background-4.png&ehk=nQp%2fY5DBJlCHeKZ4gxzbvudzPH3c489NN6HjooqyRgE%3d&risl=&pid=ImgRaw&r=0">
                <p class="main-header">JUNGO</p>
            </div>
        </div>
        <div class="flex justify-center p-5 mt-15">
            <div id="audiosection"></div>
        </div>
        <div id="uploader">
            <uploader/>
        </div>
        <!-- <div class="spacer-bar"></div> -->
        <!-- Components -->
        @vite('resources/js/app.js')
    </body>
</html>
