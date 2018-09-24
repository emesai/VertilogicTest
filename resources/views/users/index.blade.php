@extends('master')
@section('title', 'User')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="float-left">
      User Data
    </div>
  </div>
  <div class="card-body">
    @foreach($users as $user)
    <div class="card col-md-5" style="float: left;margin-right: 25px;margin-bottom: 25px;">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-lg-6">
            <h5 class="card-title">{{$user->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted" style="margin-bottom: 20px !important;">{{$user->username}}</h6>
            <h6 class="card-subtitle mb-2 text-muted"><span class="icon ion-md-mail" style="margin-right: 10px;"></span>{{$user->email}}</h6>
            <h6 class="card-subtitle mb-2 text-muted"><span class="icon ion-md-call" style="margin-right: 10px;"></span>{{$user->phone}}</h6>
            <h6 class="card-subtitle mb-2 text-muted"><span class="icon ion-md-globe" style="margin-right: 10px;"></span>{{$user->website}}</h6>
          </div>
          <div class="offset-lg-1 col-md-12 col-lg-5">
            <span class="icon ion-md-pin" style="float: left;margin-right: 10px;font-size: 20px;"></span>
            <h6 class="card-text" style="float: left;">
              {{$user->address->street}}<br>
              {{$user->address->suite}}<br>
              {{$user->address->zipcode}}
            </h6>
          </div>
        </div>
        <div class="float-right" style="margin-top: 10px;">
          <a href="{{url('user/'.$user->id)}}" class="card-link">View Detail</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection