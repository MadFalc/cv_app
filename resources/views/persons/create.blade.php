@extends('layouts.app')

@section('body')

    <form method="POST" action="/profile">
        @csrf
    </form>

@endsection