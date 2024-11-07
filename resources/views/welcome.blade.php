<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gradient-to-r from-body_color to-secondary_color">
        <div id="navbar">
            <navbar/>
        </div>
        <div class="flex justify-center p-5">
            <div class="content-style">
                <div class="col-span-1 p-2">
                    <img src="https://th.bing.com/th/id/R.c86d641beb7fa0a6293b8d3f73652dd8?rik=sTbrA%2fuDvPzqZQ&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fsound-waves-transparent-background%2fsound-waves-transparent-background-4.png&ehk=nQp%2fY5DBJlCHeKZ4gxzbvudzPH3c489NN6HjooqyRgE%3d&risl=&pid=ImgRaw&r=0">
                    <p class="text-info">Content info here</p>
                </div>
                <div class="col-span-1 p-2">
                    <img src="https://th.bing.com/th/id/R.c86d641beb7fa0a6293b8d3f73652dd8?rik=sTbrA%2fuDvPzqZQ&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fsound-waves-transparent-background%2fsound-waves-transparent-background-4.png&ehk=nQp%2fY5DBJlCHeKZ4gxzbvudzPH3c489NN6HjooqyRgE%3d&risl=&pid=ImgRaw&r=0">
                    <p class="text-info">Content info here</p>
                </div>
                <div class="col-span-1 p-2">
                    <img src="https://th.bing.com/th/id/R.c86d641beb7fa0a6293b8d3f73652dd8?rik=sTbrA%2fuDvPzqZQ&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fsound-waves-transparent-background%2fsound-waves-transparent-background-4.png&ehk=nQp%2fY5DBJlCHeKZ4gxzbvudzPH3c489NN6HjooqyRgE%3d&risl=&pid=ImgRaw&r=0">
                    <p class="text-info">Content info here</p>
                </div>
                <div class="col-span-1 p-2">
                    <img src="https://th.bing.com/th/id/R.c86d641beb7fa0a6293b8d3f73652dd8?rik=sTbrA%2fuDvPzqZQ&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fsound-waves-transparent-background%2fsound-waves-transparent-background-4.png&ehk=nQp%2fY5DBJlCHeKZ4gxzbvudzPH3c489NN6HjooqyRgE%3d&risl=&pid=ImgRaw&r=0">
                    <p class="text-info">Content info here</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center p-5">
            <div class="content-style">
                <div class="upload-components">
                    <input type="file" id="file" name="file" class="file_input font-nunito">
                    <!-- <button type="button" class="">Upload</button> -->
                </div>
            </div>
        </div>
        <!-- <div class="spacer-bar"></div> -->
        <!-- Components -->
        @vite('resources/js/app.js')
    </body>
</html>
