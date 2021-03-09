@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-3 p-5"><img src="https://www.worldfuturecouncil.org/wp-content/uploads/2020/02/dummy-profile-pic-300x300-1.png" style ="height:55%;" class="rounded-circle" alt=""></div>
    <div class="col-9 pt-5">
    <div class="d-flex justify-content-between align-items-baseline">
    <h1>{{ $user->username }}</h1>
    <a href="#">Add new post</a>
    </div>
    <div class="d-flex">
    <div class="pr-5"><strong>153</strong> posts</div>
    <div class="pr-5"><strong>23k</strong> followers</div>
    <div class="pr-5"><strong>420</strong> following</div>
    </div>
    <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
    <div>{{ $user->profile->description}}</div>
    <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
        <img src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/65200601_1225577174288089_1934661298084200043_n.jpg?tp=1&_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=101&_nc_ohc=-j5shfppw0gAX8kCDTP&oh=ea2c18efbbf6fb5ad8e747f3082eb240&oe=60702F68" alt="" srcset="" class="w-100">
            </div>
        <div class="col-4"> 
        <img src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/65200601_1225577174288089_1934661298084200043_n.jpg?tp=1&_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=101&_nc_ohc=-j5shfppw0gAX8kCDTP&oh=ea2c18efbbf6fb5ad8e747f3082eb240&oe=60702F68" alt="" srcset="" class="w-100">
            </div>
        <div class="col-4"> 
        <img src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/65200601_1225577174288089_1934661298084200043_n.jpg?tp=1&_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=101&_nc_ohc=-j5shfppw0gAX8kCDTP&oh=ea2c18efbbf6fb5ad8e747f3082eb240&oe=60702F68" alt="" srcset="" class="w-100">
            </div>
    </div>
</div>
@endsection
