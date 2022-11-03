@extends('padrao')
@section('content')
<section>
  <div class="container cadastroViajar">
    <form class="row g-3" method="post" action="{{route('alterar-banco-viajar',$registrosViajar->id)}}">
      @csrf
      @method('put')
      <div class="col-md-12">
        <label for="inputModelo" class="form-label">Modelo</label>
        <input type="text" name="modelo" value="{{old('modelo',$registrosViajar->modelo)}}" class="form-control" id="inputModelo" placeholder="Fusca">
        @error('modelo')
        <div class="text-sm-start text-light">*Preencher o campo modelo.</div>
        @enderror
      </div>

      <div class="col-12">
        <label for="inputMarca" class="form-label">Marca</label>
        <input type="text" name="marca"  value="{{old('marca',$registrosViajar->marca)}}" class="form-control" id="inputModelo" placeholder="Fusca">
        @error('modelo')
       
        <div class="text-sm-start text-light">*Preencher o campo marca.</div>
        @enderror
      </div>
      <div class="col-12">
        <label for="inputAno" class="form-label">Ano</label>
        <input type="text" name="ano"  value="{{old('ano',$registrosViajar->ano)}}" class="form-control" id="inputModelo" placeholder="Fusca">
       
        @error('ano')
        <div class="text-sm-start text-light">*Preencher o campo ano.</div>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="inputMês" class="form-label">Mês</label>
        <input type="text" name="mês"  value="{{old('mês',$registrosViajar->mês)}}" class="form-control" id="inputModelo" placeholder="Fusca">
        @error('mês')
        <div class="text-sm-start text-light">*Preencher o campo mês.</div>
        @enderror
      </div>

      <div class="col-md-12">
        <label for="inputZip" class="form-label">Valor</label>
        <input type="text" name="valor" value="{{old('valor',$registrosViajar->valor)}}" class="form-control" id="inputModelo" placeholder="Fusca">
        @error('valor')
        <div class="text-sm-start text-light">*Preencher o campo valor.</div>
        @enderror
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form>
  </div>
</section>
@endsection