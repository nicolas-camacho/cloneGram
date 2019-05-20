@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbaq5-1.fna.fbcdn.net/vp/b13b343c3965e403a0eec21e67d5513d/5D6D7D47/t51.2885-19/s150x150/33041264_353505415176842_7684491538235129856_n.jpg?_nc_ht=instagram.fbaq5-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>189</strong> posts</div>
                <div class="pr-5"><strong>233</strong> followers</div>
                <div class="pr-5"><strong>1,495</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fbaq5-1.fna.fbcdn.net/vp/379720379f72d3c0721d5cc4d4d0ae79/5D9CDD9F/t51.2885-15/sh0.08/e35/s640x640/43028263_610471199368469_2573946356043251517_n.jpg?_nc_ht=instagram.fbaq5-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbaq5-1.fna.fbcdn.net/vp/fc140390e98085cf67777218e401898d/5D63273F/t51.2885-15/sh0.08/e35/s640x640/42400953_909821129207432_5582143963570556964_n.jpg?_nc_ht=instagram.fbaq5-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbaq5-1.fna.fbcdn.net/vp/a52f75642fc749fc32dd1f7474eb3142/5D690ABD/t51.2885-15/e35/59657639_417927138939803_4536913186304568694_n.jpg?_nc_ht=instagram.fbaq5-1.fna.fbcdn.net" class="w-100">
        </div>
    </div>
</div>
@endsection
