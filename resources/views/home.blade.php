<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
{{--    <chat-component></chat-component>--}}
{{--    <div class="flex">--}}

{{--        <div class="bg-green-300 h-screen w-64 flex-none">Sidebar</div>--}}

{{--        <div class="flex flex-col w-auto w-full">--}}
{{--            <div class="bg-pink-500">--}}
{{--                header main--}}
{{--            </div>--}}

{{--            <div class="bg-indigo-700 h-full">--}}
{{--                Main--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="flex flex-col min-h-screen">
        <div class="flex">
            <div class="flex-none w-64 bg-pink-500">Sidebar header</div>
            <div class="flex-1 bg-orange-500">Header</div>
        </div>
        <div class="flex flex-1 bg-blue-500">
            <div class="flex-none w-64 bg-purple-500">Sidebar content</div>
            <div class="flex-1 bg-gray-500">Rest of the content</div>
        </div>
    </div>
</div>
</body>
</html>
