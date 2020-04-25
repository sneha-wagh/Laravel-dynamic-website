@extends('layouts.backend_layout.admin_design')


@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $product ?? ''->image }}</h3>
       <p>{{ $product ?? ''->title }}</p>
       <p>{{ $product ?? ''->content }}</p>
      
    </div>
</div>
@endsection