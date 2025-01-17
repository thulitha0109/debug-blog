@extends('layouts.app')

@section('content')

   <div class="panel panel-default">
   <div class="panel-heading">
        Users
    </div>
        <div class="panel-body">
        <table class="table table-hover">
            <thead>
                    <th>
                Image
                    </th>
                    <th>
                Name
                    </th>
                     <th>
                Permissions
                     </th>
                     <th>
                Delete
                     </th>
            </thead>
            <tbody>
            
                
                    @foreach($users as $user)

                        <tr>
                          <td>
                            <img src="{{asset($user->avatar)}}" alt="" width="60px" height="60">
                          </td>
                          <td>
                            {{$user->name}}
                          </td>
                          <td>
                            @if($user->admin)
                            <a href="{{route('user.not.admin', ['id' => $user->id])}}" class="btn btn-xs btn-danger">Remove Permissions</a>
                            @else
                              <a href="{{route('user.admin', ['id' => $user->id])}}" class="btn btn-xs btn-success">Make admin</a>
                            @endif
                          </td>
                          <td>
                            delete
                          </td>
                        </tr>

                    @endforeach 
               

            </tbody>
        </table>
        </div>
   </div>

@endsection