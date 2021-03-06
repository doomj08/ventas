@extends('layouts.app')

@section('estilos')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    @endsection

@section('content')
<div class="container">
    <div class="content">
        <div class="title m-b-md">
            Tienda
        </div>
        <div class="links">
            <a href="ventas">Ventas</a>
            <a href="FormualarioUsuario">Registrar vendedor</a>
            <a href="pedidos">Pedidos</a>
            <a href="editarfactura">Modificar factura</a>
        </div>
        <div class="title m-b-md">
            <img src="images/kwik-e-mart.jpg" alt="" width="70%">
        </div>

    </div>

</div>
@endsection
