
<style>
.blog-card {
	background: #fff;
	border-radius: 8px;
	overflow: hidden;
	box-shadow: 0 10px 30px rgba(0,0,0,0.08);
	max-width: 320px;
	margin: 0 auto 20px auto;
	display: flex;
	flex-direction: column;
}

.blog-card .card-img {
	width: calc(100% - 40px);
	height: 200px;
	object-fit: cover;
	display: block;
	margin: 20px auto 12px auto;
	border-radius: 2px;
}

.blog-card .card-body {
	padding: 10px 18px 8px 18px;
	display: flex;
	flex-direction: column;
}

.blog-card .card-title {
	color: #FE7300;
	font-weight: 700;
	font-size: 22px;
	margin: 4px 0 2px 0;
	line-height: 1.05;
}

.blog-card .card-date {
	color: var(--gris-medio);
	font-size: 13px;
	font-weight: 600;
	margin-bottom: 8px;
}

.blog-card .card-divider {
	border: none;
	height: 1px;
	background: var(--gris-claro);
	margin: 10px 0 12px 0;
}

.blog-card .card-excerpt {
	color: var(--gris-oscuro);
	font-size: 14px;
	line-height: 1.6;
	margin: 0 0 6px 0;
	text-align: justify;
}

.blog-card .card-actions {
	display: flex;
	justify-content: center;
	padding: 12px 18px 18px 18px;
}

.blog-card .btn-vermas {
	padding: 10px 26px;
	font-size: 14px;
	border-radius: 6px;
	background: var(--primary-color);
	color: #fff;
	text-decoration: none;
	display: inline-block;
	box-shadow: 0 8px 24px rgba(0,0,0,0.18);
	font-weight: 700;
}

@media (max-width: 480px) {
	.blog-card { max-width: 300px; }
	.blog-card .card-img { height: 170px; width: calc(100% - 32px); margin: 16px auto 10px auto; }
	.blog-card .card-title { font-size: 20px; }
	.blog-card .card-excerpt { font-size: 13px; }
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