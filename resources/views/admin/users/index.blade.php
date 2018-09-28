@extends('layouts.admin')

@section('content')
    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($users)
            {{--print_r($users);--}}
            {{--exit();--}}
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img src="{{$user->photo ? $user->photo->photo : "http://placehold.it/10*10"}}" height="50" width="60" alt=""></td>
                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                    <td>{{$user->is_active==1?'Active':'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>

                </tr>
             @endforeach
        @endif
        </tbody>
    </table>

@stop