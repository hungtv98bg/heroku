@extends('layouts.app')

@section('title')
/ Lợi nhuận
@endsection

@section('content')

@role('admin')
    @include('revenue.admin')
@endrole


@role('pharmacy')
@include('revenue.pharmacy')
@endrole

@endsection
