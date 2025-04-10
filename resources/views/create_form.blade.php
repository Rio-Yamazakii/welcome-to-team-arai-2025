<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム登録画面</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        h1 {
            background-color: #333;
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
        .user-block {
            margin-top: 20px;
            border-top: 1px dashed #333;
            padding-top: 10px;
        }
        .button {
            margin: 5px 5px 10px 0;
            padding: 5px 10px;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
        }
        .edit-btn {
            color: blue;
        }
        .delete-btn {
            color: white;
            background-color: red;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>フォーム登録画面</h1>

    <form action="{{ route('forms.store') }}" method="POST">
        @csrf
        <label>名前：</label>
        <input type="text" name="name" value="{{ old('name') }}" required><br>

        <label>メールアドレス：</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label>年齢：</label>
        <input type="number" name="age" value="{{ old('age') }}"><br>

        <label>得意な言語：</label>
        <select name="tech_id">
            @foreach ($technologies as $tech)
                <option value="{{ $tech->tech_id }}" {{ old('tech_id') == $tech->tech_id ? 'selected' : '' }}>
                    {{ $tech->language }}
                </option>
            @endforeach
        </select><br>

        <button type="submit" class="button">登録する</button>
    </form>

    <h2>技術者リスト一覧</h2>

    @foreach ($userSkills as $user)
        <div class="user-block">
            <div>名前：{{ $user->name }}</div>
            <div>年齢：{{ $user->age }}歳</div>
            <div>得意な言語：{{ $user->language }}</div>

            <a href="{{ route('forms.edit', $user->form_id) }}" class="edit-btn">編集</a>

            <form action="{{ route('forms.destroy', $user->form_id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn">削除</button>
            </form>
        </div>
    @endforeach

</body>
</html>
