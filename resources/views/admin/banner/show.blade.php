@extends('layouts.backend_layout.admin_design')


@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $banner ?? ''->image }}</h3>
       <p>{{ $banner ?? ''->title }}</p>
       <p>{{ $banner ?? ''->caption }}</p>
      
    </div>
</div>
@endsection