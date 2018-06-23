@extends('layouts.app')

@section('content')
Hoiee

@if(count($services) > 0) 
@foreach($services as $service)
<ul class="list-group">
        <li class="list-group-item">{{$service}}</li>
</ul>

@endforeach
@endif

@endsection

