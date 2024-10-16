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
        <div class="bg-red-500">
            <div class="container mx-auto mt-16">
                <h1 class="text-1xl font-light">Welcome to Testing</h1>
                <p class="mt-4">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        
        <!-- Components -->
        @vite('resources/js/app.js')
    </body>
</html>
