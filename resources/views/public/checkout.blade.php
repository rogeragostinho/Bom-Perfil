@extends('public.layout.index2')

@section('conteudo')

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresco e Organico</p>
						<h1>Verificar Produtos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Faturamento
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="{{route('pedidos.store')}}" method="post">
										@csrf
						        		<p><input type="text" placeholder="Nome" name="nome" required></p>
						        		<p><input type="email" placeholder="Email" name="email"></p>
						        		<p><input type="text" placeholder="Enderenço" name="endereco"></p>
						        		<p><input type="tel" placeholder="Telefone" name="telefone" required></p>
						        		<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Diz nos algo"></textarea></p>
										<button type="submit" class="botao">Confirmar</button>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <!--
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Endereço a Expedição
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">
						        	<p>Your shipping address form is here.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Detalhes do Carrinho
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<p>Your card details goes here.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						-->
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Seus Detalhes</th>
									<th>Preço</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Produtos</td>
									<td>Total</td>
								</tr>
								@foreach ($items = LaraCart::getItems() as $item)
									<tr>
										<td>
											{{$item->name}}
										</td>
										<td>
											{{number_format($item->price ,2,',','.')}}
										</td>
									</tr>
								@endforeach
								<tr>
									<td>
										Total
									</td>
									<td>
										{{ LaraCart::total() }} 
									</td>
								</tr>
							</tbody>
						</table>
						<!--<a href="#" class="boxed-btn">Ordem de Lugar</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	@endsection