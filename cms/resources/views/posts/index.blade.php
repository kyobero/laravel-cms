@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-end mb-2">

    <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>

</div>

    <div class="card card-default">

    <div class="card-header">Posts</div>


    <div class="card-body">
        @if($posts->count() > 0)
            <table class="table">

                <thead>

                    <th>Image</th>

                    <th>Title</th>

                    <th>Category</th>

                    <th></th>

                </thead>



                <tbody>

                    @foreach($posts as $post)

                    <tr>
                    
                        <td>
                            
                        <!--<img src="{{ $post->image }}"  alt=""> -->
                        <!-- {{ $post->image }}  -->

                        <!-- <img src="{{ Storage::url("/app/public/{$post->image}") }}" alt="" /> -->

                        <!-- <img src="{{ public_path('cms\public\storage\posts\blQWfZ6VyCsjUFte5bsRLaWpSzl6cvpihhSNHxTV.png')}}" alt="" /> -->

                        <img src="/storage/{{ $post->image }}" width="60px" height="60px"/>

                        <!-- http://127.0.0.1:8000/storage/posts/blQWfZ6VyCsjUFte5bsRLaWpSzl6cvpihhSNHxTV.png -->
                        

                        </td>

                        <td>
                            
                            {{ $post->title }}

                        </td>

                        <td>

                        <a href="{{ route('categories.edit', $post->category->id) }}">
                                {{ $post->category->name }}
                            </a>
                           
                        </td>

                        @if(!$post->trashed())
                        <td>

                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>

                        </td>
                        @else
                            <td>

                               <form action="{{ route('restore-posts', $post->id) }}" method="POST">
                                  @csrf

                                  @method('PUT')
                                    <button class="btn btn-info btn-sm">Restore</button>

                               </form> 

                            </td>
                        @endif

                        <td>

                        <form action="{{ route ('posts.destroy', $post->id) }}" method="POST">

                        @csrf
                        
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                        {{ $post->trashed() ? 'Delete': 'Trash' }}
                
                        </button>

                        </form>
                        
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>
        @else

        <h3 class="text-center"> No posts yet</h3>

        @endif

    </div>

</div>

@endsection