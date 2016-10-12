@extends('layouts.app')

@section('content')

    @forelse($pessoas as $pessoa)
        <div class="col-md-6">
            @include('partial.contato')
        </div>
    @empty
        <div class="alert alert-info text-center">
            <p>Nenhum contato cadastrado</p>
        </div>
    @endforelse

@endsection()