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
</html>