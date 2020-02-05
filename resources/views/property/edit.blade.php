@extends('property.master')

@section('content')
<div class="container my-3">
<h1>Formulario de edicao</h1>

<?php
    $property = $property[0];
?>

<form action="<?= url('/imoveis/update', ['id' => $property->id]); ?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>
    <div class="form-group">
        <label for="title">Titulo do Imóvel</label>
        <input type="text" name="title" id="title" value="<?= $property->title; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control"><?= $property->description; ?></textarea>
    </div>
    <div class="form-group">
        <label for="rental_price">Valor de aluguel</label>
        <input type="number" name="rental_price" id="rental_price" value="<?= $property->rental_price; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="sale_price">Valor de Venda</label>
        <input type="number" name="sale_price" id="sale_price" value="<?= $property->sale_price; ?>" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
@endsection
