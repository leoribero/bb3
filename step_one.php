<?php 
/* Template Name: step 1 */
	
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
		<h2>4 Tamaños de trastero: <span class="red">Elije el tuyo</span></h2>
		<div class="getoverzone">
		  <div class="size-selector-zone">
			<div class="spacetripple accordion">
			  <div class="item">
				<div class="trigger_BB321 ">
				  <div class="trigger-title">Ordenar</div>
				</div>
				<div class="box">
				  <div class="text">
					<div><input type="radio" name="size"
						value="size-smallest-to-largest"><span>Tamaño - a +</span></div>
					<div>
					  <input type="radio" name="size" value="size-largest-to-smallest"><span>Tamaño + a -</span>
					</div>
					<hr>
					<div>
					  
					<div><input type="radio" name="price" value="price-smallest-to-largest"><span>Precio - a +</span></div>
					
					<div><input type="radio" name="price" value="price-largest-to-smallest"><span>Precio + a -</span></div>
					</div>
					<hr>
					<button type="button" onclick="displayRadioValueS()">
					  Ordenar
					</button>
					<br>
					<div id="resultS"></div>
	
				  </div>
				</div>
			  </div>
			</div>
			<div class="spacetripple accordion">
			  <div class="item">
				<div class="trigger_BB322">
				  <div class="trigger-title">Filtrar</div>
				</div>
				<div class="box">
				  <div class="text">
					<div><input type="radio" name="planta" value="Plantabaja"><span>Planta baja</span></div>
					<div><input type="radio" name="planta" value="primeraplanta"><span>1ª Planta</span></div>
					<div><input type="radio" name="planta" value="todas"><span>Todas las plantas</span></div>
					<hr>
	
					<button type="button" onclick="displayRadioValueF()">
					  Filtrar
					</button>
					<br>
					<div id="resultF"></div>
				  </div>
				</div>
			  </div>
			</div>
	
		  </div>
		</div>
	  </section>
	
	  <div class="afterzonegetovered"></div>
	  <section class="bb3section">
		<div class="size-container">
		  <img class="isom"  src="<?php bloginfo('template_url'); ?>/images/img-iso1.png">
		  <div class="tabs">
			<div class="tabs__pills">
			  <button class="btn anual" data-id="mensual">mensual</button>
			  <button class="btn" data-id="anual">anual</button>
			</div>
	
			<div class="tabs__panels">
			  <!-- Content panels for each tab -->
			  <!-- mensual tab -->
			  <div id="mensual" class="active">
				<figure>
				  <img src="<?php bloginfo('template_url'); ?>/images/img-men.png" alt="mensual" />
				</figure>
			  </div>
			  <!-- anual tab -->
			  <div id="anual">
				<figure>
				  <img src="<?php bloginfo('template_url'); ?>/images/img-anual.png" alt="anual" />
				</figure>
			  </div>
			</div>
		  </div><div class="ctabb31">
			<a href="step-2"><button>Elegir</button></a></div>
		</div>
	  </section>
	</div>
	
<script src="<?php bloginfo('template_url'); ?>/assets/js/script-bb31.js"></script>
	<?php get_footer(); ?>
