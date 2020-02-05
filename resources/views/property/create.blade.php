@extends('property.master')

@section('content')
<div class="container my-3">

<h1>Formulario de cadastro</h1>

<form action="<?= url('/imoveis/store'); ?>" method="post">
<?= csrf_field(); ?>
    <div class="form-group">
        <label for="title">Titulo do Imóvel</label>
        <input type="text" name="title" id="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="rental_price">Valor de aluguel</label>
        <input type="number" name="rental_price" id="rental_price" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="sale_price">Valor de Venda</label>
        <input type="number" name="sale_price" id="sale_price" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</div>
@endsection
