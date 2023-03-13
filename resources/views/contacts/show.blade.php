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
     <h1>詳細画面</h1>
    <table>
        </tr>
            <th>ID</th>
            <th>名前</th>
            <th>件名</th>
            <th>メールアドレス</th>
            <th>ホームページ</th>
            <th>性別</th>
            <th>年齢</th>
            <th>お問い合わせ内容</th>
        </tr>
        </tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td> {{ $contact->title }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->url }}</td>
            <td>{{ $gender }}</td>
            <td>{{ $age }}</td>
            <td>{{ $contact->contact }}</td>
        </tr>
    </table>
    <form method = "get" action="{{ route('contacts.edit', ['id' => $contact->id]) }}">
    <button>編集する</button>
    </form>
    <form id="delete_{{ $contact->id }}" method ="post" action="{{ route('contacts.destroy', ['id' => $contact->id]) }}">
        @csrf
    <a href="#" data-id="{{ $contact->id }}" onclick="deletePost(this)">削除</a>
    <!-- <button>削除</button> -->
    </form>
    <!-- <div>ID</div>
    <div>{{ $contact->id }}</div>
    <div>名前</div>
    <div>{{ $contact->name }}</div>
    <div>件名</div>
    <div>{{ $contact->title }}</div>
    <div>メールアドレス</div>
    <div>{{ $contact->email }}</div>
    <div>ホームページ</div>
    <div>{{ $contact->url }}</div>
    <div>性別</div>
    <div>{{ $contact->gender }}</div>
    <div>年齢</div>
    <div>{{ $contact->age }}</div>
    <div>お問い合わせ内容</div>
    <div>{{ $contact->contact }}</div> -->
    <script>
        function deletePost(e) {
            'use strict'
            if (confirm('本当に削除していいですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</body>
 </html>