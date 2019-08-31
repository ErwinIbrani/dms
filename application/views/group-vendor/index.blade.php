@extends('layouts.app')
@section('page_title', 'Dashboard')

@section('content')
    @foreach($groups as $key => $group)
        {{ $group->group_name }}
    @endforeach
@endsection