<!DOCTYPE html>
<html>
<head>
    <title>データの受け渡し</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        h1, h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        hr {
            border: none;
            border-top: 1px dashed #ccc;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <h1>データの受け渡し</h1>
    
    <h2>①最初のレコードのID、名前、メールアドレス、年齢</h2>
    <p>ID : {{ $firstRecord->form_id }}</p>
    <p>名前 : {{ $firstRecord->name }}</p>
    <p>メールアドレス : {{ $firstRecord->email }}</p>
    <p>年齢 : {{ $firstRecord->age }}</p>
    
    <h2>②言語の全レコード</h2>
    @foreach($technologies as $tech)
        <p>{{ $tech->technology_id }} : {{ $tech->language_name }}</p>
    @endforeach
    
    <h2>③DBに登録されている名前、年齢、得意な言語</h2>
    @foreach($usersWithLanguages as $user)
        <p>名前 : {{ $user->name }}</p>
        <p>年齢 : {{ $user->age }}</p>
        <p>言語 : {{ $user->language_name }}</p>
        <hr>
    @endforeach
</body>
</html>