<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 ">
            @foreach($categories as $category)
            <?php $name = $category->name;?>
         <div class="card">
            <div class="display-flex">
                <div class="">
                    {{$query->$name}} {{$category->name}}
                </div>
            </div>
         </div>
         @endForeach
         </div>
        </div>
    </body>
</html>
