<!DOCTYPE html>
<html>
<head>
<title>Shopping Buddy</title>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopping Buddy" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!--//fonts-->	
<!-- js -->
<!--animate-->
<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('js/wow.min.js')}}"></script>
	<script>
		 new WOW().init();
	</script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<!-- js -->
</head>
<body>

<div class="banner">
	<div class="header">	
			<div class="logo">
			   <a href="index.html"><i><img src="images/logo.png" class="img-responsive main_logo" alt=" " /></i></a>
			</div>
			<div class="top-nav">
				<span class="text-right menu"><img src="images/menu.png" alt=" " /></span>
				<ul class="nav1">
					<li><a href="#how_works">¿Cómo funciona?</a></li>
					<li><a href="#plans">Planes</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModalC">Contáctanos</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal4">Inicia sesión</a></li>
				</ul>
						<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.nav1" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
						<!-- /script-for-menu -->
			</div>		
			<div class="clearfix"> </div>
	</div>
	<div class="container">
		<div class="banner-info">
			<h3>Deja que nosotros lo hagamos por ti</h3>
		</div>
		<div class="buttons">
			<ul>
				<li ><a class="hvr-shutter-in-vertical" href="#plans">Fácil</a></li>
				<li><a class="hvr-shutter-in-vertical" href="#plans" >Rápido</a></li>
				<li><a class="hvr-shutter-in-vertical" href="#plans">Seguro</a></li>
			</ul>
			
		</div>
	</div>
</div>

<div id="how_works" class="coupons wow bounceInDown">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>COMPRA EN <span>3 SIMPLES PASOS</span></h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<h4><span><i class="fa fa-sign-in" aria-hidden="true"></i></h4>
				<p>ENTRA A TU CUENTA</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<h4><span><i class="fa fa-commenting-o" aria-hidden="true"></i></span></h4>
				<p>CUENTANOS QUÉ NECESITAS </i></p>
			</div>
			<div class="col-md-3 coupons-gd">
				<h4><span><i class="fa fa-hand-peace-o" aria-hidden="true"></i></span></h4>
				<p>SÉ FELIZ CON TUS PRODUCTOS</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="wow bounceInUp content-bottom">
		<div class="btm-grids">
			<div class="col-md-4 btm-grid back-col1 text-center">
				<img src="images/bbbb.png" alt="" />
			</div>
			<div class="col-md-4 btm-grid btm-wid">
				<h3 class="logo"><a href="index.html"><i><img src="images/logo.png" class="img-responsive" alt=" " /></i></a></h3>
				<br>
				<p>Algo así como cuando vas a la zapatería y pides tu zapato del 3 pero no tienen ese número, así que buscan en sus otras sucursales, pero en línea ;D</p>
			</div>
			<div class="col-md-4 btm-grid back-col2 text-center">
				<img src="images/bbb1.png" alt="" />
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<iframe src="https://www.youtube.com/embed/dBwr-eJLrjc" width="420" height="315" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3>Conoce nuestras <span>historias de éxito</span>.</h3>
				<p>Deja de perder tu valioso tiempo, recibe asesoriamiento personalizado. ¿No sabes qué televisor te conviene? Pregúntale a tu Shopping Buddy</p>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Clientes satisfechos</h4>
					<h5 class="counter">653</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Eventos</h4>
					<h5 class="counter">823</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Reconocimientos</h4>
					<h5 class="counter">45</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="col-lg-3">
			<div class="logo">
			   <a href="index.html"><i><img src="images/logo.png" class="img-responsive main_logo" alt=" " /></i></a>
			</div>
		</div>
	</div>


