@extends('layout')

@section('title', 'ROMEO')

@section('head')
    @if(env('APP_ENV') == 'production')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106961629-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-106961629-1');
    </script>
    @endif
@endsection

@section('header')
    <div class="inner">
        <a href="{{ route('home.index') }}" class="image avatar"><img src="{{ asset('images/avatar.jpg') }}" alt="" /></a>
        <h1>
            <strong>Herman</strong><br />
            热爱焦糖瓜子的梦想家<br />
            五迷 健身 有猫
        </h1>
    </div>
    <div class="inner">
        <ul class="channel">
            @foreach($all_channels as $channel)
                @if(isset($current_channel) && $channel->id == $current_channel)
                    <li><a class="no-border current" href="{{ route('home.posts.channel', ['channel' => $channel->id]) }}">{{ $channel->channel }}</a></li>
                @else
                    <li><a class="no-border" href="{{ route('home.posts.channel', ['channel' => $channel->id]) }}">{{ $channel->channel }}</a></li>
                @endif
            @endforeach
        </ul>
        <ul class="channel">
            @foreach($all_tags as $tag)
                @if(isset($current_tag) && $tag->id == $current_tag)
                    <li><a  class="badge badge-outline-primary current" href="{{ route('home.posts.tag', ['tag' => $tag->id]) }}">{{ $tag->tag }}</a></li>
                @else
                    <li><a  class="badge badge-outline-primary" href="{{ route('home.posts.tag', ['tag' => $tag->id]) }}">{{ $tag->tag }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection