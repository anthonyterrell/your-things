<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="py-5">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="p-4">
                    <h3 class="text-xl">{{ \App\Task::count() }}</h3>
                    <p>Tasks Created</p>
                </div>
                <div class="p-4">
                    <h3 class="text-xl">{{ \App\Task::completed()->count() }}</h3>
                    <p>Tasks Completed</p>
                </div>
                <div class="p-4">
                    <h3 class="text-xl">{{ \App\Task::cancelled()->count() }}</h3>
                    <p>Tasks Cancelled</p>
                </div>
            </div>
            <div class="flex justify-center mt-5">
                <p class="italic">
                    <strong>{{ \App\Task::oldest()->first()->creationDate->diffInYears(now()) }}</strong>
                    Years of Productivity
                </p>
            </div>
        </div>
    </body>
</html>
