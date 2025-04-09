<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>技術者詳細</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .btn {
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #f0f0f0;
            color: #333;
            border-radius: 3px;
            margin-right: 5px;
        }
        .btn-edit {
            background-color: #ffc107;
            color: #333;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>技術者詳細</h2>
    
    <div style="margin-bottom: 20px;">
        <a href="{{ route('laravel-forms.index') }}" class="btn">一覧に戻る</a>
    </div>
    
    <div style="border: 1px solid #ddd; padding: 20px; border-radius: 5px;">
        <p><strong>ID：</strong>{{ $form->form_id }}</p>
        <p><strong>名前：</strong>{{ $form->name }}</p>
        <p><strong>メールアドレス：</strong>{{ $form->email }}</p>
        <p><strong>年齢：</strong>{{ $form->age }}歳</p>
        <p><strong>得意な言語：</strong>{{ optional($form->technology)->language_name ?? '未設定' }}</p>
        <p><strong>出身地：</strong>{{ $form->birthplace ?? '未設定' }}</p>
        <p><strong>登録日時：</strong>{{ $form->created_at->format('Y年m月d日 H:i:s') }}</p>
        <p><strong>更新日時：</strong>{{ $form->updated_at->format('Y年m月d日 H:i:s') }}</p>
    </div>
    
    <div style="margin-top: 20px;">
        <a href="{{ route('laravel-forms.edit', ['id' => $form->form_id]) }}" class="btn btn-edit">編集</a>
        
        <form method="POST" action="{{ route('laravel-forms.destroy', ['id' => $form->form_id]) }}" style="display: inline-block;">
            @csrf
            <button type="submit" class="btn btn-delete" onclick="return confirm('本当に削除しますか？')">削除</button>
        </form>
    </div>
</body>
</html>