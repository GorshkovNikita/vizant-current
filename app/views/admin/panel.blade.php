@extends('layouts.admin-layout')

@section('title') Администраторская панель @stop

@section('content')


<div>
    @foreach($orders as $order)
            <p>{{ $order->email }}</p>
    @endforeach
</div>

@stop