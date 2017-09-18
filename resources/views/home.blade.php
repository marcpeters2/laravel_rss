<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/app.css" rel="stylesheet">
    <title>Laravel RSS Feed Demo</title>
</head>

<body>
<div id="home">
    <div class="news__banner">Top HackerNews Posts</div>
    <ol class="news">
        @foreach($rssData->item as $item)
            <li class="news__item">
                <a href="{{$item->link}}">
                {{$item->title}}
                <span class="news__item__hostname">({{parse_url($item->link, PHP_URL_HOST)}})</span>
                </a>
            </li>
        @endforeach
    </ol>
</div>
</body>

</html>
