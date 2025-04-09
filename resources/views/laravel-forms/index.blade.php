<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>技術者リスト一覧</title>
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
        .btn-primary {
            background-color: #007bff;
            color: white;
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
    <h2>技術者リスト一覧</h2>
    
    <div style="margin-bottom: 20px;">
        <a href="{{ route('laravel-forms.create') }}" class="btn btn-primary">新規登録</a>
    </div>
    
    @if(isset($forms) && $forms->isEmpty())
        <p>登録されている技術者はいません。</p>
    @elseif(isset($forms))
        @foreach($forms as $form)
            <div style="border-bottom: 1px solid #ddd; padding-bottom: 15px; margin-bottom: 15px;">
                <p><strong>名前：</strong>{{ $form->name }}</p>
                <p><strong>年齢：</strong>{{ $form->age }}歳</p>
                <p><strong>得意な言語：</strong>{{ optional($form->technology)->language_name ?? '未設定' }}</p>
                
                <div style="margin-top: 10px;">
                    <a href="{{ route('laravel-forms.show', ['id' => $form->form_id]) }}" class="btn">詳細</a>
                    <a href="{{ route('laravel-forms.edit', ['id' => $form->form_id]) }}" class="btn btn-edit">編集</a>
                    
                    <form method="POST" action="{{ route('laravel-forms.destroy', ['id' => $form->form_id]) }}" style="display: inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-delete" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <p>データの読み込み中にエラーが発生しました。</p>
    @endif
</body>
</html>