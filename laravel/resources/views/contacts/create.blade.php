<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>新規作成</h1>
    </br>
    <form method = "post" action="{{ route('contacts.store')}}">
        @csrf
        <label for="name">氏名</label></br>
        <input type="text" id="name" name="name" value="{{ old('name') }}"></br>
        <label for="title">件名</label></br>
        <input type="text" id="title" name="title" value="{{ old('title') }}"></br>
        <label for="email">メールアドレス</label></br>
        <input type="email" id="email" name="email" value="{{ old('email') }}"></br>
        <label for="url">ホームページ</label></br>
        <input type="url" id="url" name="url" value="{{ old('url') }}"></br>
        <label for="gender">性別</label></br>
        <input type="radio" id="gender" name="gender" value="0" {{ old('gender') == 0 ? 'checked': '' }}>男性</br>
        <input type="radio" id="gender" name="gender" value="1" {{ old('gender') == 1 ? 'checked': '' }}>女性</br>
        <label for="age">年齢</label></br>
        <select name="age" id="age">
            <option value="">選択してください</option>
            <option value="1" {{ old('age') == 1 ? 'selected': '' }}>～19歳</option>
            <option value="2" {{ old('age') == 2 ? 'selected': '' }}>20歳～29歳</option>
            <option value="3" {{ old('age') == 3 ? 'selected': '' }}>30歳～39歳</option>
            <option value="4" {{ old('age') == 4 ? 'selected': '' }}>40歳～49歳</option>
            <option value="5" {{ old('age') == 5 ? 'selected': '' }}>50歳～59歳</option>
            <option value="6" {{ old('age') == 6 ? 'selected': '' }}>60歳～</option>
        </select></br>
        <label for="contact">お問い合わせ内容</label></br>
        <input type="textarea" id="contact" name="contact" >{{ old('contact') }}</br>
        <input type="checkbox" id="caution" name="caution">注意事項に同意する</br>
        <button>新規記録</button>
    </form>

</body>
</html>