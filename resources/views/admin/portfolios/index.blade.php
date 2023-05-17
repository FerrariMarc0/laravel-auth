@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-4">Progetti</h1>
            <a class="btn btn-primary" href="{{ route('admin.portfolios.create') }}">Nuovo progetto</a>
        </div>

        @if(@session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Progetto</th>
                    <th scope="col">Data inizio</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Opzioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td>{{ $portfolio->name }}</td>
                        <td>{{ $portfolio->start_date }}</td>
                        <td>{{ $portfolio->description }}</td>
                        <td>{{ $portfolio->slug }}</td>
                        <td>
                            <ul class="list-unstyled d-flex flex-column gap-3">
                                <li><a class="btn btn-primary" href="{{ route('admin.portfolios.show', $portfolio)  }}">Dettagli</a></li>
                                <li><a class="btn btn-warning" href="{{ route('admin.portfolios.edit', $portfolio) }}">Modifica</a></li>
                            </ul>
                            <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
