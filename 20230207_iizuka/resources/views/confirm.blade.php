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
    text-align:center;
  }
  .opinion{
    font-size:20px;
    overflow-wrap: break-word;
  }
  .back{
    margin-top:10px;
    color:#000000;
  }

</style>
@section('title','????????????')
@section('subtitle', '????????????')
@section('content')
<div class="wrapper">
  <form action="/contact/thanks" method="post">
    @csrf
    <div class="box">
      <div class="label">
        <label>
          <p>?????????</p>
        </label>
      </div>
      <div class="short">
         <input type="hidden" name="fullname" value="{{$last_name}} {{$first_name}}" >
        <p class="answer">{{$last_name}} {{$first_name}}</p>
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label>
          <p>??????</p>
        </label>
      </div>
      <div class="radio">
         <input type="hidden" name="gender" value="{{$form['gender']}}" >  
         @if($gender=='1')
          <p class="answer">??????</p>   
         @elseif($gender=='2')
          <p class="answer">??????</p>
         @endif    
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label>
          <p>?????????????????????</p>
        </label>
      </div>
      <div class="long">
        <input type="hidden" name="email" value="{{$form['email']}}" >         
        <p class="answer">{{$form['email']}}</p>
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label>
          <p>?????????????????????</p>
        </label>
      </div>
      <div class="long">
        <input type="hidden" name="postcode" value="{{$form['zip11']}}" >               
        <p class="answer">???{{$form['zip11']}}</p>
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label>
          <p>??????</p>
        </label>
      </div>
      <div class="long">
        <input type="hidden" name="address" value="{{$form['addr11']}}" >         
      <p class="answer">{{$form['addr11']}}</p>
      </div>
    </div>
    <div class="box">
      <div class="label">
        <label>
          <p>?????????</p>
        </label>
      </div>
      <div class="long">
        <input type="hidden" name="building_name" value="{{$form['building_name']}}" >         
        <p class="answer">{{$form['building_name']}}</p>
      </div>
    </div>
    <div class="large-box">
      <div class="label">
        <label>?????????</label>
      </div>
      <div class="large">
        <input type="hidden" name="opinion" value="{{$form['opinion']}}" >         
        <p class="opinion">{{$form['opinion']}}</p>
      </div>
    </div>
    <div class="end-box">
      <input type="submit" value="??????" class="button">
      <a href="javascript:history.back()" class="back">????????????</a>
    </div>
  </form>
</div>
@endsection
