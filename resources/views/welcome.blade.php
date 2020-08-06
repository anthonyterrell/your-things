<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body class="py-5 bg-gray-800 text-white">
        <div class="max-w-3xl mx-auto">
            <button class="flex items-center p-1"
                onclick="window.open('things:/\/\/', '_self')">
                <img src="/images/Things-macOS.png" width="30px" alt="Things for Mac.">
                Open Things
            </button>
            <hr class="my-4 border-1 bg-blue">
            <div class="flex justify-between">
                <div class="flex flex-col w-1/4 p-4 bg-gray-900 rounded">
                    <i class="mb-3 las la-plus text-3xl"></i>
                    <h3 class="text-xl">{{ \App\Task::count() }}</h3>
                    <small>Tasks Created</small>
                </div>
                <div class="flex flex-col w-1/4 p-4 bg-gray-900 rounded">
                    <i class="mb-3 lar la-check-square text-3xl"></i>
                    <h3 class="text-xl">{{ \App\Task::completed()->count() }}</h3>
                    <small>Tasks Completed</small>
                </div>
                <div class="flex flex-col w-1/4 p-4 bg-gray-900 rounded">
                    <i class="mb-3 las la-ban text-3xl"></i>
                    <h3 class="text-xl">{{ \App\Task::cancelled()->count() }}</h3>
                    <small>Tasks Cancelled</small>
                </div>
            </div>
            <div class="flex justify-center mt-5">
                <small class="italic">
                    <strong>{{ \App\Task::oldest()->first()->creationDate->diffInYears(now()) }}</strong>
                    Years of Productivity
                </small>
            </div>
        </div>
    </body>
</html>
