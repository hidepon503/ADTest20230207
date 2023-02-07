@extends('layouts.default')
<style>
div{
  width:40%;
  height:50%;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  border:solid;
}
.button{
  width:40%;
  height:40px;
  background-color:#000000;
  color:#FFFFFF;
  font: 16px;
  font-weight:bold;
  border-radius:10px;
  text-align:center;
}
p{
  height:20%;
  font-size:36px;
}
</style>
@section('title','Thanks')
@section('content')
<div>
  <p>ご意見いただきありがとうございました。</p>
  <button type="button" onclick="location.href='https://coachtech.site/'" class="button">トップページへ</button>
</div>
@endsection
