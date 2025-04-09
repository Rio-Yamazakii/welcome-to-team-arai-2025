<!-- resources/views/form/index.blade.php -->
<!DOCTYPE html>
<html>
<h1>データの受け渡し</h1>

<h2>① 最初のレコードのID、名前、メールアドレス、年齢</h2>
<p>ID: {{ $firstForm ? $firstForm->formID : 'データなし' }}</p>
<p>名前: {{ $firstForm ? $firstForm->name : 'データなし' }}</p>
<p>メール: {{ $firstForm ? $firstForm->mailaddres : 'データなし' }}</p>
<p>年齢: {{ $firstForm ? $firstForm->age : 'データなし' }}</p>

<hr>

<h2>② 言語の全レコード</h2>
<ul>
@foreach ($technologies as $tech)
    <li>{{ $tech->techID }} : {{ $tech->lang }}</li>
@endforeach
</ul>

<hr>

<h2>③ DBに登録されている名前、年齢、得意な言語</h2>
@foreach ($formWithTech as $row)
    <div>
        <strong>名前:</strong> {{ $row->name }} <br>
        <strong>年齢:</strong> {{ $row->age }} <br>
        <strong>得意な言語:</strong> {{ $row->lang }}<br>
        <p>---------------------------<p>
    </div>
@endforeach

<a href="{{ route('form.create') }}">
    <button type="button">新規登録</button>
</a>

@foreach ($forms as $form)
    <div>
        <strong>名前:</strong> {{ $form->name }} <br>
        <strong>年齢:</strong> {{ $form->age }} <br>
        <strong>得意な言語:</strong> {{ $form->technology->lang }} <br>
        <a href="{{ route('form.edit', $form->formID) }}">編集</a>
        <form method="POST" action="{{ route('form.destroy', $form->formID) }}">
            @csrf
            @method('POST')
            <button type="submit">削除</button>
        </form>
    </div>
@endforeach

</html>