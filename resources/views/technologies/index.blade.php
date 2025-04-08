<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>技術一覧</title>
</head>
<body>
    <h1>得意な技術一覧</h1>
    <ol>
        @foreach ($technologies as $technology)
            <li>技術ID: {{ $technology->id }} - 得意な言語: {{ $technology->tech_language }}</li>
        @endforeach
    </ol>
</body>
</html>
