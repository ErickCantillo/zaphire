<style>
.blog-card {
	background: #fff; /* fondo blanco como en la imagen */
	border-radius: 8px;
	overflow: hidden;
	box-shadow: 0 0.5vh 2vh rgba(0,0,0,0.08);
	margin: 0 auto;
	display: flex;
	flex-direction: column;
}

.blog-card .card-img {
	/* width: calc(100% - 4vw); */
	height: 20vh;
	object-fit: cover;
	display: block;
	border-radius: 2px;
}

.blog-card .card-body {
	padding: 1vh 2vw;
	display: flex;
	flex-direction: column;
}

.blog-card .card-title {
	color: #FE7300; /* color naranja consistente */
	font-weight: 700;
	font-size: 3vh; /* más grande como en la imagen */
	/* margin: 6px 0 4px 0; */
	line-height: 1.05;
}

.blog-card .card-date {
	color: var(--gris-medio);
	font-size: 2vh;
	font-weight: 600;
	margin-bottom: 6px;
}



.blog-card .card-excerpt {
	color: var(--gris-oscuro);
	font-size: 1.8vh;
	line-height: 1.7;
	margin: 0 0 6px 0;
	/* justificar texto para coincidir con la imagen */
	text-align: justify;
}

.blog-card .card-actions {
	display: flex;
	justify-content: start; 
	padding: 1vh 2vw;
}

.blog-card .btn-vermas {
	padding: 1.2vh 1.6vw;
	font-size: 1.8vh;
	/* border-radius: 4px; */
	background: var(--primary-color);
	color: #fff;
	text-decoration: none;
	display: inline-block;
	box-shadow: 0 0.1vh 3vw rgba(0,0,0,0.18);
}


</style>


<article class="blog-card" >
		<img src="<?= '/images/' . $blog->blog_portada; ?>" alt="<?php echo htmlspecialchars($blog_titulo); ?>" class="card-img">
	
	<div class="card-body">
		<h3 class="card-title" itemprop="headline"><?php echo htmlspecialchars($blog->blog_titulo); ?></h3>
		<div class="card-date" itemprop="datePublished"><?php echo htmlspecialchars($blog->blog_fecha); ?></div>
		<hr class="card-divider">
		<p class="card-excerpt" itemprop="description"><?php echo $blog->blog_descripcion; ?></p>
	</div>
	<div class="card-actions">
		<a href="#" class="btn-vermas">Ver más</a>
	</div>
</article>