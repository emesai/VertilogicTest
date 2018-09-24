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
    <div class="card col-12" style="float: left;margin-right: 25px;margin-bottom: 25px;">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-lg-6" style="margin-bottom: 10px;">
            <div class="personal-info" style="margin-bottom: 25px;">
              <h5 class="card-title">{{$user->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted" style="margin-bottom: 20px !important;">{{$user->username}}</h6>
              <h6 class="card-subtitle mb-2 text-muted"><span class="icon ion-md-mail" style="margin-right: 10px;"></span>{{$user->email}}</h6>
              <h6 class="card-subtitle mb-2 text-muted"><span class="icon ion-md-call" style="margin-right: 10px;"></span>{{$user->phone}}</h6>
              <h6 class="card-subtitle mb-2 text-muted"><span class="icon ion-md-globe" style="margin-right: 10px;"></span>{{$user->website}}</h6>
            </div>
            <div class="company-info">
              <h5 class="card-title" style="margin-bottom: 0px !important">Company</h5>
              <h5 class="card-title">{{$user->company->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$user->company->catchPhrase}}</h6>
              <h6 class="card-subtitle mb-2 text-muted">{{$user->company->bs}}</h6>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-5">
            <span class="icon ion-md-pin" style="float: left;margin-right: 10px;font-size: 20px;"></span>
            <h6 class="card-text" style="float: left;">
              {{$user->address->street}}<br>
              {{$user->address->suite}}<br>
              {{$user->address->zipcode}}
            </h6>
            <div style="clear: both;"></div>
            <div  id="map">
              <iframe
                width="600" 
                height="400" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0" 
                src="https://maps.google.com/maps?q={{$user->address->geo->lat}},{{$user->address->geo->lng}}&hl=es;z=14&amp;output=embed"
               >
              </iframe>
            </div>
          </div>

        </div>
        <div class="float-left" style="margin-top: 10px;">
          <a href="{{url('user')}}" class="card-link"><<< Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection