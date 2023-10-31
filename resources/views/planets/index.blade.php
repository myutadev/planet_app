<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星一覧</title>
</head>

<body>
    <h1>惑星一覧</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <th>{{ $planet->name }}</th>
                <th>{{ $planet->eng_name }}</th>
                <th>{{ $planet->radius }}</th>
                <th>{{ $planet->weight }}</th>
                <th><a href="{{ route('planets.show', $planet) }}">詳細</a></th>
                <th><a href="{{ route('planets.edit', $planet) }}">編集</a></th>
                <th>
                    <form action="{{ route('planets.destroy', $planet) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか?')){return false};">
                    </form>
                </th>
            </tr>
        @endforeach

    </table>

    <a href="{{ route('planets.create') }}">新規登録</a>
</body>

</html>
