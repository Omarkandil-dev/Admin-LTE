@extends('layout.app')

@section('title')
 Welcome admin    
@endsection

@section('content')
<div class="container">

    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Home</h2>
                </div>
                <div class="card-body">
           
                    <form method="POST" action="{{route('logout') }}">
                        @csrf
                    <button type="submit">
                        log out</button></form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection