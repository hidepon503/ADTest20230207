@extends('layouts.default')
<style>
  .wrapper{
    height:80vh;
    width:50%;  

  }
  .box{
    height:10%;
    width:90%;
    margin:20px auto;
    display:flex;    
  }
  .box2{
    height:10%;
    width:90%;
    margin:-20px auto 20px;
    display:flex;    
  }

  .large-box{
    height:15%;
    width:90%;
    margin:20px auto;
    display:flex;   
  }
  .end-box{
    height:10%;
    width:90%;
    margin:20px auto;
    display:flex;
    flex-direction:column;
    align-items:center;   
  }
  .label{
    width:20%;
    height:100%;
    font-size:20px;
    font-weight:bold;
  }
  span{
    color:#FF0000;
  }
  .short{
    width:40%;
  }
  .radio{
    width:40%;
    display:flex;
  }
  .radio-form{
    width:30%;
    height:40px;
    margin:-10px 0 0 0px;
    border:1px solid #A5A5A5;
    border-radius:5px;
  }
  .short-form{
    width:90%;
    height:40px;
    margin-top:-10px;
    border:1px solid #A5A5A5;
    border-radius:5px;
  }
  .long{
    width:80%;
  }
  .long-form{
    width:95%;
    height:40px;
    margin-top:-10px;
    border:1px solid #A5A5A5;
    border-radius:5px;
  }
  .semilong-form{
    width: 91%;
    height:40px;
    margin-top:-10px;
    border:1px solid #A5A5A5;
    border-radius:5px;
    font-size:20px;
    text-transform:lowercase;
  }
  .large{
    width: 80%;
  }
  .large-form{
    width: 95%;
    height:120px;
    margin-top:-10px;
    border:1px solid #A5A5A5;
    border-radius:5px;
    display:block;
    resize:none;
    font-size:20px;
  }
  .post-icon{
    font-size:20px;
    display:inline;
  }
  .error{
    margin:5px 0 0 10px;
    padding-top:5px;
    font-size:16px;
    font-weight:normal;
    color:#FF0000;    
  }

  .sample{
    color:#A5A5A5;
    margin:5px 0 0 10px;
  }
  .button{
    width:15%;
    height:40px;
    background-color:#000000;
    color:#FFFFFF;
    font-weight:bold;
    border-radius:10px;
  }


</style>
@section('title','お問い合わせ')
@section('subtitle', 'お問い合わせ')
@section('content')
<div class="wrapper">
  <form method="POST" action="/confirm">
    @csrf
    <div class="box">
      <div class="label">
        <label for="name">お名前<span>※</span></label>
      </div>
      <div class="short">
        <input type="text" id="name" name="last_name" class="short-form">
        <p class="sample">例） 山田</p>
        @if ($errors->has('last_name'))
          @foreach($errors->get('last_name') as $message)
            <p class="error">{{ $message }} </p>
          @endforeach
        @endif
      </div>
      <div  class="short">
        <input type="text" id="name" name="first_name" class="short-form">
        <p class="sample">例） 太郎 </p>
        @if ($errors->has('first_name'))
          @foreach($errors->get('first_name') as $message)
            <p class="error">{{ $message }} </p>
          @endforeach
        @endif
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label for="gender">性別<span>※</span></label>     
      </div>
      <div class="radio">
        <!--ラジオボタンの色変更-->
        <input type="radio" id="men" name="gender" value="男性" checked="checked" class="radio-form">
        <label for="men">男性</label>     
        <input type="radio" id="female" name="gender" value="女性" class="radio-form">
        <label for="female">女性</label>   
      </div>
    </div>
    <div class="box2">
      <div class="label">
        <label for="email">メールアドレス<span>※</span></label>
      </div>
      <div class="long">
        <input type="email" id="email" name="email" class="long-form">
        <p class="sample">例） test@example.com</p>
        @if ($errors->has('email'))
          @foreach($errors->get('email') as $message)
            <p class="error">{{ $message }} </p>
          @endforeach
        @endif
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label for="postal_code">郵便番号<span>※</span></label>
      </div>
      <div class="long">
        <p class="post-icon">〒</p>
        <!--自動で全角を半角にするにはJAVAscriptの知識が必要。今は出来ない。。。-->
        <input type="text"  id="postal_code" name="zip11"  class="semilong-form" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');"  >
        <p class="sample">例） 123-456</p>
        @if ($errors->has('zip11'))
          @foreach($errors->get('zip11') as $message)
            <p class="error">{{ $message }} </p>
          @endforeach
        @endif
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label for="address">住所<span>※</span></label>
      </div>
      <div class="long">
        <input type="text" id="address" name="addr11" size="60" class="long-form">
        <p class="sample">例） 東京都渋谷区千駄ヶ谷1-2-3</p>
        @if ($errors->has('addr11'))
          @foreach($errors->get('addr11') as $message)
            <p class="error">{{ $message }} </p>
          @endforeach
        @endif
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label for="building_name">建物名</label>
      </div>
      <div class="long">
        <input type="text" id="building_name" name="building_name" class="long-form">
        <p class="sample">例） 千駄ヶ谷マンション101</p>
        @if ($errors->has('building_name'))
          @foreach($errors->get('building_name') as $message)
            <p class="error">{{ $message }} </p>
          @endforeach
        @endif
      </div>
    </div>
    <div class="large-box">
      <div class="label">
        <label for="comment">ご意見<span>※</span></label>
      </div>
      <div class="large">
        <textarea name="comment" id="comment" cols="30" rows="10" class="large-form"></textarea>
        @if ($errors->has('comment'))
            @foreach($errors->get('comment') as $message)
            <p class="error">{{ $message }} </p>
            @endforeach
        @endif
      </div>
    </div>
    <div class="end-box">
        <input type="submit" value="確認" class="button">
    </div>
  </form>
</div>



@endsection
