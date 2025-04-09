<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム一覧</title>
</head>

<body>
    <h1>データの受け渡し</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>年齢</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $form->form_ID }}</td>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->mail_address }}</td>
                    <td>{{ $form->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>言語の全レコード</h1>


    <table border="1">
        <thead>
            <tr>
                <th>技術ID</th>
                <th>言語</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $technology->tech_ID }}</td>
                    <td>{{ $technology->well_known_language }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </head>

    <h1>DBに登録されている名前、年齢、得意な言語</h1>
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
                        {{ $form->technology ? $form->technology->well_known_language : '不明' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    <h1>フォーム登録画面</h1>

    <form method="POST" action="{{ route('forms.store') }}">
        @csrf
        <label>名前: <input type="text" name="name"></label><br>
        <label>メールアドレス: <input type="text" name="mail_address"></label><br>
        <label>年齢: <input type="number" name="age"></label><br>
        <label>得意な技術:
            <select name="tech_ID">
                @foreach ($technologies as $tech)
                    <option value="{{ $tech->tech_ID }}">{{ $tech->well_known_language }}</option>
                @endforeach
            </select>
        </label><br>
        <button type="submit">登録</button>
    </form>



    <h2>技術者リスト一覧</h2>
    <table border="1">
        <thead>
            <tr>
                <th>名前</th>
                <th>メール</th>
                <th>年齢</th>
                <th>技術</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->mail_address }}</td>
                    <td>{{ $form->age }}</td>
                    <td>{{ $form->technology->well_known_language ?? '不明' }}</td>
                    <td>
                        <a href="{{ route('forms.edit', $form->form_ID) }}">編集</a>
                        <form method="POST" action="{{ route('forms.destroy', $form->form_ID) }}">
                            @csrf
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>