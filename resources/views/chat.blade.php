@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>hjkhkh</h1>
            <chat :user="{{ Auth::user() }}"/>
        </div>
    </div>
</div>
@endsection