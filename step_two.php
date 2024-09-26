<?php 
/* Template Name: step 2 */
	
	get_header(); ?>
	
	
	<body>
	  <header>
		<h1 class="logo">LOGO</h1>
		<ul class="nav">
		  <li class="navlink"><a href="#">Home</a></li>
		  <li class="navlink"><a href="#">About</a></li>
		  <li class="navlink"><a href="#">Projects</a></li>
		  <li class="navlink"><a href="#">Contact</a></li>
		</ul>
		<div class="burger">
		  <i class="fas fa-bars"></i>
		</div>
	  </header>
<div class="mega-container">
		  <section class="bb3section">
			<h2>Reserva gratis</h2>
		  </section>
		  <section class="bb32section">
			<div class="box">
			  <div class="text userkind">
				<div><input type="radio" name="user"
					value="user-particular" checked><span>Particular</span></div>
				<div><input type="radio" name="user" value="user-professional"><span>Autónomo</span>
				</div>
				<div>
				  <input type="radio" name="user" value="user-company"><span>Empresa</span>
				</div>
				</div>
			</div>
		  </section>
		  <section class="bb32section">
			<div class="container">
			  <div class="form-container">
				  <form action="#" id="form">
					  
					  <div class="form-group destination">
						  <label for="destination">
						  </label>
	  
						  <input type="text" id="nombre" class="form-control" placeholder="Nombre _">
						  <input type="text" id="apellidos" class="form-control" placeholder="Apellidos _">
						  <input type="text" id="correoe" class="form-control" placeholder="E-mail _">
						  <input type="text" id="telefono" class="form-control" placeholder="Teléfono _">
						  <!-- <input type="text" id="destination" class="form-control" placeholder="Enter the place where you want to go"> -->
						  <span class="error-msg">Revise sus datos</span>
					  </div>
					  
					  <div class="check-in-out">
						  <div class="form-group">
							  <label for="checkin"></label>
							  <div class="form-group form-group-check-in-out">
								  <!-- <i class="fas fa-calendar-alt"></i> -->
								  <input type="text" id="check-in" class="form-control" placeholder="Elige tu fecha de entrada">
								  <span class="error-msg">This field cannot be empty</span>
							  </div>
						  </div>
	 
					  </div>
	  
					  
						  <button>
								  Continuar
							  </button>
						  
	  
				  </form>
			  </div>
	  
		  </div>
		  </section>
		</div>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	
<script src="<?php bloginfo('template_url'); ?>/assets/js/script-bb32a.js"></script>
	<?php get_footer(); ?>
