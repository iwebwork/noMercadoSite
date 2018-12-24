<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="./Imagens/Originais/ldpi.png" >
<head lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset='utf-8' http-equiv="Content-Language" content="pt-br"/>
<title style="font-family: Canaro;">No Mercado</title>
<!--  CSS pessoais -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/_nav.css">
<link rel="stylesheet" type="text/css" href="css/bodyInicial.css">
<link rel="stylesheet" type="text/css" href="css/_footer.css">

<!--  JS pessoais -->
<script type="text/javascript" src="js/_nav.js"></script>
<script type="text/javascript" src="js/_date.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>
<body class="body" onload="date()">

	<div id="mySidenav" class="sidenav NoMercadoEstilo">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="#">Página inicial</a>
	  <a href="#">Sobre</a>
	  <a href="#">Contato</a>
	</div>

	<!-- Use any element to open the sidenav -->
	<div class="container-fluid NoMercadoEstilo">
		<div class="row">
			<div class="col-sm-1">

			</div>
			<div class="col">
				<span onclick="openNav()"><img src="Imagens/menu.png" class="float-left"></span>
			</div>
			<div class="col">

			</div>
			<div class="col">
				<img src="Imagens/Originais/Branco.png" class="float-left logo">
			</div>
			<div class="col">

			</div>
			<div class="col">

			</div>
			<div class="col">

			</div>
		</div>
	</div>
	

	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
	<div class="container-fluid" id="main">
	  	
	  	<div class="row d-flex justify-content-center">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-3 align-self-center bg-txt-area1">
	  			
		  			<div class="">
		  				<p class="h5">Os melhores mercados onde você estiver.</p>
		  				<p class="font-2 font-weight-light">
		  					Acompanhe suas compras direto do app, disponível para celulares.
		  				</p>
		  				
		  			</div>

		  			<div id="carouselExampleSlidesOnly" class="carousel slide area-slides" data-ride="carousel">
						<div class="carousel-inner">
						    <div class="carousel-item active slides1-corpo">
						    	<div class="text-center">
						     		<img src="Imagens/time-passing.png" class="img-fluid"  alt="Responsive image">
						     	</div>
						     	<p class="text-center">Economize tempo:</p>
						     	<p class="text-center">Receba suas compras em casa em menos de 1 hora.</p> 
						     	
						    </div>
						    <!--<div class="carousel-item slides1-corpo">
						      	<div class="text-center">
						     		<img src="Imagens/gift.png" class="img-fluid"  alt="Responsive image">
						     	</div>
						     	<p class="text-center">Em mãos experientes:</p>
						     	<p>Um shopper seleciona seus produtos com amor.</p>
						    </div>-->
						    <div class="carousel-item slides1-corpo">
						      	<div class="text-center">
						     		<img src="Imagens/medal (1).png" class="img-fluid"  alt="Responsive image">
						     	</div>
						     	<p class="text-center">Comprovada:</p>
						     	<p class="text-center">Se não gostar do estado de algum produto, não pagará por ele!</p>

						    </div>
						     <div class="carousel-item slides1-corpo">
						    	<div class="text-center">
						     		<img src="Imagens/painting-palette.png" class="img-fluid"  alt="Responsive image">
						     	</div>
						     	<p class="text-center">Qualidade:</p>
						     	<p class="text-center">A simplicidade é a máxima sofisticação. Um app simples, fácil e leve de utilizar.</p> 
						     	
						    </div>
						    <div class="carousel-item slides1-corpo">
						      	<div class="text-center">
						     		<img src="Imagens/house.png" class="img-fluid"  alt="Responsive image">
						     	</div>
						     	<p class="text-center">Comodidade:</p>
						     	<p class="text-center">Receba suas compras em sua casa com total comodidade e segurança.</p>
						    </div>
						</div>
					</div>
	  		</div>
	  		
	  		<div class="col-md-3">
	  			<img src="Imagens/celularplay.png" class="area-celular img-fluid" alt="Responsive image">
	  		</div>
	  			
	  		
	  		
	  		<a class="d-flex align-items-center" href="https://play.google.com/store/apps/details?id=com.oficial.nomercado&hl=pt_BR" target="_blank">
		  		<img  src="Imagens/google play.png" class="mx-auto d-block img-googlePlay img-fluid" alt="Responsive image">
		  	</a>
	  		
	  		<div class="col-sm-4">
	  			
	  		</div>
	  		
	  	</div>

	  	

		<div class="row d-flex justify-content-center">
			
			<div class="col-md-4"></div>
			
			<div class="col-md-3">
				
				

			</div>
			
			
			
			<div class="col-md-3"></div>

			
		</div>

	</div>
	<footer class="area-rodape">
			<div class="row d-flex justify-content-center rodape NoMercadoEstilo">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					
					<ul class="text-left">
						<li>
							<h6 class="text-center">Contato:</h6>
						</li>
						<li class="font-italic"><h6 class="text-center">Telefone: +55 31 99199-3667</h6></li>
						<li class="font-italic">
							
								<h6 class="text-center">
									Instagram: nomercadobr   
									<a href="http://instagram.com/nomercadobr" target="_blank">
										<img class="" src="Imagens/instagram3.png" class="img-fluid" alt="Responsive image">
									</a>
								</h6> 
								
							
						</li>
						<li class="font-italic">
							
								<h6 class="text-center">
									Twitter: nomercadobr
									<a class="img-twt" href="http://twitter.com/nomercadobr" target="_blank">
										<img src="Imagens/twitter2.png" class="img-fluid" alt="Responsive image">
									</a>
								</h6> 
								
							
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="text-center">
						<li>
							<h6 class="">Nossos Objetivos:</h6>
						</li>
						<li>
							<h6 class="font-italic text-link"><a style="" href="#">Confira</a></h6>
						</li>
						
					</ul>
				</div>
				<div class="col-md-2"></div>
			</div>


			<div class="row rodape NoMercadoEstilo">
				<div class="col d-flex justify-content-center">
					<h6>Todos os direitos reservados No Mercado - <data id="data"></data></h6>
				</div>
			</div>
		</footer>

	  	
	

	<!-- Fim do rodapé do site -->
	<!-- Fim do corpo do site -->
</body>
</html>