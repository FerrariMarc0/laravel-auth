@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="fs-4 text-secondary my-4">Progetti</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome Progetto</th>
                    <th scope="col">Data inizio</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <th scope="row">{{ $portfolio->name }}</th>
                        <td>{{ $portfolio->start_date }}</td>
                        <td>{{ $portfolio->description }}</td>
                        <td>{{ $portfolio->slug }}</td>
                        <td>
                            <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">
                                    Elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
