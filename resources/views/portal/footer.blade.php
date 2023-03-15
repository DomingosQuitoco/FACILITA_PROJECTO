<!-- //footer-top --> 
	<!-- subscribe -->
	<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Manter-se em contacto</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
				<ul class="apps"> 
					<li><h4>Baixar a nosso aplicativo : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul> 
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Inscreva-se para receber um e-mail e ganhe 25% de desconto!</h4>  
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Inserir o seu Email..." required="">
					<input type="submit" value="Subscrever">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>F</span>acilita </a></h2>
						<h6>O seu supermercado perto de si.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 223 Belas, Luanda ANGOLA.</li>
						<li><i class="fa fa-mobile"></i> 990 22 23 33 </li>
						<li><i class="fa fa-phone"></i> +244 923 44 44 44</li>
						<li><i class="fa fa-envelope-o"></i> <a href="mail@example.com">facilita@gmail.com </a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>UAN</h3>
						<ul>
							<li><a href="about.html">Sobre Nós</a></li>
				  
							
							<li><a href="privacy.html">Políticas de Privacidade</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Serviços</h3>
						<ul>
							<li><a href="contact.html">Contacta-Nos</a></li>
							<li><a href="login.html">Retonar</a></li> 
						
							<li><a href="sitemap.html">Mapa</a></li>
							<li><a href="login.html">Estado das encomendas</a></li>
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Formas de Pagamento</h3>
						<ul>
							
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debito/Credito</li>
						</ul>  
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2023 Facilita. Todos direitos reservados | Laborado por <a href="http://w3layouts.com"> FCUAN.</a></p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="{{asset('portal')}}/js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- countdown.js -->	
	<script src="{{asset('portal')}}/js/jquery.knob.js"></script>
	<script src="{{asset('portal')}}/js/jquery.throttle.js"></script>
	<script src="{{asset('portal')}}/js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="{{asset('portal')}}/js/jquery.menu-aim.js"> </script>
	<script src="{{asset('portal')}}/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>