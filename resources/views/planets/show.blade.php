<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>名前:{{ $planet->name }}</h3>
    <h3>名前(英語):{{ $planet->eng_name }}</h3>
    <h3>半径:{{ $planet->radius }}</h3>
    <h3>重量:{{ $planet->weight }}</h3>
    <a href="{{ route('planets.index') }}">戻る</a>
</body>

</html>
