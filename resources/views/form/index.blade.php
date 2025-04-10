<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>技術者一覧</title>
</head>

<body>
    <h1>技術者一覧</h1>

    <table>
        <thead>
            <tr>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>年齢</th>
                <th>得意な言語</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->mail_address }}</td>
                    <td>{{ $form->age }}</td>
                    <td>{{ optional($form->technology)->well_language ?? '未設定' }}</td>
                    <td>
                        <a href="{{ route('form.edit', ['id' => $form->form_id]) }}">編集</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('form.destroy', ['id' => $form->form_id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('form.create') }}">新規登録</a>
</body>

</html>