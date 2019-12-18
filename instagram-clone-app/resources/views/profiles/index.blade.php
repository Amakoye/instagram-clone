@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mx-auto">
        <div class="col-md-3 pt-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
        <div class="col-md-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->username}}</div>
                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                <a href="/p/create">Add Post</a>
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan()
            <div class="d-flex">
                
                <div class="pr-5"><strong>{{ $postCount}}</strong> posts</div>
                <div class="pr-5"><strong>{{$followersCount}}</strong> followers</div>
                <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div class="">{{$user->profile->description}}</div>
            <div class=""><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-md-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100" alt="">
                </a>
            </div>
        @endforeach    
    </div>
</div>
@endsection
