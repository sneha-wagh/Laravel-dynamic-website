@extends('layouts.backend_layout.admin_design')


@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $footer ?? ''->image }}</h3>
       <p>{{ $footer ?? ''->title }}</p>
       <p>{{ $footer ?? ''->content }}</p>
      
    </div>
</div>
@endsection