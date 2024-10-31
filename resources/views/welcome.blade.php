<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="navbar">
            <navbar/>
        </div>
        <div class="flex justify-center">
            <div class="content-style">
                <div class="col-span-1">
                    <h1 class="main-header mb-10">Welcome to Testing</h1>
                    <p class="text-info">This is the main content area.</p>
                </div>
                <div class="col-span-1">
                    <h1 class="main-header mb-10">Welcome to Testing</h1>
                    <p class="text-info">This is the main content area.</p>
                </div>
                <div class="col-span-1">
                    <h1 class="main-header mb-10">Welcome to Testing</h1>
                    <p class="text-info">This is the main content area.</p>
                </div>
                <div class="col-span-1">
                    <h1 class="main-header mb-10">Welcome to Testing</h1>
                    <p class="text-info">This is the main content area.</p>
                </div>
                <div class="col-span-1">
                    <h1 class="main-header mb-10">Welcome to Testing</h1>
                    <p class="text-info">This is the main content area.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="content-style">
                <div class="upload-components">
                    <input type="file" id="file" name="file">
                    <button type="button">Upload</button>
                </div>
            </div>
        </div>
        <div class="spacer-bar"></div>
        <!-- Components -->
        @vite('resources/js/app.js')
    </body>
</html>
