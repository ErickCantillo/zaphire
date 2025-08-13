
<h1 class="titulo-principal"><i class="fas fa-cogs"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform;?>"  data-bs-toggle="validator">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->contenido_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->contenido_id; ?>" />
			<?php }?>
			<div class="row">
				<div class="col-12 form-group">
					<label for="contenido_seccion"  class="control-label">contenido_seccion</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_seccion; ?>" name="contenido_seccion" id="contenido_seccion" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_tipo"  class="control-label">contenido_tipo</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_tipo; ?>" name="contenido_tipo" id="contenido_tipo" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_padre"  class="control-label">contenido_padre</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_padre; ?>" name="contenido_padre" id="contenido_padre" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label class="control-label">contenido_columna_alineacion</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono  " ><i class="far fa-list-alt"></i></span>
						</div>
						<select class="form-control" name="contenido_columna_alineacion"   >
							<option value="">Seleccione...</option>
							<?php foreach ($this->list_contenido_columna_alineacion AS $key => $value ){?>
								<option <?php if($this->getObjectVariable($this->content,"contenido_columna_alineacion") == $key ){ echo "selected"; }?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
							<?php } ?>
						</select>
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_columna"  class="control-label">contenido_columna</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_columna; ?>" name="contenido_columna" id="contenido_columna" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_columna_espacios"  class="control-label">contenido_columna_espacios</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_columna_espacios; ?>" name="contenido_columna_espacios" id="contenido_columna_espacios" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_disenio"  class="control-label">contenido_disenio</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_disenio; ?>" name="contenido_disenio" id="contenido_disenio" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_borde"  class="control-label">contenido_borde</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_borde; ?>" name="contenido_borde" id="contenido_borde" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
		<div class="col-12 form-group">
			<label   class="control-label">contenido_estado</label>
				<input type="checkbox" name="contenido_estado" value="1" class="form-control switch-form " <?php if ($this->getObjectVariable($this->content, 'contenido_estado') == 1) { echo "checked";} ?>   ></input>
				<div class="help-block with-errors"></div>
		</div>
				<div class="col-12 form-group">
					<label for="contenido_fecha"  class="control-label">contenido_fecha</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_fecha; ?>" name="contenido_fecha" id="contenido_fecha" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_titulo"  class="control-label">contenido_titulo</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_titulo; ?>" name="contenido_titulo" id="contenido_titulo" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_titulo_ver"  class="control-label">contenido_titulo_ver</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_titulo_ver; ?>" name="contenido_titulo_ver" id="contenido_titulo_ver" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_imagen" >contenido_imagen</label>
					<input type="file" name="contenido_imagen" id="contenido_imagen" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png"  >
					<div class="help-block with-errors"></div>
					<?php if($this->content->contenido_imagen) { ?>
						<div id="imagen_contenido_imagen">
							<img src="/images/<?= $this->content->contenido_imagen; ?>"  class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contenido_imagen','<?php echo $this->route."/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove" ></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_archivo" >contenido_archivo</label>
					<input type="file" name="contenido_archivo" id="contenido_archivo" class="form-control  file-document" data-buttonName="btn-primary" onchange="validardocumento('contenido_archivo');" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf" >
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_fondo_imagen" >contenido_fondo_imagen</label>
					<input type="file" name="contenido_fondo_imagen" id="contenido_fondo_imagen" class="form-control  file-document" data-buttonName="btn-primary" onchange="validardocumento('contenido_fondo_imagen');" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf" >
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_fondo_imagen_tipo"  class="control-label">contenido_fondo_imagen_tipo</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_fondo_imagen_tipo; ?>" name="contenido_fondo_imagen_tipo" id="contenido_fondo_imagen_tipo" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_fondo_color"  class="control-label">contenido_fondo_color</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_fondo_color; ?>" name="contenido_fondo_color" id="contenido_fondo_color" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_introduccion"  class="control-label">contenido_introduccion</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_introduccion; ?>" name="contenido_introduccion" id="contenido_introduccion" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_descripcion" class="form-label" >contenido_descripcion</label>
					<textarea name="contenido_descripcion" id="contenido_descripcion"   class="form-control tinyeditor" rows="10"   ><?= $this->content->contenido_descripcion; ?></textarea>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_descripcion_en" class="form-label" >contenido_descripcion_en</label>
					<textarea name="contenido_descripcion_en" id="contenido_descripcion_en"   class="form-control tinyeditor" rows="10"   ><?= $this->content->contenido_descripcion_en; ?></textarea>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_enlace"  class="control-label">contenido_enlace</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_enlace; ?>" name="contenido_enlace" id="contenido_enlace" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_enlace_abrir"  class="control-label">contenido_enlace_abrir</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_enlace_abrir; ?>" name="contenido_enlace_abrir" id="contenido_enlace_abrir" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 form-group">
					<label for="contenido_vermas"  class="control-label">contenido_vermas</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->contenido_vermas; ?>" name="contenido_vermas" id="contenido_vermas" class="form-control"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
			</div>
		</div>
		<div class="botones-acciones">
			<button class="btn btn-guardar" type="submit">Guardar</button>
			<a href="<?php echo $this->route; ?>" class="btn btn-cancelar">Cancelar</a>
		</div>
	</form>
</div>