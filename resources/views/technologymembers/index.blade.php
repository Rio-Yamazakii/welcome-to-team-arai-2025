<!DOCTYPE html>
<html lang="en">
<head>
<style>
        h1 {
            font-family: "Yu Gothic"; /* ゴシック体 */
            font-size: 30px;
            font-weight: bold; /* 文字を太く */
        }
        .moji {
            font-family: "Yu Gothic"; /* ゴシック体 */
            font-weight: bold; /* 文字を太く */
            font-size: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>フォーム登録画面</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <!-- 新規メンバー登録フォーム -->
    <form action="{{ route('member.store')}}" method="POST">
        @csrf
        <div class="name">
            <label>名前：</label>
            <input type="text" name="name" required>
        </div>
        <div class="email">
            <label>メールアドレス：</label>
            <input type~"email" name="email" required>
        </div>
        <div class="age">
            <label>年齢：</label>
            <input type="number" name="age" required>
        </div>
        <div class="language">
            <label>得意な言語：</label>
            <select name="technologies_id">
                @foreach ($technologies as $technology)
                    <option value="{{ $technology->id }}">{{ $technology->language }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">登録する</button>
    </form>
    <!--  技術者リスト一覧と編集・削除ボタン-->
    <p class="moji">技術者リスト一覧<p>
    @foreach( $forms as $form)
    <p>名前：{{ $form->name }}</p>
    <p>年齢：{{ $form->age }}</p>
    <p>言語：{{ $form->technologies->language }}</p>
    <a href="{{ route('member.edit', $form->id) }}">編集</a><br>
    <!-- 削除ボタン（確認ダイアログ付き） -->
    <form action="{{ route('member.destroy', $form->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
    </form>

    <p>--------------------------------</p>
    @endforeach
</body>
</html>