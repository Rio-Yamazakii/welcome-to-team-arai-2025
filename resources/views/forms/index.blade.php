<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム一覧</title>
</head>
<body>
    <h1>フォーム一覧</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>年齢</th>
                <th>技術名</th>  <!-- 技術名の列を追加 -->
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->email }}</td>
                    <td>{{ $form->age }}</td>
                    <td>{{ $form->technology ? $form->technology->tech_language : '未設定' }}</td> <!-- 技術名を表示 -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
