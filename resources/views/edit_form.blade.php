<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集フォーム</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        h1 {
            background-color: #444;
            color: white;
            padding: 10px;
        }
        label {
            display: inline-block;
            width: 100px;
            margin-top: 10px;
        }
        input, select {
            margin-top: 10px;
        }
        button {
            margin-top: 20px;
            padding: 5px 15px;
            font-size: 14px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

    <h1>編集フォーム</h1>

    <form action="{{ route('forms.update', $form->form_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>名前：</label>
        <input type="text" name="name" value="{{ old('name', $form->name) }}" required><br>

        <label>メールアドレス：</label>
        <input type="email" name="email" value="{{ old('email', $form->email) }}" required><br>

        <label>年齢：</label>
        <input type="number" name="age" value="{{ old('age', $form->age) }}"><br>

        <label>得意な言語：</label>
        <select name="tech_id">
            @foreach ($technologies as $tech)
                <option value="{{ $tech->tech_id }}" {{ old('tech_id', $form->tech_id) == $tech->tech_id ? 'selected' : '' }}>
                    {{ $tech->language }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">更新する</button>
    </form>

    <a href="{{ route('forms.index') }}">← 戻る</a>

</body>
</html>
