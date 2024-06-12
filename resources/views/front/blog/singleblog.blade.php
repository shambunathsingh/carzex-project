@extends('front.layout.app')

@section('content')
    <style>
       
        .showcase {
            /* background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center/cover; */
            height: 500px;
            color: #51c5d7;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background: #000;
        }
        .showcase h1 {
            font-size: 4rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .showcase p {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        .main-content {
            background: #fff;
            padding: 2rem;
            margin-top: -50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .main-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .main-content p {
            margin-bottom: 1.5rem;
        }
        .main-content .author-info {
            font-style: italic;
            color: #555;
        }
       
       
    </style>
{{-- {{$post}} --}}
  <section class="showcase">
    <div class="container">
        <h1>Welcome to My Blog</h1>
        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
        <a href="#content" class="btn btn-primary btn-lg">Read More</a> --}}
    </div>
</section>

<div id="content" class="container main-content mb-5">
    <h1>{{$post->name}}</h1>
    <p class="author-info">
        By <strong>{{ $post->author ? $post->author : 'admin' }}</strong> on <em>{{ $post->created_at->format('F j, Y') }}</em>
    </p>
    <div>
    <p>{{$post->content}}</p>
    </div>
</div>

@endsection
