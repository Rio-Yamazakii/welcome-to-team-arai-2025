<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームと技術一覧</title>
</head>
<body>
    <h1>フォームと得意な技術一覧</h1>
    <table border="1">
        <thead>
            <tr>
                <th>名前</th>
                <th>年齢</th>
                <th>得意な技術</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($forms as $form)
            <tr>
                <td>{{ $form->name }}</td>
                <td>{{ $form->age }}</td>
                <td>
                {{ $form->technology ? $form->technology->tech_language : 'あ' }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
