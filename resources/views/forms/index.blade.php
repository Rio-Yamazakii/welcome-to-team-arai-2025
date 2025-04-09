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
<body>
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
</body>
</html>


            <th>得意な言語</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($technologies as $technology)
            <tr>
                <td>{{ $technology->id }}</td>
                <td>{{ $technology->tech_language }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    
    


    
</body>
</html>
