@extends('layout.admin')

@section('content')
<div class="container">
    <!-- <a href="{{ route('admin.uploads.index') }}" class="btn btn-primary mb-3">Adicionar novos arquivos</a> -->

    <!-- <h1>Criar Novo Upload</h1> -->

    <form action="{{ route('admin.uploads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="file">Arquivo</label>
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
</div>
@endsection