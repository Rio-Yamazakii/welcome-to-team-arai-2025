<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム登録画面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
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
            border: none;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>フォーム登録画面</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('laravel-forms.store') }}">
        @csrf
        
        <div class="form-group">
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        
        <div class="form-group">
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        
        <div class="form-group">
            <label for="age">年齢:</label>
            <input type="number" id="age" name="age" value="{{ old('age') }}">
        </div>
        
        <div class="form-group">
            <label for="technology_id">得意な言語:</label>
            <select id="technology_id" name="technology_id" required>
                <option value="">選択してください</option>
                @foreach($technologies as $technology)
                    <option value="{{ $technology->technology_id }}" {{ old('technology_id') == $technology->technology_id ? 'selected' : '' }}>
                        {{ $technology->language_name }}
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