@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="animate fadeIn">
    <div class="col-md-12">
      <div class="panel panel-default">
      <div class="panel-heading">Tags <a href="{{ url('/tags/create') }}" class="btn btn-success btn-sm float-right" title="Add New Tag">
        <span data-feather="plus"></span> Add New
      </a></div>
        <div class="panel-body">
            @include('partials.admin._messages')
            <div class="table-responsive">
              <table class="table table-hover table-striped table-sm">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Posted On</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->name }}</td>
                        <td>{{ date('d F Y', strtotime($tag->created_at)) }}</td>
                        <td>
                            <a title="View" href="{{ route('tags.show', ['id'=> $tag->id]) }}" class="btn btn-primary"><span data-feather="eye"></span></a>&nbsp;<a title="Edit tag" href="{{ route('tags.edit', ['id'=> $tag->id]) }}" class="btn btn-warning"><span data-feather="edit"></span></a>&nbsp;<button title="Delete tag" type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_tag_{{ $tag->id  }}"><span data-feather="delete"></span></button>
                        </td>
                    </tr>

                    <div class="modal fade" id="delete_tag_{{ $tag->id  }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <form class="" action="{{ route('tags.destroy', ['id' => $tag->id]) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header bg-red">
                                <h4 class="modal-title" id="mySmallModalLabel">Delete tag</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                <div class="modal-body">
                                Are you sure to delete tag: <b>{{ $tag->name }} </b>?
                                </div>
                                <div class="modal-footer">
                                <a href="{{ url('/tags') }}">
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
                {{ $tags->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>
@endsection
