<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集フォーム</title>
</head>

<body>
    <h1>編集フォーム</h1>

    
        <form action="{{ route('form.update', ['id' => $form->form_id]) }}" method="POST">
            @csrf
            <label for="name">名前:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name', $form->name) }}" required><br><br>

            <label for="mail_address">メールアドレス:</label><br>
            <input type="email" id="mail_address" name="mail_address" value="{{ old('email', $form->email) }}" required><br><br>

            <label for="age">年齢:</label><br>
            <input type="number" id="age" name="age" value="{{ old('age', $form->age) }}"><br><br>

            <label for="skill_id">得意な言語:</label><br>
            <select id="skill_id" name="skill_id">
                <option value="">選択してください</option>
                @foreach ($technologies as $technology)
                <option value="{{ $technology->id }}"
                    {{ (old('skill_id', $form->skill_id) == $technology->id) ? 'selected' : '' }}>
                    {{ $technology->well_language }}
                </option>
                @endforeach
            </select><br><br>
            <button class="btn btn-success"> 更新 </button>
        </form>

</body>

</html>