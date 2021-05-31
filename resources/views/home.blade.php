@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" class="rounded-circle">
    </div>
    <div class="col-9 pt-5">
        <div><h1>{{ $user->username}}</h1></div>
    <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>23k</strong> followers</div>
            <div class="pr-5"><strong>212</strong> following</div>     
    </div>
    <div class="pt-4 font-weight-bold">{{ $user->profile->title }} </div>
    <div class="">{{$user->profile->description }}</div>
    <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
</div>

    <div class="row pt-5">
    <div class="col-4">
        <img src="https://image.shutterstock.com/image-photo/big-ben-westminster-bridge-red-600w-583939735.jpg" class="w-100">
    </div>

    <div class="col-4">
        <img src="https://image.shutterstock.com/image-illustration/maritime-traffic-jam-container-cargo-600w-1943891122.jpg" class="w-100">
    </div>

    <div class="col-4">
        <img src="https://image.shutterstock.com/image-photo/aerial-view-on-thames-london-600w-222417766.jpg" class="w-100">
    </div>

</div>
</div>
@endsection
