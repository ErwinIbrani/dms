@extends('layouts.app')
@section('page_title', 'Group Vendor')

@section('content')
    @foreach($groups as $key => $group)
        {{ $group->group_name }}
    @endforeach
@endsection