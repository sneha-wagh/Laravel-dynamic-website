@extends('layouts.backend_layout.admin_design')


@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $about ?? ''->title }}</h3>
       <p>{{ $about ?? ''->image }}</p>
       <p>{{ $about ?? ''->content }}</p>
      
    </div>
</div>
@endsection