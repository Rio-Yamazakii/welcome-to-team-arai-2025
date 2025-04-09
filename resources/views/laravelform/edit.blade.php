<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集フォーム</title>
</head>
<body>
    <h1>編集フォーム</h1>

    <form action="{{ route('laravelform.update', $form->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">名前:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $form->name) }}" required><br>

        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $form->email) }}" required><br>

        <label for="age">年齢:</label>
        <input type="number" id="age" name="age" value="{{ old('age', $form->age) }}" required><br>

        <label for="tech_ID">得意な言語:</label>
        <input type="number" id="tech_ID" name="tech_ID" value="{{ old('tech_ID', $form->tech_ID) }}" required><br>

        <button type="submit">更新</button>
    </form>
</body>
</html>
