@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-inverse">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<a href="/items/create" class="btn btn-primary">Add Item</a>
                  <h3>Your Items</h3>

@if (count($items) > 0)

                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($items as $item)
                    <tr>
                    <td>{{$item->title}}</td>
                    <td><a href="/items/{{$item->id}}/edit" class="btn btn-default">Edit</a></td>
                        <td>{!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                
                                {!!Form::close()!!}</td>
                    </tr>
                    @endforeach
                </table>
           @else
           <p>You have no items</p>
                @endif
              

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
