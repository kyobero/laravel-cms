@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-end mb-2">

    <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>

</div>

    <div class="card card-default">

    <div class="card-header">Users</div>


    <div class="card-body">
        @if($users->count() > 0)
            <table class="table">

                <thead>

                    <th>Image</th>

                    <th>Name</th>

                    <th>Email</th>

                    <th></th>

                </thead>



                <tbody>

                    @foreach($users as $user)

                    <tr>
                    
                        <td>
                            
                        

                        </td>

                        <td>
                            
                            {{ $user->name }}

                        </td>
                    

                        <td>

                        {{ $user->email }}

                        </td>

                        <td>

                        @if(!$user->isAdmin())

                        <button class="btn btn-success btn-sm">Make Admin</button>

                        @endif
                            
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>
        @else

        <h3 class="text-center"> No users yet</h3>

        @endif

    </div>

</div>

@endsection