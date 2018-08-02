@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-inverse">
           

                <div class="panel-body">
                 
                  <h3>Wishlist</h3>

@if (count($favoritelist) > 0)

                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                     
                    </tr>
                    @foreach($favoritelist as $favorite)

                  
                    <tr>
                    <td>{{$favorite->title}}</td>
              
                    <td><a href="items\{{$favorite->id}}\unfavorite">Unfollow</a></td>
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
