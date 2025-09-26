<div class="container-fluid">
	<div class="row">
		<div class="col-4">
			<div class="div-dashboard">
				<h2>
					<i class="fas fa-comment-dots"></i> Redes Sociales <a href="/administracion/informacion/#redes"><i class="fas fa-marker"></i></a>
				</h2>
				<div class="content-bloque d-flex align-items-center justify-content-center">
					<div class="redes">
						<div class="icon-face"><i class="fab fa-facebook-f"></i></div>
						<?php if ($this->info->info_pagina_facebook){ ?>
							<div class="d-flex align-items-center justify-content-center icon-check"><i class="fas fa-check"></i></div>
						<?php }else{ ?>
							<div class="d-flex align-items-center justify-content-center icon-close"><i class="fas fa-close"></i></div>
						<?php } ?>
					</div>
					<div class="redes">
						<div class="icon-x"><i class="fab fa-x-twitter"></i></div>
						<?php if ($this->info->info_pagina_twitter){ ?>
							<div class="d-flex align-items-center justify-content-center icon-check"><i class="fas fa-check"></i></div>
						<?php }else{ ?>
							<div class="d-flex align-items-center justify-content-center icon-close"><i class="fas fa-close"></i></div>
						<?php } ?>
					</div>
					<div class="redes">
						<div class="icon-insg"><i class="fab fa-instagram"></i></div>
						<?php if ($this->info->info_pagina_instagram){ ?>
							<div class="d-flex align-items-center justify-content-center icon-check"><i class="fas fa-check"></i></div>
						<?php }else{ ?>
							<div class="d-flex align-items-center justify-content-center icon-close"><i class="fas fa-close"></i></div>
						<?php } ?>
					</div>
					<div class="redes">
						<div class="icon-pint"><i class="fab fa-pinterest"></i></div>
						<?php if ($this->info->info_pagina_pinterest){ ?>
							<div class="d-flex align-items-center justify-content-center icon-check"><i class="fas fa-check"></i></div>
						<?php }else{ ?>
							<div class="d-flex align-items-center justify-content-center icon-close"><i class="fas fa-close"></i></div>
						<?php } ?>
					</div>
					<div class="redes">
						<div class="icon-yout"><i class="fab fa-youtube"></i></div>
						<?php if ($this->info->info_pagina_youtube){ ?>
							<div class="d-flex align-items-center justify-content-center icon-check"><i class="fas fa-check"></i></div>
						<?php }else{ ?>
							<div class="d-flex align-items-center justify-content-center icon-close"><i class="fas fa-close"></i></div>
						<?php } ?>
					</div>
					<div class="redes">
						<div class="icon-link"><i class="fab fa-linkedin-in"></i></div>
						<?php if ($this->info->info_pagina_linkedin){ ?>
							<div class="d-flex align-items-center justify-content-center icon-check"><i class="fas fa-check"></i></div>
						<?php }else{ ?>
							<div class="d-flex align-items-center justify-content-center icon-close"><i class="fas fa-close"></i></div>
						<?php } ?>
					</div>
					<div class="redes">
						<div class="icon-tik"><i class="fab fa-tiktok"></i></div>
						<?php if ($this->info->info_pagina_flickr){ ?>
							<div class="d-flex align-items-center justify-content-center icon-check"><i class="fas fa-check"></i></div>
						<?php }else{ ?>
							<div class="d-flex align-items-center justify-content-center icon-close"><i class="fas fa-close"></i></div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2">
			<div class="div-whatsapp">
				<div>
					<i class="fab fa-whatsapp"></i>
					<h2>Whatsapp:</h2>
					<p><?php echo $this->info->info_pagina_whatsapp; ?></p>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="div-dashboard">
				<h2>
					<i class="fas fa-book"></i> Información de Contáctenos <a href="/administracion/informacion/#contactenos"><i class="fas fa-marker"></i></a>
				</h2>
				<div class="content-bloque container-fluid d-flex align-items-center justify-content-center">
					<div class="row">
						<div class="col-5">
							<div class="contenedor-informacion">
								<div class="icono telefono">
									<i class="fas fa-phone"></i>
								</div>
								<div class="contenido d-flex">
									<strong>Teléfonos: </strong>
									<div> <?php echo $this->info->info_pagina_telefono; ?></div>
								</div>
							</div>
						</div>
						<div class="col-7">
							<div class="contenedor-informacion">
								<div class="icono correo">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="contenido d-flex">
									<strong>Correo Contacto: </strong>
									<div> <?php echo $this->info->info_pagina_correos_contacto; ?></div>
								</div>
							</div>
						</div>

						<div class="col-12">
							<div class="contenedor-informacion">
								<div class="icono direccion">
									<i class="fas fa-location-dot"></i>
								</div>
								<div class="contenido d-flex">
									<strong>Dirección: </strong>
									<div> <?php echo $this->info->info_pagina_direccion_contacto; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-6">
			<div class="row">
				<div class="col-12">
					<div class="div-dashboard pb-3">
						<h2>
							<i class="fas fa-link"></i> Enlaces de Interés<a href="/administracion/informacion/#contactenos"><i class="fas fa-marker"></i></a>
						</h2>
						<div class="content-bloque container-fluid">
							<div class="row d-flex align-items-center justify-content-center my-3">
								<div class="col-4">
									<div class="titulo-registro">Se encontraron <?php echo $this->register_number; ?> Registros</div>
								</div>
								<div class="col-5 d-flex align-items-center justify-content-center">
									<div class="texto-paginas">Registros por pagina: &nbsp;</div>
									<select class="form-select selectpagination" style="width: auto;">
										<option value="20" <?php if ($this->pages == 20) {
																echo 'selected';
															} ?>>20</option>
										<option value="30" <?php if ($this->pages == 30) {
																echo 'selected';
															} ?>>30</option>
										<option value="50" <?php if ($this->pages == 50) {
																echo 'selected';
															} ?>>50</option>
										<option value="100" <?php if ($this->pages == 100) {
																echo 'selected';
															} ?>>100</option>
									</select>
								</div>
								<div class="col-3">
									<div class="text-end"><a class="btn btn-sm btn-success" href="/administracion/enlace/manage"> <i class="fas fa-plus-square"></i> Crear Nuevo</a></div>
								</div>
							</div>
							<div class="content-table m-0">
								<table class=" table table-striped  table-hover table-administrator text-start">
									<thead>
										<tr>
											<td>Titulo</td>
											<td>Link</td>
											<td width="85">Orden</td>
											<td width="85"></td>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($this->lists as $content) { ?>
											<?php $id =  $content->enlaces_id; ?>
											<tr>
												<td><?= $content->enlaces_titulo; ?></td>
												<td><?= $content->enlaces_link; ?></td>
												<td>
													<input type="hidden" id="<?= $id; ?>" value="<?= $content->orden; ?>"></input>
													<button class="up_table btn btn-primary btn-sm"><i class="fas fa-angle-up"></i></button>
													<button class="down_table btn btn-primary btn-sm"><i class="fas fa-angle-down"></i></button>
												</td>
												<td class="text-right">
													<div>
														<a class="btn btn-azul btn-sm" href="/administracion/enlace/manage?id=<?= $id ?>" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen-alt"></i></a>
														<?php if ($_SESSION['kt_login_level'] == 1) { ?><span data-bs-toggle="tooltip" data-placement="top" title="Eliminar"><a class="btn btn-rojo btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $id ?>"><i class="fas fa-trash-alt"></i></a></span><?php } ?>
													</div>
													<!-- Modal -->
													<div class="modal fade text-left" id="modal<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
																	<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<div class="">¿Esta seguro de eliminar este registro?</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
																	<a class="btn btn-danger" href="/administracion/enlace/delete?id=<?= $id ?>&csrf=<?= $this->csrf; ?><?php echo ''; ?>">Eliminar</a>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="div-dashboard pb-3">
						<h2>
							<i class="fas fa-location"></i> Google Maps <a href="/administracion/informacion/#maps"><i class="fas fa-marker"></i></a>
						</h2>
						<div class="container">
							<div class="row d-flex align-items-center justify-content-center my-3">
								<div class="col-12">
									<div class="mapa">
										<div id="map" style="width:100%; height:100%;display: inline-block;"></div>
										<script type="text/javascript">
											setValuesMap('<?php echo $this->info->info_pagina_latitud; ?>','<?php echo $this->info->info_pagina_longitud; ?>',true,'<?php echo $this->info->info_pagina_zoom; ?>');
											google.maps.event.addDomListener(window, 'load', initializeMap);
										</script>
									</div>
								</div>
								<div class="col-12">
									<div class="row mt-2">
										<div class="col-4">
											<div class="contenedor-informacion">
												<div class="icono-mapa latitud">
													<i class="fas fa-map-marker-alt"></i>
												</div>
												<div class="contenido d-flex">
													<strong>Latitud:</strong>
													<?php echo $this->info->info_pagina_latitud; ?>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="contenedor-informacion">
												<div class="icono-mapa longitud">
													<i class="fas fa-globe"></i>
												</div>
												<div class="contenido d-flex">
													<strong>Longitud:</strong>
													<?php echo $this->info->info_pagina_longitud; ?>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="contenedor-informacion">
												<div class="icono-mapa zoom">
													<i class="fas fa-search-plus"></i>
												</div>
												<div class="contenido d-flex">
													<strong>Zoom:</strong>
													<?php echo $this->info->info_pagina_zoom; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="div-dashboard pb-3">
						<h2>
							<i class="fas fa-spinner"></i> Archivo SEO <a href="/administracion/informacion/#seo"><i class="fas fa-marker"></i></a>
						</h2>
						<div class="container">
							<div class="row d-flex align-items-center justify-content-center my-3">
								<div class="col-12">
									<h5> Descripción: </h5>
									<div class="contenedor-informacion">
										<div class="icono-seo descripcion">
											<i class="fas fa-file-alt"></i>
										</div>
										<div class="contenido d-flex">
											<div><?php echo $this->info->info_pagina_descripcion; ?></div>
										</div>
									</div>
								</div>
								<div class="col-6 mt-3">
									<h5> Tags: </h5>
									<div class="contenedor-informacion">
										<div class="icono-seo tags">
											<i class="fas fa-tags"></i>
										</div>
										<div class="contenido">
											<div><?php echo $this->info->info_pagina_tags; ?></div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<h5> Archivos SEO: </h5>
									<div class="contenedor-informacion">
										<div class="icono-seo archivos">
											<i class="fas fa-file"></i>
										</div>
										<div class="contenido d-flex">
											<a  <?php if ($this->info->info_pagina_robot): ?>href="/robots.txt" target="_blank"<?php endif ?> class="btn w-100 me-1 btn-robot <?php if(!$this->info->info_pagina_robot){ ?>disabled <?php } ?>"><i class="fas fa-robot"></i> Robot</a>
											<br>
											<a <?php if ($this->info->info_pagina_sitemap){ ?>href="/sitemap.xml" target="_blank"<?php } ?> class="btn w-100 btn-sitemap <?php if(!$this->info->info_pagina_sitemap){ ?>disabled <?php } ?>"> <i class="fas fa-sitemap"></i> SiteMap</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 d-none">
					<div class="div-dashboard pb-3">
						<h2>
							<i class="fas fa-chart-pie"></i> Métricas <a href="/administracion/informacion/#metricas"><i class="fas fa-marker"></i></a>
						</h2>
						<div class="content-bloque container-fluid">
							<div class="row d-flex align-items-center justify-content-center my-3">
								<div class="col-12">
									<div class="contenedor-informacion">
										<div class="contenido">
											<?php echo $this->info->info_pagina_metricas; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="row">
				<div class="col-12">
					<div class="div-dashboard pb-3">
						<h2>
							<i class="fas fa-envelope"></i> Configuración Envio Correo <a href="/administracion/informacion#configcorreo"><i class="fas fa-marker"></i></a>
						</h2>
						<div class="content-bloque container-fluid">
							<div class="mt-3">
								<div class="content-table m-0">
									<table class=" table table-striped  table-hover table-administrator text-start">
										<tbody>
											<tr>
												<td class="back-td">Host</td>
												<td>
													<span><?= $this->info->info_pagina_host; ?></span>
												</td>
												<td class="back-td">Puerto</td>
												<td>
													<span><?= $this->info->info_pagina_port; ?></span>
												</td>
											</tr>
											<tr>
												<td class="back-td">Correo remitente</td>
												<td>
													<span><?= $this->info->info_pagina_correo_remitente; ?></span>
												</td>
												<td class="back-td">Usuario</td>
												<td>
													<span><?= $this->info->info_pagina_username; ?></span>
												</td>
											</tr>
											<tr>
												
												<td class="back-td">Nombre remitente</td>
												<td>
													<span><?= $this->info->info_pagina_nombre_remitente; ?></span>
												</td>
												<td class="back-td">Copia</td>
												<td>
													<span><?= $this->info->info_pagina_correo_oculto; ?></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="div-dashboard pb-3">
						<h2>
							<i class="fas fa-code"></i> Scripts Head <a href="/administracion/informacion/#scripts"><i class="fas fa-marker"></i></a>
						</h2>
						<div class="content-bloque container-fluid">
							<div class="row my-3">
								<div class="col-12">
									<div class="contenedor-informacion">
										<div class="icono-seo scripts">
											<i class="fas fa-shield-alt"></i>
										</div>
										<div class="contenido px-3">
											<h4>Scripts:</h4>
											<?php echo  htmlentities($this->info->info_pagina_scripts); ?>
										</div>
									</div>
								</div>
								<div class="col-12 mt-2">
									<div class="contenedor-informacion">
										<div class="icono-seo log">
											<i class="fas fa-users"></i>
										</div>
										<div class="contenido px-3">
											<h4>Log de usuarios:</h4>
											<div class="content-table m-0">
												<table width="100%" class="table table-striped  table-hover table-administrator text-start p-3">
													<thead>
														<tr>
															<td>Usuario</td>
															<td>Fecha ingreso</td>
															<td>Hora ingreso</td>
															<td>
																<a href="/administracion/log/">
																	<button class="btn-xs btn-azul-claro"><i class="fas fa-info-circle"></i> Detalle</button>
																</a>
															</td>
														<tr>
													</thead>
													<tbody>
														<?php foreach ($this->log as $log): ?>
															<?php $aux = explode(" ",$log->log_fecha); ?>
															<tr>
																<td><?php echo $log->log_usuario; ?></td>
																<td><?php echo $aux[0]; ?></td>
																<td><?php echo $aux[1]; ?></td>
																<td><a href="/administracion/log/?log_usuario=<?php echo $log->log_usuario; ?>"><button class="btn-xs btn-verde-claro"><i class="fas fa-info-circle"></i> Detalle</button></a></td>
															</tr>
														<?php endforeach ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>