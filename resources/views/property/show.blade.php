@extends('property.master')

@section('content')

<div class="container my-3">

<h1> Pagina single</h1>
<?php
    if(!empty($property)){

        foreach($property as $prop){
            ?>
                <h2>Título do imóvel: <?= $prop->title; ?></h2>

                <p>Descricao: <?= $prop->description; ?></p>

                <p>Valor locacao: R$ <?= number_format($prop->rental_price, 2, ',', '.'); ?></p>

                <p>valor de venda: R$ <?= number_format($prop->sale_price, 2, ',', '.'); ?></p>

            <?php
        }

    }
?>
</div>

@endsection
