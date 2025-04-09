<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
</head>
<body>
    <h1>編集画面</h1>
    <form action="{{ route('member.update', $form->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>名前：</label>
            <input type="text" name="name" value="{{ $form->name }}" required>
        </div>
        <div>
            <label>メールアドレス：</label>
            <input type="email" name="email" value="{{ $form->email }}" required>
        </div>
        <div>
            <label>年齢：</label>
            <input type="number" name="age" value="{{ $form->age }}" required>
        </div>
        <div>
            <label>得意な言語：</label>
            <select name="technologies_id">
                @foreach ($technologies as $technology)
                    <option value="{{ $technology->id }}" {{ $form->technologies_id == $technology->id ? 'selected' : '' }}>
                        {{ $technology->language }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">更新</button>
    </form>
    <a href="{{ route('member.show') }}">戻る</a>
</body>
</html>
