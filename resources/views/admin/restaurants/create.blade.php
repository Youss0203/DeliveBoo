@extends('layouts.admin')

@section('title', 'Create new Project')

@section('main-content')




<section class="container">
    <div class="col-12">


        <form action="{{ route('admin.restaurant.store') }}" method="POST">
            @csrf

           aa
        
        
        </form>
        

@endsection