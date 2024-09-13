<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="flex h-fit bg-purple-50">
    <div class="flex flex-col gap-4 w-full sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</body>
</html>
