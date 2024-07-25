@extends('public.layout.index2')
	
@section('conteudo')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Ler Os Detalhes</p>
						<h1>Artigos Únicos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
						<div class="single-article-text">
							<div class="single-artcile-bg"></div>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 Dezembro, 2019</span>
							</p>
							<h2>Romã pode prevenir doenças cardíacas</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint soluta, similique quidem fuga vel voluptates amet doloremque corrupti. Perferendis totam voluptates eius error fuga cupiditate dolorum? Adipisci mollitia quod labore aut natus nobis. Rerum perferendis, nobis hic adipisci vel inventore facilis rem illo, tenetur ipsa voluptate dolorem, cupiditate temporibus laudantium quidem recusandae expedita dicta cum eum. Quae laborum repellat a ut, voluptatum ipsa eum. Culpa fugiat minus laborum quia nam!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, praesentium, dicta. Dolorum inventore molestias velit possimus, dolore labore aliquam aperiam architecto quo reprehenderit excepturi ipsum ipsam accusantium nobis ducimus laudantium.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum est aperiam voluptatum id cupiditate quae corporis ex. Molestias modi mollitia neque magni voluptatum, omnis repudiandae aliquam quae veniam error! Eligendi distinctio, ab eius iure atque ducimus id deleniti, vel alias sint similique perspiciatis saepe necessitatibus non eveniet, quo nisi soluta.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt beatae nemo quaerat, doloribus obcaecati odio!</p>
						</div>

						<div class="comments-list-wrap">
							<h3 class="comment-count-title">3 Comentários</h3>
							<div class="comment-list">
								<div class="single-comment-body">
									<div class="comment-user-avater">
										<img src="assets/img/avaters/testi_01.png" alt="">
									</div>
									<div class="comment-text-body">
										<h4>João Paulo <span class="comment-date">Abril 26, 2020</span> <a href="#">responder</a></h4>
										<p>Os produtos agricolas da Bom Perfil são de excelente qualidade!Comprei diversos produtos para casa e não me arrependo de nada,recomendo a Bom Perfil,para quem gosta coisas de qualidade e a bom preço.  </p>
									</div>
									<div class="single-comment-body child">
										<div class="comment-user-avater">
											<img src="assets/img/avaters/avatar3.png" alt="">
										</div>
										<div class="comment-text-body">
											<h4>Filomena De Carvalho <span class="comment-date">Março 27, 2020</span> <a href="#">responder</a></h4>
											<p>Adquiri vários produtos na loja da Bom Perfil e não poderia estar mais satisfeito.A qualidade dos produtos é excelente,e o atendimento foi muito atencioso.Graças a eles consegui aumentar a variedade de produtos e sem gastar muito.</p>
										</div>
									</div>
								</div>
								<div class="single-comment-body">
									<div class="comment-user-avater">
										<img src="assets/img/avaters/avatar2.png" alt="">
									</div>
									<div class="comment-text-body">
										<h4>Esperança De Sousa <span class="comment-date">Maio 12, 2020</span> <a href="#">responder</a></h4>
										<p>A Experiência na estação dev serviço da Bom Perfil foi excelente!Precisei de uma troca de óleo e verificação de pneus,e om atendimento foi rápido e eficiente.Os profissionais são extremamente compotentes e confiáveis.Com certeza voltarei para futura manutenções.  </p>
									</div>
								</div>
							</div>
						</div>

						<div class="comment-template">
							<h4>Deixa o seu comentário</h4>
							<p>Se você tiver um comentário,não hesite em nos enviar sua opinião </p>
							<form method="POST" action="{{ route('mensagens.store') }}">
								@csrf
								<p>
									<input type="text" placeholder="Nome" name="nome" id="name">
									<input type="email" placeholder="Email" name="email" id="email">
								</p>
								<p>
									<textarea name="mensagem" id="message" cols="30" rows="10" placeholder="Messagem"></textarea>
								</p>
	
								<p><input type="submit" value="Submeter"></p>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Postagens Recentes</h4>
							<ul>
								<li><a href="#">Você procurará em vão frutas nele no outono.</a></li>
								<li><a href="#">Um homem que vale a pena a sua estação,como o tomate.</a></li>
								<li><a href="#">Bons pensamentos produzem bons frutos frescos e suculentos.</a></li>
								<li><a href="#">Apaixona-se por laranja fresca</a></li>
								<li><a href="#">Por que as frutas sempre parecem deliciosas</a></li>
							</ul>
						</div>
						<div class="archive-posts">
							<h4>Arquivar Postagens</h4>
							<ul>
								<li><a href="#">JAN 2019 (5)</a></li>
								<li><a href="#">FEV 2019 (3)</a></li>
								<li><a href="#">MAI 2019 (4)</a></li>
								<li><a href="#">SET 2019 (4)</a></li>
								<li><a href="#">DEZ 2019 (3)</a></li>
							</ul>
						</div>
						<div class="tag-section">
							<h4>Etiqueta</h4>
							<ul>
								<li><a href="#">Maçã</a></li>
								<li><a href="#">Morango</a></li>
								<li><a href="#">Baga</a></li>
								<li><a href="#">Laranja</a></li>
								<li><a href="#">Limão</a></li>
								<li><a href="#">Banana</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->

@endsection