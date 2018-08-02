@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-inverse">
           

                <div class="panel-body">
                 
                  <h3>Wishlist</h3>

@if (count($favorites) > 0)

                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                     
                    </tr>
                    @foreach($favorites as $favorite)

                  
                    <tr>
                    <td>{{$favorite->user->name}}</td>
              
                        <td>{!!Form::open(['action' => ['ItemsController@destroy', $favorite->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
