		<footer>
			<div class="container-fluid">
				<div class="rodape">
					<h1>Excepturi corporis explicabo atque</h1>
					<h2>Lorem ipsum dolor sit amet, excepturi corporis explicabo atque,ipsum <p>dolor sit amet dolor sit amet excepturi corporis explicabo atque</p></h2>
					<a href="">Faça uma Cotação Online</a>
				</div>
			</div>
			<div class="endereco">
				<p>Av. Ministro Cirne, 1935  jd. Coopagro, Toledo-PR - CEP:85.903-590</p>
			</div>
			<div class="container">
				<div class="logo-rodape wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
					<img src="images/logo-rodape.png" alt="logo">
				</div>
				<div class="menu-rodape wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
					<ul>
						<li>
							<a href="">Início</a>
							<a href="">Pró Ordenha</a>
							<a href="">Assintência Técnica</a>
							<a href="">Produtos</a>
							<a href="">Localização</a>
							<a href="">Contato</a>
						</li>
					</ul>
				</div>
				<div class="social-rodape">
					<ul>
						<li>
							<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						</li>
						<li class="youtube">
							<a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/wow/dist/wow.min.js"></script>
	<script>
		$(function(){				
			$('.toggle').click(function(){
			$('.layout').toggleClass('ativo');
			$('.menu-responsivo').toggleClass('ativo');
			});
			new WOW().init();
			});
	</script>
</body>
</html>