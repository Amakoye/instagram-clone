@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        
        <div class="col-md-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:35px;"alt="">
                </div>
                <div>
                    <div class="font-weight-bold d-flex">
                        <a class="text-dark pr-2" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                        <li></li>
                        <a class="" href="#">follow</a>
                    </div>
                </div>
            </div>
            <hr>
            <p>
                <span class="font-weight-bold"><a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username." "}}</a>
                </span>{{$post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection