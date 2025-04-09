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
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#5 hello</title>
</head>
<body>
    <h1>データの受け渡し</h1>
<!-- ①DBに登録されている最初のレコードのID、名前、メールアドレス、年齢を表示してください -->
    <p class="moji">①最初のレコードのID、名前、メールアドレス、年齢</p>
    <p>ID：{{ $form1->id }}</p>
    <p>名前：{{ $form1->name }}</p>
    <p>メールアドレス：{{ $form1->email }}</p>
    <p>年齢：{{ $form1->age }}</p>
<!-- ②DBに登録されている技術ID、言語を全て表示してください -->
    <p class="moji">②言語の全レコード</p>
    @foreach( $technologies as $technology)
    <p>{{ $technology->id }}：{{ $technology->language }}</p>
    @endforeach
<!-- DBに登録されている名前、年齢、得意な言語を全て表示してください -->
    <p class="moji">③DBに登録されている名前、年齢、得意な言語</p>
    @foreach( $forms as $form)
    <p>名前：{{ $form->name }}</p>
    <p>年齢：{{ $form->age }}</p>
    <p>言語：{{ $form->technologies->language }}</p>
    <p>--------------------------------</p>
    @endforeach
</body>
</html>