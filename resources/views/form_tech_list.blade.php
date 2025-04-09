<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの受け渡し</title>
</head>
<body>
    <h1>データの表示</h1>

    <h2>①最初のレコードID、名前、メールアドレス、年齢</h2>
    <p>ID: {{ $firstRecord->form_id }}</p>
    <p>名前: {{ $firstRecord->name }}</p>
    <p>メールアドレス: {{ $firstRecord->email }}</p>
    <p>年齢: {{ $firstRecord->age }}</p>

    <h2>言語の全レコード</h2>
    <ul>
        @foreach ($technologies as $tech)
            <li> {{ $tech->tech_id }} : {{ $tech->language }}</li>
        @endforeach
    </ul>

    <h2>DBに登録されている名前、年齢、得意な言語</h2>
    <ul>
        @foreach ($userSkills as $user)
            <li>
                名前: {{ $user->name }}<br> 
                年齢: {{ $user->age }}<br>
                得意な言語: {{ $user->language }}
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>

