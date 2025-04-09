<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Record</title>
</head>
<body>
    <h1>データの受け渡し</h1>

    <h2>①最初のレコードのID、名前、メールアドレス、年齢</h2>
    <p>ID : {{ $firstRecord->form_id }}</p>
    <p>名前 : {{ $firstRecord->name }}</p>
    <p>メールアドレス : {{ $firstRecord->email_address }}</p>
    <p>年齢 : {{ $firstRecord->age }}</p>

    <h2>②言語の全レコード</h2>
    @foreach($technologies as $tech)
        <p>{{ $tech->skill_id }} : {{ $tech->well_language }}</p>
    @endforeach

    <h2>③DBに登録されている名前、年齢、得意な言語</h2>
    @foreach($usersWithLanguages as $user)
        <p>名前 : {{ $user->name }}</p>
        <p>年齢 : {{ $user->age }}</p>
        <p>言語 : {{ $user->well_language }}</p>
        <hr>
    @endforeach
</body>
</html>