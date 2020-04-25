@extends('layouts.backend_layout.admin_design')


@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $header ?? ''->image }}</h3>
       <p>{{ $header ?? ''->title }}</p>
       <p>{{ $header ?? ''->content }}</p>
      
    </div>
</div>
@endsection