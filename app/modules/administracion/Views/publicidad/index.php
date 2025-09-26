<h1 class="titulo-principal py-2"><i class="fas fa-images"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form action="<?php echo $this->route; ?>" method="post">
        <div class="content-dashboard">
            <div class="row">
				<div class="col">
					<label class="form-label">Sección</label>
	                <label class="input-group">
						<span class="input-group-text input-icono" ><i class="far fa-list-alt"></i></span>
						<select class="form-control" name="publicidad_seccion">
	                        <option value="">Todas</option>
	                        <?php foreach ($this->list_publicidad_seccion as $key => $value) : ?>
	                            <option value="<?= $key; ?>" <?php if ($this->getObjectVariable($this->filters, 'publicidad_seccion') ==  $key) { echo "selected";} ?>><?= $value; ?></option>
	                        <?php endforeach ?>
	                    </select>
	               </label>
	            </div>
				<div class="col">
		            <label class="form-label">Nombre</label>
		            <label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-pencil-alt"></i></span>
						<input type="text" class="form-control" name="publicidad_nombre" value="<?php echo $this->getObjectVariable($this->filters, 'publicidad_nombre') ?>"></input>
		            </label>
		        </div>
				<div class="col-3 d-none">
	                <label class="form-label">Fecha</label>
	                <label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-calendar-alt"></i></span>
						<input type="text" class="form-control" name="publicidad_fecha" value="<?php echo $this->getObjectVariable($this->filters, 'publicidad_fecha') ?>"></input>
	                </label>
	            </div>
				<div class="col">
		            <label class="form-label">Imagen</label>
		            <label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-image"></i></span>
		            	<input type="text" class="form-control" name="publicidad_imagen" value="<?php echo $this->getObjectVariable($this->filters, 'publicidad_imagen') ?>"></input>
		            </label>
		        </div>
				<div class="col-3 d-none">
		            <label class="form-label">Video</label>
		            <label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-pencil-alt"></i></span>
						<input type="text" class="form-control" name="publicidad_video" value="<?php echo $this->getObjectVariable($this->filters, 'publicidad_video') ?>"></input>
		            </label>
		        </div>
				<div class="col">
					<label class="form-label">Estado</label>
	                <label class="input-group">
						<span class="input-group-text input-icono" ><i class="far fa-list-alt"></i></span>
						<select class="form-control" name="publicidad_estado">
	                        <option value="">Todas</option>
	                        <?php foreach ($this->list_publicidad_estado as $key => $value) : ?>
	                            <option value="<?= $key; ?>" <?php if ($this->getObjectVariable($this->filters, 'publicidad_estado') ==  $key) { echo "selected";} ?>><?= $value; ?></option>
	                        <?php endforeach ?>
	                    </select>
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
    
	<?php
		$url = $this->route;
		if ($this->totalpages > 1) {
	?>
	<div align="center">
		<ul class="pagination justify-content-center">
	<?php
			if ($this->page != 1)
				echo '<li class="page-item" ><a class="page-link"  href="'.$url.'?page='.($this->page-1).'"> &laquo; Anterior </a></li>';
			for ($i=1;$i<=$this->totalpages;$i++) {
				if ($this->page == $i)
					echo '<li class="active page-item"><a class="page-link">'.$this->page.'</a></li>';
				else
					echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.$i.'">'.$i.'</a></li>  ';
			}
			if ($this->page != $this->totalpages)
				echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.($this->page+1).'">Siguiente &raquo;</a></li>';
	?>
		</ul>
	</div>
	<?php 
		}
	?>
	  	
	<div class="content-dashboard">
		<div class="franja-paginas">
			<div class="row align-items-center">
				<div class="col-5">
					<div class="titulo-registro">Se encontraron <?php echo $this->register_number; ?> Registros</div>
				</div>
				<div class="col-5 d-flex align-items-center">
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
		<table class="table table-striped table-hover table-administrator">
			<thead>
				<tr>
					<td>Sección</td>
					<td>Nombre</td>
					<td>Fecha</td>
					<td>Imagen</td>
					<td>Imagen Responsive</td>
					<!--<td>Video</td>-->
					<td>Estado</td>
					<td width="100">Orden</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($this->lists as $content){ ?>
				<?php $id =  $content->publicidad_id; ?>
					<tr>
						<td><?= $this->list_publicidad_seccion[$content->publicidad_seccion];?>
						<td><?=$content->publicidad_nombre;?></td>
						<td><?=$content->publicidad_fecha;?></td>
						<td>
							<?php if($content->publicidad_imagen) { ?>
								<img src="/images/<?= $content->publicidad_imagen; ?>"  class="img-thumbnail thumbnail-administrator" />
							<?php } ?>
						</td>
						<td>
							<?php if($content->publicidad_imagenresponsive) { ?>
								<img src="/images/<?= $content->publicidad_imagenresponsive; ?>"  class="img-thumbnail thumbnail-administrator" />
							<?php } ?>
						</td>
					<!--	<td><?=$content->publicidad_video;?></td> -->
						<td><?= $this->list_publicidad_estado[$content->publicidad_estado];?>
						<td>
							<input type="hidden" id="<?= $id; ?>" value="<?= $content->orden; ?>"></input>
							<button class="up_table btn btn-primary btn-sm"><i class="fas fa-angle-up"></i></button>
							<button class="down_table btn btn-primary btn-sm"><i class="fas fa-angle-down"></i></button>
						</td>
						<td class="text-right">
							<div>
								<a class="btn btn-azul btn-sm" href="<?php echo $this->route;?>/manage?id=<?= $id ?>" data-bs-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen-alt"></i></a>
								<span data-bs-toggle="tooltip" data-placement="top" title="Eliminar"><a class="btn btn-rojo btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $id ?>"  ><i class="fas fa-trash-alt" ></i></a></span>
							</div>
							<!-- Modal -->
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
	<input type="hidden" id="csrf" value="<?php echo $this->csrf ?>"><input type="hidden" id="order-route" value="<?php echo $this->route; ?>/order"><input type="hidden" id="page-route" value="<?php echo $this->route; ?>/changepage">
	</div>
	 <div align="center">
		<ul class="pagination justify-content-center">
	    <?php
	    	$url = $this->route;
	        if ($this->totalpages > 1) {
	            if ($this->page != 1)
	                echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.($this->page-1).'"> &laquo; Anterior </a></li>';
	            for ($i=1;$i<=$this->totalpages;$i++) {
	                if ($this->page == $i)
	                    echo '<li class="active page-item"><a class="page-link">'.$this->page.'</a></li>';
	                else
	                    echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.$i.'">'.$i.'</a></li>  ';
	            }
	            if ($this->page != $this->totalpages)
	                echo '<li class="page-item"><a class="page-link" href="'.$url.'?page='.($this->page+1).'">Siguiente &raquo;</a></li>';
	        }
	  	?>
	  	</ul>
	</div>
</div>