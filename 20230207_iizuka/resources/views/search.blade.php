@extends('layouts.default')
<style>
  .search_content{
    height:25%;
    width:90%;
    border:solid 2px #000000;
    padding:3% 0% 1% 2%;
  }
  .box{
    height:25%;
    width:90%;
    display:flex;  
  }
  .short{
    width:30%;
  }
  .short-form{
    width:100%;
    height:40px;
    border:1px solid #A5A5A5;
    border-radius:5px;
    margin-top:-10px;
  }
  .radio-form{
    width:10%;
    height:40px;
    margin-top:-10px;
    border:1px solid #A5A5A5;
    border-radius:5px;
  }
  .short-date-form{
    width:25%;
    height:40px;
    border-radius:5px;
    margin-top:-10px;
  }
  .label{
    width:12%;
    height:100%;
    font-size:20px;
    font-weight:bold;
  }
  .label-gender{
    width:10%;
    height:100%;
    font-size:20px;
    font-weight:bold;
    text-align:center;
  }
  .radio{
    width:40%;  
  }
  .end-box{
    height:35%;
    width:100%;
    margin-top:-1%;
    display:flex;
    flex-direction:column;
    justify-content:space-around;
    align-items:center;   
  }
  .button{
    width:15%;
    height:40px;
    margin:-10px, auto, 10px, 0;
    background-color:#000000;
    color:#FFFFFF;
    font-weight:bold;
    border-radius:10px;
  }
  .back{
    height:30px;
    padding-top:1px;

  }
  .button_delete{
    width:80%;
    height:30px;
    background-color:#000000;
    color:#FFFFFF;
    font-weight:bold;
    border-radius:10px;
  }
  .pagination{
    width:92%;
    height:10%;
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
  }
  .pagination2{
    height:22px;
  }
  .pagination3{
    padding:auto;
    margin-top:10px;
    height:20px;
  }
  .search_table{
    width:92%;
    height:35%;
    padding-top:10px;
    font-size:20px;
  }
  .th1{
    width:8%;
    text-align:center;
  }  
  .th2{
    width:8%;
    text-align:left;
  }
  .th3{
    width:5%;
    text-align:left;
  }
  .td3{
    width:5%;
    padding-left:10px;
    text-align:left;
  }
  .th4{
    width:10%;
    text-align:left;
  }
  .th5{
    width:50%;
    text-align:left;
    padding:0 30px 0 30px;
  }
  .td5{
    width:50%;
    text-align:left;
    padding:0 30px 0 30px;
  }
  .th6{
    width:7%;
    text-align:center;
  }
  span{
    width:3%;
    text-align:center;
    font-size:30px;
    font-weight:bold;
  }

</style>
@section('title','管理システム')
@section('subtitle', '管理システム')
@section('content')
<div class=wrapper></div>
  <div class="search_content">
    <form method="get" action="/contact/search" >
      <div class="box">
        <div class="label">
          <label for="fullname">お名前</label>
        </div>
        <div class="short">
        @csrf
        <input type="text" id="fullname" name="fullname" class="short-form">
        </div>
        <div class="label-gender">
          <label for="gender">性別</label>     
        </div>
        <div class="radio">
        <input type="radio" id="全て" name="gender" value="" checked="checked"  class="radio-form">
          <label for="men">全て</label>
        <input type="radio" id="men" name="gender" value="1" class="radio-form">
          <label for="men">男性</label>     
        <input type="radio" id="female" name="gender" value="2"   class="radio-form">
          <label for="female">女性</label>   
        </div>
      </div>
      <div class="box">
        <div class="label">
          <label for="from">登録日</label>
        </div>
        <input type="date" id="from" name="from" class="short-date-form">
        <span>～</span> 
        <input type="date"  name="until" class="short-date-form">        
      </div>
      <div class="box">
        <div class="label">
          <label for="email">メールアドレス</label>
        </div>
        <div class="short">
        <input type="text" id="email" name="email" class="short-form">
        </div>
      </div>
      <div class="end-box">
        <input type="submit" value="確認" class="button">
        <p><a href="/contact/find" class="back">リセット</a></p>
      </div>
    </form>
  </div>
  @if(!empty($contacts))
    <div class="pagination">
      
        <div class="pagination2">
          {{ $contacts->total() }}件中
          {{ $contacts->firstItem() }}〜{{ $contacts->lastItem() }} 件
        </div>
        <div class="pagination3">
          {{$contacts->appends(request()->query())->links('vendor.pagination.custom')}}
        </div>
           
    </div>
    <div class="search_table">
      <table>
        <tr class="tr1">
          <th class="th1">ID</th>
          <th class="th2">お名前</th>
          <th class="th3">性別</th>
          <th class="th4">メールアドレス</th>
          <th class="th5">ご意見</th>
          <th class="th6"></th>
        </tr>
        @foreach($contacts as $contact)
          <tr>
            <td class="th1"><p class="">{{$contact->id}}</p></td>
            <td class="th2"><p class="">{{$contact->fullname}}</p></td>
            <td class="td3"><p class="">{{config('user.sex.', $contact->gender)}}</p></td>
            <td class="th4"><p class="">{{$contact->email}}</p></td>
            <td class="td5"><p class="tdata ">{{$contact->opinion}}</p></td>
            <td class="th6">
              <form method="post" action="/contact/delete" >
                @csrf
                <input type="hidden" name="id" value="{{$contact->id}}">
                <button class="button_delete">削除</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  @endif
@endsection