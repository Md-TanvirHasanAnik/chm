@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hi boss!
                    <a href={{ route ('register.faculty') }}>
                
                    <button type="button" class="btn btn-success">Create Faculty</button>
                    </a>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection