<!-- resources/views/welcome-react.blade.php -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React Example</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @viteReactRefresh
    @vite(['resources/js/app.jsx'])
</head>

<body>
    <div id="0014_react"></div>
</body>

</html>