<div id="plans" class="set-content">
	<div class="wow bounceInLeft container">
		<h4 class="view_title">PLANES DE PAGO</h4>
		
							<div class="bs-example bs-example-tabs orders-tab" role="tabpanel" data-example-id="togglable-tabs">
								<ul style="width: 100%;" id="myTab" class="text-center nav nav-tabs" role="tablist">
								  <li style="width: 33.33%;" role="presentation" class="active"><a href="#all" id="all-tab" role="tab" data-toggle="tab" aria-controls="all" aria-expanded="true">DEMO</a></li>
								  <li style="width: 33.33%;" role="presentation"><a href="#pay" role="tab" id="pay-tab" data-toggle="tab" aria-controls="pay"> POR MES</a></li>
								  <li style="width: 33.33%;" role="presentation"><a href="#shop" role="tab" id="shop-tab" data-toggle="tab" aria-controls="shop">UN AÑO</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tabs-para tab-pane fade in active" id="all" aria-labelledby="all-tab">
										<div class="profile-gd text-center">
											<div class="gd-desc-gds">
												<div class="gd-desc sec-one">
													<h4>Asesoramiento</h4>
												</div>
												<div class="gd-desc sec-two">
													<h4>Búsqueda</h4>
												</div>
												<div class="gd-desc sec-three">
													<h4>#Conversaciones</h4>
												</div>
												<div class="gd-desc sec-four">
													<h4>Costo</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="gd-desc-btm">
												<div class="gd-desc sec-one">
													<p><i class="fa fa-ban" aria-hidden="true"></i></p>
												</div>
												<div class="gd-desc sec-two">
													<p><i class="fa fa-check" aria-hidden="true"></i></p>
												</div>
												<div class="gd-desc sec-three">
													<p>1</p>
												</div>
												<div class="gd-desc sec-four">
													<p>GRATIS</p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<br>
										<hr>
										<div class="text-center profile-gd grid_two">
											<h5>¿Qué esperas?</h5>
											<a href="#">CÓMPRALO AHORA</a>
										</div>
									</div>
								  <div role="tabpanel" class="tabs-para tab-pane fade" id="pay" aria-labelledby="pay-tab">
										<div class="profile-gd text-center">
											<div class="gd-desc-gds">
												<div class="gd-desc sec-one">
													<h4>Asesoramiento</h4>
												</div>
												<div class="gd-desc sec-two">
													<h4>Búsqueda</h4>
												</div>
												<div class="gd-desc sec-three">
													<h4>#Conversaciones</h4>
												</div>
												<div class="gd-desc sec-four">
													<h4>Costo</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="gd-desc-btm">
												<div class="gd-desc sec-one">
													<p><i class="fa fa-check" aria-hidden="true"></i></p>
												</div>
												<div class="gd-desc sec-two">
													<p><i class="fa fa-check" aria-hidden="true"></i></p>
												</div>
												<div class="gd-desc sec-three">
													<p>5</p>
												</div>
												<div class="gd-desc sec-four">
													<p>$500.00/MES</p>
												</div>

												<div class="clearfix"></div>
											</div>
										</div>
										<br>
										<hr>
										<div class="text-center profile-gd grid_two">
											<h5>¿Qué esperas?</h5>
											<a href="single.html">CÓMPRALO AHORA</a>
										</div>
								  </div>
								  <div role="tabpanel" class="tabs-para tab-pane fade" id="shop" aria-labelledby="shop-tab">
									  <div class="profile-gd text-center">
											<div class="gd-desc-gds">
												<div class="gd-desc sec-one">
													<h4>Asesoramiento</h4>
												</div>
												<div class="gd-desc sec-two">
													<h4>Búsqueda</h4>
												</div>
												<div class="gd-desc sec-three">
													<h4>#Conversaciones</h4>
												</div>
												<div class="gd-desc sec-four">
													<h4>Costo</h4>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="gd-desc-btm">
												<div class="gd-desc sec-one">
													<p><i class="fa fa-check" aria-hidden="true"></i></p>
												</div>
												<div class="gd-desc sec-two">
													<p><i class="fa fa-check" aria-hidden="true"></i></p>
												</div>
												<div class="gd-desc sec-three">
													<p>ILIMITADO</p>
												</div>
												<div class="gd-desc sec-four">
													<p>$300.00/MES</p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<br>
										<hr>
										<div class="text-center profile-gd grid_two">
											<h5>¿Qué esperas?</h5>
											<a href="single.html">CÓMPRALO AHORA</a>
										</div>
								  </div>
								</div>
							</div>
	</div>
