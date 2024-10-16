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
        <div class="content-style">
            <div>
                <h1 class="main-header mb-10">Welcome to Testing</h1>
                <p class="text-info">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        <div class="content-style">
            <div>
                <h1 class="main-header mb-10">Welcome to Testing</h1>
                <p class="text-info">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        <div class="content-style">
            <div>
                <h1 class="main-header mb-5">Welcome to Testing</h1>
                <p class="text-info">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        <div class="content-style">
            <div>
                <h1 class="main-header mb-10">Welcome to Testing</h1>
                <p class="text-info">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        <div class="content-style">
            <div>
                <h1 class="main-header mb-10">Welcome to Testing</h1>
                <p class="text-info">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        <div class="content-style">
            <div>
                <h1 class="main-header mb-10">Welcome to Testing</h1>
                <p class="text-info">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        <div class="content-style">
            <div>
                <h1 class="main-header mb-10">Welcome to Testing</h1>
                <p class="text-info">This is the main content area.</p>
            </div>
            <?php echo "PHP Echo...";?>
        </div>
        
        <!-- Components -->
        @vite('resources/js/app.js')
    </body>
</html>
