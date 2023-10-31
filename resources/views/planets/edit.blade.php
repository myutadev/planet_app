<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>惑星情報更新</title>
</head>

<body>
    <h1>惑星情報更新</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('planets.update', $planet) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="name">名前</label>
        <input type="text" name="name" id="name" value="{{ old('name', $planet->name) }}"><br>
        <label for="eng_name">名前(英語)</label>
        <input type="text" name="eng_name" id="eng_name" value="{{ old('eng_name', $planet->eng_name) }}"><br>
        <label for="radius">半径</label>
        <input type="number" name="radius" id="radius" value="{{ old('radius', $planet->radius) }}"><br>
        <label for="weight">重量</label>
        <input type="number" name="weight" id="weight" value="{{ old('weight', $planet->weight) }}"><br>
        <input type="submit" value="更新">
    </form>
    <a href="{{ route('planets.index') }}">戻る</a>
</body>

</html>