</div>

<div class="footer">
	<div class="container">
		<h2><a href="index.html">SHOPPING BUDDY</a></h2>
		<p>© 2017 SHOPPING BUDDY. All Rights Reserved</a></p>
		<ul>
			<li><a class="face1" href="#"></a></li>
			<li><a class="face2"href="#"></a></li>
			<li><a class="face3" href="#"></a></li>
			<li><a class="face4" href="#"></a></li>
		</ul>
	</div>
</div>

<!-- mobile -->
			
			<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Inicia sesión</a></li>
											<li><a class="goog" href="#"><i></i>Inicia sesión</a></li>
											<li><a class="linkin" href="#"><i></i>Inicia sesión</a></li>
											<li class="text-center">o</li>
										</ul>
										<div class="profile-gd grid_two text-center">
											<a  href="#" data-toggle="modal" data-target="#myModal5" >REGISTRATE</a>
										</div>
									</div>
									<div class="login-right">
										<form id="login-form" method="POST" action="{{ route('login') }}">
											{{ csrf_field() }}
											<h3>Inicia sesión </h3>
											<span class="error">
											</span>
											<input name="email" placeholder="Email" type="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>	
												

											<input placeholder="*****" name="password" type="password" onfocus="this.value = '';" onblur="if 
											(this.value == '') {this.value = 'Password';}" required>	
											
											<h4><a href="#">Olvidé mi contraseña</a> / <a href="#">Crea una nueva contraseña</a></h4>
											<input type="submit" value="Iniciar sesión" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>Al iniciar sesión aceptas nuestros <span>Términos y condiciones</span> y <span>Política de Privacidad</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
			<!-- signup -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Inicia sesión</a></li>
											<li><a class="goog" href="#"><i></i>Inicia sesión</a></li>
											<li><a class="linkin" href="#"><i></i>Inicia sesión</a></li>
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Crea tu cuenta </h3>
											<input type="text" paceholder="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" placeholder="******" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								
								<p>Al iniciar sesión aceptas nuestros <span>Términos y condiciones</span> y <span>Política de Privacidad</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
			<!--contact-->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Inicia sesión</a></li>
											<li><a class="goog" href="#"><i></i>Inicia sesión</a></li>
											<li><a class="linkin" href="#"><i></i>Inicia sesión</a></li>
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Crea tu cuenta </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end contact modal-->
<!-- for bootstrap working -->
		<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
</body>
</html>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.countup.js')}}"></script>
<script>
		$('.counter').countUp();
		$(document).ready(function(){}
		
		//Register Form
			$('#register-form').on('submit', function(e){
				e.preventDefault();
				var data = new FormData($(this)[0]);
				$.ajax({
					type: 'POST',
					url: '/register',
					contentType:false,
					processData:false,
					dataType: "json",
					data: data,
					beforeSend: function(){
					console.log('holi');
					},
				})
				.done(function(data){
					alert('this is where we redirect');
					return false;
				})
				.fail(function(data){
					var error = data.responseJSON;
					$('.error').html('');
					$.each(error.errors, function (key, value) {
						$('.error').append('<p>'+value+'</p>')
						$('input[name="email"], input[name="password"]').addClass('error');
					});
				});
			});
		//Login form
			$('#login-form').on('submit', function(e){
				e.preventDefault();
				var data = new FormData($(this)[0]);
				$.ajax({
					type: 'POST',
					url: '/login',
					contentType:false,
					processData:false,
					dataType: "json",
					data: data,
					beforeSend: function(){
					console.log('holi');
					},
				})
				.done(function(data){
					alert('this is where we redirect');
					return false;
				})
				.fail(function(data){
					var error = data.responseJSON;
					$('.error').html('');
					$.each(error.errors, function (key, value) {
						$('.error').append('<p>'+value+'</p>')
						$('input[name="email"], input[name="password"]').addClass('error');
					});
				});
			});
		});
</script>