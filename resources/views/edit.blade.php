<form method="POST" action="{{ route('update', $form->formID) }}">
    @csrf
    @method('POST')  <!-- HTTPメソッドをPOSTにする -->
    <div>
        <label for="name">名前:</label>
        <input type="text" name="name" id="name" value="{{ $form->name }}" required>
    </div>

    <div>
        <label for="mailaddres">メールアドレス:</label>
        <input type="email" name="mailaddres" id="mailaddres" value="{{ $form->mailaddres }}" required>
    </div>

    <div>
        <label for="age">年齢:</label>
        <input type="number" name="age" id="age" value="{{ $form->age }}" required>
    </div>

    <div>
        <label for="techID">得意な言語:</label>
        <select name="techID" id="techID">
            @foreach ($technologies as $technology)
                <option value="{{ $technology->techID }}" {{ $technology->techID == $form->techID ? 'selected' : '' }}>
                    {{ $technology->lang }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">更新</button>
</form>
