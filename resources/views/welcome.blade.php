<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    </head>
    <body class="">
        <main class="h-screen w-screen bg-stone-200 flex justify-center items-center"> 
            <div class="container bg-stone-100 gap-4 max-w-4xl h-[700px] rounded-xl p-4 flex justify-start flex-col"> 
                <div class="h-full overflow-y-scroll space-y-4">
                    @foreach (range(1, 10) as $item )
                        @if($item % 2==0)
                            <div class="flex justify-start"> 
                                <p class="max-w-xs bg-orange-200 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl p-3">AI</p>
                            </div>
                        @else
                            <div class="flex justify-end"> 
                                <p class="max-w-xs bg-indigo-200 rounded-tr-3xl rounded-bl-3xl p-3">Human</p>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="flex items-center bg-white overflow-hidden rounded-2xl"> 
                    <label class="flex-1"> 
                        <input class="bg-white p-3 w-full rounded-l-2xl" type="text" placeholder="Type something..."/> 
                    </label>
                    <button class="bg-indigo-900 text-white px-4 py-2 round-r-2xl h-full">Submit</button>
                </div>   
            </div>
        </main>
        @livewireScripts
    </body>
</html>
