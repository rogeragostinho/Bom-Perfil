<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .header, .footer {
            text-align: center;
            background-color: #f8f9fa;
            padding: 10px 0;
        }
        .content {
            padding: 20px 0;
            min-height: calc(100vh-(87px+88px));
        }
        .order-details {
            width: 100%;
            margin-bottom: 20px;
        }
        .order-details th, .order-details td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .order-details th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Pedido Recebido</h2>
        </div>
        <div class="content">
            <p>Olá,</p>
            <p>Foi feito um novo pedido.</p>
            
            <a href="{{route('pedidos.show', $pedido->id)}}" style="padding:10px 20px; background-color:black; border-radius:5px; margin:30px 0;color:white; font-weight:bold;font-size:0.9em;text-decoration:none">
                VERIFICAR
            </a>

        </div>
        <!--<div class="footer" style="margin-top: 100px">
            <p>&copy; {{ date('Y') }} Bom Perfil. Todos os direitos reservados.</p>
        </div>-->
    </div>
</body>
</html>
