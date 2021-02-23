@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-3 p-5"><img src="https://www.worldfuturecouncil.org/wp-content/uploads/2020/02/dummy-profile-pic-300x300-1.png" style ="height:55%;" class="rounded-circle" alt=""></div>
    <div class="col-9 pt-5">
    <div><h1>{{ $user->username }}</h1></div>
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
        <img src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/e35/c257.0.565.565a/68861457_139714043946051_7415667963739576802_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=103&_nc_ohc=3dVL-ACZ28EAX-NCIjU&tp=1&oh=de6678cfe69b4b9c4bb3aeca5e2f95d7&oe=603DA5CE" alt="" srcset="" class="w-100">
            </div>
        <div class="col-4"> 
        <img src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/e35/c257.0.565.565a/68861457_139714043946051_7415667963739576802_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=103&_nc_ohc=3dVL-ACZ28EAX-NCIjU&tp=1&oh=de6678cfe69b4b9c4bb3aeca5e2f95d7&oe=603DA5CE" alt="" srcset="" class="w-100">
            </div>
        <div class="col-4"> 
        <img src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-15/e35/c257.0.565.565a/68861457_139714043946051_7415667963739576802_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_cat=103&_nc_ohc=3dVL-ACZ28EAX-NCIjU&tp=1&oh=de6678cfe69b4b9c4bb3aeca5e2f95d7&oe=603DA5CE" alt="" srcset="" class="w-100">
            </div>
    </div>
</div>
@endsection
