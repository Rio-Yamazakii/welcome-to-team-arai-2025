<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録フォーム</title>
</head>

<body>
    <h1>登録フォーム</h1>

    <form method="POST" action="{{ route('form.store') }}">
        @csrf

        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required><br><br>

        <label for="mail_address">メールアドレス:</label><br>
        <input type="email" id="mail_address" name="mail_address" value="{{ old('email') }}" required><br><br>

        <label for="age">年齢:</label><br>
        <input type="number" id="age" name="age" value="{{ old('age') }}"><br><br>

        <label for="skill_id">得意な言語:</label><br>
        <select id="skill_id" name="skill_id">
            <option value="">選択してください</option>
            @foreach ($technologies as $technology)
                <option value="{{ $technology->id }}">
                    
                    {{ $technology->well_language }}
                </option>
            @endforeach
        </select><br><br>

        <input type="submit" value="登録">

        <a href="{{ route('form.index') }}" class="btn">一覧に戻る</a>
    </form>
</body>

</html>