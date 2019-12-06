@extends('layout')
@section('title')
    Users
@endsection
@section('content')
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel Import Export Excel
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            </form>
            <p></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Users</h1>
                <br>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
