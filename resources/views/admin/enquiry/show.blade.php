@extends('layouts.backend_layout.admin_design')

@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $enquiry ?? ''->name }}</h3>
       <p>{{ $enquiry ?? ''->email }}</p>
       <p>{{ $enquiry ?? ''->message }}</p>
    </div>
</div>
@endsection