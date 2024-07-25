<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Fatura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }

        .header,
        .footer {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .footer {
            position: fixed;
            bottom: 20px;
            width: calc(100% - 40px);
        }

        .content {
            width: 100%;
            margin-bottom: 40px;
        }

        .content-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .content-table th,
        .content-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .content-table th {
            background-color: #f8f8f8;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('img/LOGOTIPO FINAL (1).jpg') }}" width="150px" alt="">
        </div>

        <div class="content">
            <h4>Detalhes da Fatura</h4>
            <p><strong>Data:</strong> {{ date('d/m/Y') }}</p>
            <p><strong>Fatura:</strong> {{ $n }} </p>

            <h4 style="margin-top: 30px">Itens</h4>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Preço Unitário</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @for ($i = 0; $i < count($pedido->Produtos); $i++)
                        <tr>
                            <td>
                                {{ $pedido->Produtos[$i]->nome }} - prod.
                            </td>
                            <td>
                                {{ $pedido->Produtos[$i]->pivot->quantidade }}
                            </td>
                            <td>
                                {{ number_format($pedido->Produtos[$i]->preco, 2, ',', '.') }}
                            </td>
                            <td>
                                {{ number_format($pedido->Produtos[$i]->preco * $pedido->Produtos[$i]->pivot->quantidade, 2, ',', '.') }}
                            </td>
                        </tr>
                        @php
                            $total += $pedido->Produtos[$i]->pivot->quantidade * $pedido->Produtos[$i]->preco;
                        @endphp
                    @endfor
                    @for ($i = 0; $i < count($pedido->Servicos); $i++)
                        <tr>
                            <td>
                                {{ $pedido->Servicos[$i]->nome }} - serv.
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                {{ number_format($pedido->Servicos[$i]->preco, 2, ',', '.') }}
                            </td>
                            <td>
                                {{ number_format($pedido->Servicos[$i]->preco , 2, ',', '.') }}
                            </td>
                        </tr>
                        @php
                            $total +=  $pedido->Servicos[$i]->preco;
                        @endphp
                    @endfor
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Total(AKZ): </strong></td>
                        <td>{{ number_format($total, 2, ',', '.') }} </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="footer">
            <p style="margin-bottom: -8px; font-size:0.8em">BOM PERFIL</p>
            <p style="font-size: 0.6em">COMÉRCIO GERAL E PRESTAÇÂO DE SERVIÇOS, LDA <br>
                ENDEREÇO - VIANA KM12 ESTALAGEM <br>
                950 850 000/ 931 62 0003 <br>
                SITE - www.bomperfil.com
            </p>
        </div>
    </div>
</body>

</html>
