<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>編集画面</h1>
    </br>
    <form method = "post" action="{{ route('contacts.update', ['id' => $contact->id]) }}">
        @csrf
        <label for="name">氏名</label></br>
        <input type="text" id="name" name="name" value="{{ $contact->name }}"></br>
        <label for="title">件名</label></br>
        <input type="text" id="title" name="title" value="{{ $contact->title }}"></br>
        <label for="email">メールアドレス</label></br>
        <input type="email" id="email" name="email" value="{{ $contact->email }}"></br>
        <label for="url">ホームページ</label></br>
        <input type="url" id="url" name="url" value="{{ $contact->url }}"></br>
        <label for="gender">性別</label></br>
        <input type="radio" id="gender" name="gender" value="0" @if($contact->gender === 0) checked @endif>男性</br>
        <input type="radio" id="gender" name="gender" value="1" @if($contact->gender === 1) checked @endif>女性</br>
        <label for="age">年齢</label></br>
        <select name="age" id="age">
            <option value="">選択してください</option>
            <option value="1" @if($contact->age === 1) selected @endif>～19歳</option>
            <option value="2" @if($contact->age === 2) selected @endif>20歳～29歳</option>
            <option value="3" @if($contact->age === 3) selected @endif>30歳～39歳</option>
            <option value="4" @if($contact->age === 4) selected @endif>40歳～49歳</option>
            <option value="5" @if($contact->age === 5) selected @endif>50歳～59歳</option>
            <option value="6" @if($contact->age === 6) selected @endif>60歳～</option>
        </select></br>
        <label for="contact">お問い合わせ内容</label></br>
        <input type="textarea" id="contact" name="contact" value="{{ $contact->contact }}" ></br>
        <button>更新する</button>
    </form>

</body>
</html>