<!DOCTYPE html>
<html>
<body>
    <h2>技術者詳細</h2>
    
    <div>
        <a href="{{ route('laravel-forms.index') }}">一覧に戻る</a>
    </div>
    
    <div>
        <p><strong>ID：</strong>{{ $form->formID }}</p>
        <p><strong>名前：</strong>{{ $form->name }}</p>
        <p><strong>メールアドレス：</strong>{{ $form->email }}</p>
        <p><strong>年齢：</strong>{{ $form->age }}歳</p>
        <p><strong>得意な言語：</strong>{{ optional($form->technology)->lang ?? '未設定' }}</p>
        <p><strong>出身地：</strong>{{ $form->birthplace ?? '未設定' }}</p>
        <p><strong>登録日時：</strong>{{ optional($form->created_at)->format('Y年m月d日 H:i:s') ?? '未設定' }}</p>
        <p><strong>更新日時：</strong>{{ optional($form->updated_at)->format('Y年m月d日 H:i:s') ?? '未設定' }}</p>

    </div>
    
    <div style="margin-top: 20px;">
        <a href="{{ route('laravel-forms.edit', ['id' => $form->formID]) }}">編集</a>
        
        <form method="POST" action="{{ route('laravel-forms.destroy', ['id' => $form->formID]) }}">
            @csrf
            <button type="submit" class="btn btn-delete" onclick="return confirm('本当に削除しますか？')">削除</button>
        </form>
    </div>
</body>
</html>