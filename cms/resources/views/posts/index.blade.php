@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-end mb-2">

    <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>

</div>

    <div class="card card-default">

    <div class="card-header">Posts</div>


    <div class="card-body">

        <table class="table">

        <thead>

            <th>Image</th>

            <th>Title</th>

        </thead>

        <tbody>

            @foreach($posts as $post)

            <tr>
            
                <td>
                    
                   <!--<img src="{{ $post->image }}"  alt=""> -->
                   <!-- {{ $post->image }}  -->

                   <!-- <img src="{{ Storage::url("/app/public/{$post->image}") }}" alt="" /> -->

                   <!-- <img src="{{ public_path('cms\public\storage\posts\blQWfZ6VyCsjUFte5bsRLaWpSzl6cvpihhSNHxTV.png')}}" alt="" /> -->

                   <img src="/storage/{{$post->image}}"/>
                   <!-- http://127.0.0.1:8000/storage/posts/blQWfZ6VyCsjUFte5bsRLaWpSzl6cvpihhSNHxTV.png -->
                  

                </td>

                <td>
                    
                    {{ $post->title }}

                </td>

            </tr>

            @endforeach

        </tbody>

        </table>

    </div>

</div>

@endsection