@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="animate fadeIn">
    <div class="col-md-12">
      <div class="panel panel-default">
      <div class="panel-heading">Users</div>
        <div class="panel-body">
          <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm" title="Add New User">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New
          </a>
          <a href="{{ route('users.trashed') }}" class="btn btn-success btn-sm" title="All Posts">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i> Trashed List
          </a>
          <br/>
            @if (Session::get('message') != Null)
              <div class="row">
                  <div class="col-md-9">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          {{ Session::get('message') }}
                      </div>
                  </div>
              </div>
            @endif


            <br/>
            <div class="table-responsive">
                  
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Online</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            @if($user->isOnline())
                                <span style="color:green">Online</span>
                            @else
                                <span style="color:red">Offline</span>
                            @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>
                            <a title="Show User" href="{{ route('users.show', ['id'=> $user->id]) }}" class="btn btn-primary"><span class="fa fa-newspaper-o"></span></a>
                            <a title="Edit article" href="{{ route('users.edit', ['id'=> $user->id]) }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <button title="Delete user" type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_user_{{ $user->id  }}"><span class="fa fa-trash-o"></span></button>
                        </td>
                    </tr>

                    <div class="modal fade" id="delete_user_{{ $user->id  }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <form class="" action="{{ route('users.destroy', ['id' => $user->id]) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header bg-red">
                                <h4 class="modal-title" id="mySmallModalLabel">Delete user</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                <div class="modal-body">
                                Are you sure to delete user: <b>{{ $user->title }} </b>?
                                </div>
                                <div class="modal-footer">
                                <a href="{{ url('/users') }}">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                </a>
                                <button type="submit" class="btn btn-outline" title="Delete" value="delete">Delete</button>
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- Pagination -->
            <div class="pagination justify-content-center mb-4">
                {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>
@endsection
