<!DOCTYPE html>
<html lang="ja">
<h1>技術者登録フォーム</h1>

<body>
    <h2>フォーム登録画面</h2>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route('laravel-forms.store') }}">

        @csrf
        
        <div class="form-group">
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        
        <div class="form-group">
            <label for="mailaddres">メールアドレス:</label>
            <input type="email" id="mailaddres" name="mailaddres" value="{{ old('mailaddres') }}" required>
        </div>
        
        <div class="form-group">
            <label for="age">年齢:</label>
            <input type="number" id="age" name="age" value="{{ old('age') }}">
        </div>
        
        <div class="form-group">
            <label for="techID">得意な言語:</label>
            <select id="techID" name="techID" required>
                <option value="">選択してください</option>
                @foreach($technologies as $technology)
                    <option value="{{ $technology->techID }}" {{ old('techID') == $technology->techID ? 'selected' : '' }}>
                        {{ $technology->lang }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">登録する</button>
        </div>
    </form>
    
    <div style="margin-top: 20px;">
        <a href="{{ route('laravel-forms.index') }}" class="btn">一覧に戻る</a>
    </div>
</body>
</html>