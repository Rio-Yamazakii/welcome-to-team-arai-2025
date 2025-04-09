<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録フォーム</title>
</head>

<h2>登録されたデータ一覧</h2>
<table border="1" cellpadding="8" style="margin-top: 20px; border-collapse: collapse;">
    <thead>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>年齢</th>
            <th>Tech ID</th>
            <th>作成日時</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($forms as $form)
        <tr>
            <td>{{ $form->id }}</td>
            <td>{{ $form->name }}</td>
            <td>{{ $form->email }}</td>
            <td>{{ $form->age }}</td>
            <td>{{ $form->technology ? $form->technology->tech_language : 'あ' }}</td>
            <td>{{ $form->created_at }}</td>

            <td>
                <a href="{{ route('laravelform.edit', $form->id) }}">編集</a>

                <form action="{{ route('laravelform.destroy', $form->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>


<body>
    <h1>登録フォーム</h1>

    @if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('laravelform.store') }}" method="POST">
        @csrf
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>

        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

        <label for="age">年齢:</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}" required><br>

        <label for="tech_ID">得意な言語:</label>
        <input type="number" id="tech_ID" name="tech_ID" value="{{ old('tech_ID') }}" required><br>

        <button type="submit">♡♡♡登録♡♡♡</button>
    </form>

    @if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</body>

</html>