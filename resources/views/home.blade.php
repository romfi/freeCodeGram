@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fmnl2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fmnl2-1.fna.fbcdn.net&_nc_ohc=aQEJO6e_QoIAX96HF_B&oh=a6ae88fd02f88fc51e9baea1eae8d641&oe=5ECEBCBA" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fmnl2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.106.921.921a/s640x640/84770545_2609265086061431_6387769783591162166_n.jpg?_nc_ht=instagram.fmnl2-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=g6v1bo9mnOUAX9mqJg8&oh=d6817ab897ee65df7db226fca8ef9a20&oe=5EC4FDED" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmnl2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=instagram.fmnl2-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=EjKFjxOFF6wAX-Wkwjo&oh=2e818bc3ae5c02276e7c6b382e28dc9c&oe=5EFC0CA4" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmnl2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.111.928.928a/s640x640/82967728_222124025469517_5532436576170466152_n.jpg?_nc_ht=instagram.fmnl2-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=LwggUpUFA3AAX8tx-IG&oh=eea4e79a682a0eef3cee0ccb955e5b90&oe=5EC3C23B" class="w-100">
        </div>
    </div>
</div>
@endsection
