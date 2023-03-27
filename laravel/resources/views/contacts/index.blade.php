<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <h1>お問い合わせ</h1>
     <h1>contacts</h1>
    <a href="{{ route('contacts.create') }}">新規記録</a><br>
    <form method="get" action="{{ route('contacts.index') }}">
        <input type="text" name="search" placeholder="検索">
        <button>検索</button>
    </form>
    <table>
        </tr>
            <th>ID</th>
            <th>名前</th>
            <th>件名</th>
            <th>登録日</th>
        </tr>
        </tr>
        @foreach($contacts as $contact)
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td> {{ $contact->title }}</td>
            <td>{{ $contact->created_at }}</td>
            <td><a href="{{ route('contacts.show',['id' => $contact->id]) }}">詳細を見る</a><br></td>
        </tr>
    </table>
        @endforeach
        {{ $contacts -> links() }}
</body>
 </html>