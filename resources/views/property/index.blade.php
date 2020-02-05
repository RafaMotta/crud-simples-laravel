@extends('property.master')

@section('content')
<div class="container my-3">

<h1>Listagem de Produtos</h1>

<?php

    if(!empty($properties)){

        echo "<table class='table table-striped table-hover'>";
        echo "<thead class='bg-primary text-white'>
                    <td>Título</td>
                    <td>Valor Locação</td>
                    <td>Valor de Compra</td>
                    <td>Ações</td>
                </thead>";
        foreach($properties as $property){

            $linkReadMore = url('/imoveis/' . $property->name);
            $linkEditItem = url('/imoveis/editar/' . $property->name);
            $linkRemoverItem = url('/imoveis/remover/' . $property->name);

            echo "<tbody>
                    <tr>
                        <td>{$property->title}</td>
                        <td>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
                        <td>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
                        <td><a href='{$linkReadMore}'>Ver mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoverItem}'>Remover</a></td>
                    </tr>
                </tbody>";
        }

        echo "</table>";
    }

?>
</div>
@endsection
