<h1>技術者登録フォーム</h1>

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
    <a href="{{ route('form.index') }}">
        <button type="button">一覧を表示</button>
    </a>
@endif

<form action="{{ route('store') }}" method="post">
    @csrf

    <label>名前: <input type="text" name="name" required></label><br>
    <label>メールアドレス: <input type="email" name="mailaddres" required></label><br>
    <label>年齢: <input type="number" name="age" required></label><br>

    <label>得意な言語:
        <select name="techID" required>
            @foreach ($technologies as $tech)
                <option value="{{ $tech->techID }}">{{ $tech->lang }}</option>
            @endforeach
        </select>
    </label><br>

    <button type="submit">登録</button>
</form>
