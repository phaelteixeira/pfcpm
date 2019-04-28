@extends('inicial')

@section('body')
    <form>
        <div>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input class="form-control" name="nome" id="nome">
        </div>
        <div>
            <label for="mat">Mátricula</label>
            <input class="form-control" name="mat" id="mat">
        </div>
    </form>
@endsection('body')