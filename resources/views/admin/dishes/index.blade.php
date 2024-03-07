@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 p-2 mb-3 text-center">
            <h2>
                Questi sono i tuoi piatti presenti {{ Auth::user()->name }}!
            </h2>
        </div>
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Ingredients</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ( $dishes as $dish )
                        <tr>
                            <th scope="row">
                                {{ $dish->id }}
                            </th>
                            <td>
                                <a href="{{ route('admin.dishes.show', $dish) }}">
                                    {{ $dish->name }}
                                </a>
                            </td>
                            <td>
                                {{ $dish->ingredients }}
                            </td>
                            <td>
                                {{ $dish->price }}
                            </td>
                            <td>
                                {{ $dish->description }}
                            </td>
                            <td>
                                {{ $dish->img_url }}
                            </td>
                            <td class="d-flex p-3">
                                <a href="{{ route('admin.dishes.show', $dish) }}">
                                    <button class="btn btn-sm btn-info ">
                                        View
                                    </button>
                                </a>
                                <a href="{{ route('admin.dishes.edit', $dish) }}">
                                    <button class="btn btn-sm btn-success mx-1">
                                        Edit
                                    </button>
                                </a>
                                <a href="{{ route('admin.dishes.create', $dish) }}">
                                    <button class="btn btn-sm btn-primary">
                                        Create
                                    </button>
                                </a> 
                                 <!-- Button trigger modal --> 
                                 <button type="button" class="btn btn-warning btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $dish->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                 <div class="modal fade" id="exampleModal-{{ $dish->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Deleting post...</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Do you really want to delete {{ $dish->name }}?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        <form class="d-inline-block" action="{{ route('admin.dishes.destroy', $dish) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger" type="submit">
                                                Delete
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                There are no posts available
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
