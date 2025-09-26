<h1 class="titulo-principal py-2"><i class="fas fa-users"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form action="<?php echo $this->route; ?>" method="post">
        <div class="content-dashboard">
            <div class="row">
				<div class="col">
					<label class="form-label">Estado</label>
	                <label class="input-group">
						<span class="input-group-text input-icono" ><i class="far fa-list-alt"></i></span>
	                    <select class="form-select" name="user_state">
	                        <option value="">Todas</option>
	                        <?php foreach ($this->list_user_state as $key => $value) : ?>
	                            <option value="<?= $key; ?>" <?php if ($this->getObjectVariable($this->filters, 'user_state') ==  $key) { echo "selected";} ?>><?= $value; ?></option>
	                        <?php endforeach ?>
	                    </select>
	               </label>
	            </div>
				<div class="col">
	                <label class="form-label">Correo</label>
	                <label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-pencil-alt"></i></span>
	                <input type="text" class="form-control" name="user_email" value="<?php echo $this->getObjectVariable($this->filters, 'user_email') ?>"></input>
	                    </label>
	            </div>
				<div class="col">
		            <label class="form-label">Nombres</label>
		            <label class="input-group">
							<span class="input-group-text input-icono" ><i class="fas fa-pencil-alt"></i></span>
		            <input type="text" class="form-control" name="user_names" value="<?php echo $this->getObjectVariable($this->filters, 'user_names') ?>"></input>
		            </label>
		        </div>
				<div class="col">
					<label class="form-label">Nivel</label>
	                <label class="input-group">
						<span class="input-group-text input-icono" ><i class="far fa-list-alt"></i></span>
	                    <select class="form-select" name="user_level">
	                        <option value="">Todas</option>
	                        <?php foreach ($this->list_user_level as $key => $value) : ?>
	                            <option value="<?= $key; ?>" <?php if ($this->getObjectVariable($this->filters, 'user_level') ==  $key) { echo "selected";} ?>><?= $value; ?></option>
	                        <?php endforeach ?>
	                    </select>
	               </label>
	            </div>
				<div class="col">
		            <label class="form-label">Usuario</label>
		            <label class="input-group">
							<span class="input-group-text input-icono" ><i class="fas fa-pencil-alt"></i></span>
		            <input type="text" class="form-control" name="user_user" value="<?php echo $this->getObjectVariable($this->filters, 'user_user') ?>"></input>
		            </label>
		        </div>
                <div class="col">
                    <label class="form-label">&nbsp;</label>
					<label class="input-group">
                    	<button type="submit" class="btn w-100 btn-azul"> <i class="fas fa-filter"></i> Filtrar</button>
					</label>
                </div>
                <div class="col">
                    <label class="form-label">&nbsp;</label>
					<label class="input-group">
                    	<a class="btn w-100 btn-azul-claro " href="<?php echo $this->route; ?>?cleanfilter=1" > <i class="fas fa-eraser"></i> Limpiar Filtro</a>
					</label>
                </div>
            </div>
        </div>
    </form>
    <div align="center">
		<ul class="pagination justify-content-center">
			<?php
				$min = $this->page - 10;
				$max = $this->page + 10;

				if ($this->totalpages > 1) {
					if ($this->page != 1) {
						echo '<li class="page-item" ><a class="page-link"  href="'.$url.'?page='.($this->page-1).'">&laquo; Anterior </a></li>';
					}
					for ($i = 1; $i <= $this->totalpages; $i++) {
						if ($this->page == $i) {
							echo '<li class="active page-item"><a class="page-link">' . $this->page . '</a></li>';
						} else {
							if ($i >= $min and $i <= $max) {
								echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.$i.'">'.$i.'</a></li>';
							}
						}
					}
					if ($this->page != $this->totalpages) {
						echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.($this->page+1).'">Siguiente &raquo;</a></li>';
					}
				}
			?>
		</ul>
	</div>
	<div class="content-dashboard">
		<div class="franja-paginas">
			<div class="row align-items-center">
				<div class="col-5">
					<div class="titulo-registro">Se encontraron <?php echo $this->register_number; ?> Registros</div>
				</div>
				<div class="col-5 d-flex align-items-center text-end">
					<div class="texto-paginas me-2">Registros por página:</div>
					<select class="form-select form-select-sm selectpagination" style="width: auto;">
						<option value="20" <?php if($this->pages == 20){ echo 'selected'; } ?>>20</option>
						<option value="30" <?php if($this->pages == 30){ echo 'selected'; } ?>>30</option>
						<option value="50" <?php if($this->pages == 50){ echo 'selected'; } ?>>50</option>
						<option value="100" <?php if($this->pages == 100){ echo 'selected'; } ?>>100</option>
					</select>
				</div>
				<div class="col-2 text-end">
					<a class="btn btn-sm btn-success" href="<?php echo $this->route."\manage"; ?><?php if($this->padre){ echo "?padre=".$this->padre; } ?>">
						<i class="fas fa-plus-square"></i> Crear Nuevo
					</a>
				</div>
			</div>
		</div>
		<div class="content-table">
			<table class=" table table-striped  table-hover table-administrator text-left">
				<thead>
					<tr>
						<td>Estado</td>
						<td>Correo</td>
						<td>Nombres</td>
						<td>Nivel</td>
						<td>Usuario</td>
						<td width="120"></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($this->lists as $content){ ?>
					<?php $id =  $content->user_id; ?>
						<tr>
							<td><?= $this->list_user_state[$content->user_state];?></td>
							<td><?=$content->user_email;?></td>
							<td><?=$content->user_names;?></td>
							<td><?= $this->list_user_level[$content->user_level];?></td>
							<td><?=$content->user_user;?></td>
							<td class="text-right">
								<div>
									<a class="btn btn-azul btn-sm" href="<?php echo $this->route;?>/manage?id=<?= $id ?>" data-bs-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen-alt"></i></a>
									<span data-bs-toggle="tooltip" data-placement="top" title="Permisos"><a class="btn btn-verde btn-sm" data-bs-toggle="modal" data-bs-target="#permisos<?= $id ?>"  ><i class="fas fa-eye" ></i></a></span>
									<span data-bs-toggle="tooltip" data-placement="top" title="Eliminar"><a class="btn btn-rojo btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $id ?>"  ><i class="fas fa-trash-alt" ></i></a></span>
								</div>
								<!-- Modal Permisos-->
								<div class="modal fade text-left" id="permisos<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<form method="POST" action="<?php echo $this->route;?>/permisos">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myModalLabel">Módulos de acceso</h4>
													<button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-12 table-hv">
															<div class="title-auxilio p-2 text-center mt-1" style="text-transform: uppercase;">Listado de Módulos</div>

															<label class="mt-3">A continuación seleccione los modulos a los cual tendra acceso este usuario </label>

															<?php foreach($this->list_modulos as $key => $valor){ ?>
																<div class="content-table mx-0 table-hv">
																	<table class="table table-striped table-hover table-administrator">
																		<thead>
																			<tr>
																				<td>Módulo <?= $valor->modulos_nombre ?></td>
																				<td>Seleccione</td>
																			</tr>
																		</thead>
																		<tbody>
																			<?php foreach($this->list_modulos_sub as $content){ ?>
																				<?php if($content->modulos_sub_mod == $key) { ?>
																				<?php $modulos_id =  $content->modulos_sub_config; ?>
																					<tr class="texto-log">
																						<td><?=$content->modulos_sub_nombre;?></td>
																						<td class="text-right">
																							<div class="form-check d-flex justify-content-center">
																								<input class="form-check-input" type="checkbox" name="modulos_id[]" value="<?= $modulos_id ?>" <?php if ($this->permisos[$id."*".$modulos_id]) { echo "Checked"; } ?> >
																							</div>
																						</td>
																					</tr>
																				<?php } ?>
																			<?php } ?>
																		</tbody>
																	</table>
																</div>
															<?php } ?>
														</div>
													</div>
												</div>
												<input type="hidden" name="user_id" value="<?= $id ?>">
												<input type="hidden" name="modulos_id[]" value="34">
												<input type="hidden" name="modulos_id[]" value="35">
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
													<button type="submit" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- Modal Eliminar-->
								<div class="modal fade text-left" id="modal<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<div class="">¿Esta seguro de eliminar este registro?</div>
										</div>
										<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
												<a class="btn btn-danger" href="<?php echo $this->route;?>/delete?id=<?= $id ?>&csrf=<?= $this->csrf;?><?php echo ''; ?>" >Eliminar</a>
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
		<input type="hidden" id="csrf" value="<?php echo $this->csrf ?>"><input type="hidden" id="page-route" value="<?php echo $this->route; ?>/changepage">
	</div>
	 <div align="center">
		<ul class="pagination justify-content-center">
			<?php
				$min = $this->page - 10;
				$max = $this->page + 10;

				if ($this->totalpages > 1) {
					if ($this->page != 1) {
						echo '<li class="page-item" ><a class="page-link"  href="'.$url.'?page='.($this->page-1).'">&laquo; Anterior </a></li>';
					}
					for ($i = 1; $i <= $this->totalpages; $i++) {
						if ($this->page == $i) {
							echo '<li class="active page-item"><a class="page-link">' . $this->page . '</a></li>';
						} else {
							if ($i >= $min and $i <= $max) {
								echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.$i.'">'.$i.'</a></li>';
							}
						}
					}
					if ($this->page != $this->totalpages) {
						echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.($this->page+1).'">Siguiente &raquo;</a></li>';
					}
				}
			?>
		</ul>
	</div>
</div>