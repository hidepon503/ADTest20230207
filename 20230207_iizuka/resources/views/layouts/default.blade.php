<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="discription" content="当メディアの掲載記事、ご意見、ご質問などは下記よりお問い合わせください。運営会社である株式会社estraより返信させて頂きます。">
  <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
  <link rel="icon" href="{{asset('/favicon1.ico')}}">
  <link rel="apple-touch-icon" type="image/png"sizes="180x180" href="{{asset('/apple-touch-icon.png')}}">
  <title>@yield('title')</title>
</head>
<style>
  body{
    font-size:16px;
  }
  .container {
    height:100%;
    width:100%;
    display:flex;
    justify-content:center;
  }
  h1{
    font:bold;
    font-size: 46px;
    margin:20px 0 20px 0;
    text-align:center;
  }
</style>

<body>
  <h1>@yield('subtitle')</h1>
  <div class="container">
    @yield('content')
  </div>
  
  <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</body>
</html>