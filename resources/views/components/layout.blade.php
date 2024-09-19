<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-500">
<h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
    {{ $slot }}
</body>
</html> 