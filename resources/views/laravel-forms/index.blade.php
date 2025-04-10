<!DOCTYPE html>
<html lang="ja">
<body>
    <h2>技術者リスト一覧</h2>
    
    <div>
        <a href="{{ route('laravel-forms.create') }}">新規登録</a>
    </div>
    
    @if(isset($forms) && $forms->isEmpty())
        <p>登録されている技術者はいません。</p>
    @elseif(isset($forms))
        @foreach($forms as $form)
            <div>
                <p><strong>名前：</strong>{{ $form->name }}</p>
                <p><strong>年齢：</strong>{{ $form->age }}歳</p>
                <p><strong>得意な言語：</strong>{{ optional($form->technology)->language_name ?? '未設定' }}</p>
                
                <div>
                    <a href="{{ route('laravel-forms.laravelform', ['id' => $form->formID]) }}">詳細</a>
                    <a href="{{ route('laravel-forms.edit', ['id' => $form->formID]) }}">編集</a>
                    
                    <form method="POST" action="{{ route('laravel-forms.destroy', ['id' => $form->formID]) }}">
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