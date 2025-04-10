<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム一覧</title>

<body>
    <form method="POST" action="{{ route('forms.update', $form->form_ID) }}">
        @csrf
        @method('PUT')
        <label>名前: <input type="text" name="name" value="{{ $form->name }}"></label><br>
        <label>メールアドレス: <input type="text" name="mail_address" value="{{ $form->mail_address }}"></label><br>
        <label>年齢: <input type="number" name="age" value="{{ $form->age }}"></label><br>
        <label>得意な技術:
            <select name="tech_ID">
                @foreach ($technologies as $technology)
                    <option value="{{ $technology->tech_ID }}" {{ $form->tech_ID == $technology->tech_ID ? 'selected' : '' }}>
                        {{ $technology->well_known_language }}
                    </option>
                @endforeach
            </select>
        </label><br>
        <button type="submit">更新</button>
    </form>

    </table>
</body>

</html>