<h1 class="titulo-principal py-2"><i class="fas fa-users"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform;?>" data-bs-toggle="validator" id="myForm">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->user_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->user_id; ?>" />
			<?php }?>
			<div class="row">
				<div class="col-2 mb-3">
					<label class="form-label">Estado</label>
					<label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-clipboard-check"></i></span>
						<select class="form-select" name="user_state"   >
							<option value="">Seleccione...</option>
							<?php foreach ($this->list_user_state AS $key => $value ){?>
								<option <?php if($this->getObjectVariable($this->content,"user_state") == $key ){ echo "selected"; }?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
							<?php } ?>
						</select>
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<?php if ($this->content->user_date && $this->content->user_date != "0000-00-00") { ?>
					<input type="hidden" name="user_date"  value="<?php echo $this->content->user_date ?>">
				<?php } else { ?>
					<input type="hidden" name="user_date"  value="<?php echo date("Y-m-d"); ?>">
				<?php } ?>
				<div class="col-2 mb-3">
					<label for="user_names"  class="form-label">Nombres</label>
					<label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-pencil-alt"></i></span>
						<input type="text" value="<?= $this->content->user_names; ?>" name="user_names" id="user_names" class="form-control"  required minlength="3" pattern="[^\d]*" title="No se permiten números, y debe contener minimo 3 caracteres">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-2 mb-3">
					<label for="user_email"  class="form-label">Correo</label>
					<label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-envelope"></i></span>
						<input type="email" value="<?= $this->content->user_email; ?>" name="user_email" id="user_email" class="form-control"  required>
					</label>
					<div class="help-block with-errors" id="email-error"></div>
				</div>
				<div class="col-2 mb-3">
					<label class="form-label">Nivel</label>
					<label class="input-group">
						<span class="input-group-text input-icono" ><i class="far fa-list-alt"></i></span>
						<select class="form-select" name="user_level"  required >
							<option value="">Seleccione...</option>
							<?php foreach ($this->list_user_level AS $key => $value ){?>
								<option <?php if($this->getObjectVariable($this->content,"user_level") == $key ){ echo "selected"; }?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
							<?php } ?>
						</select>
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-2 mb-3">
					<label for="user_user"  class="form-label">Usuario</label>
					<label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-user-tie"></i></span>
						<input type="text" value="<?= $this->content->user_user; ?>" name="user_user" id="user_user" class="form-control"  required>
					</label>
					<div class="help-block with-errors" id="username-error"></div>
				</div>
				<div class="col-2 mb-3">
					<label for="user_password"  class="form-label">Contrase&ntilde;a</label>
					<label class="input-group">
						<span class="input-group-text input-icono " ><i class="fas fa-key"></i></span>
						<input type="password" value="" name="user_password" id="user_password" class="form-control" <?php if (!$this->content->user_id) { ?>required <?php } ?>>
					</label>
					<div class="help-block with-errors" id="password-error"></div>
				</div>
				<div class="col-2 mb-2">
					<label for="user_password"  class="form-label">Repita Contrase&ntilde;a</label>
					<label class="input-group">
						<span class="input-group-text input-icono" ><i class="fas fa-key"></i></span>
						<input type="password" value="" name="user_passwordr" id="user_passwordr" class="form-control" <?php if (!$this->content->user_id) { ?>required <?php } ?>   >
					</label>
					<div class="help-block with-errors" id="passwordr-error"></div>
				</div>


				<input type="hidden" name="user_delete"  value="<?php echo $this->content->user_delete ?>">
				<input type="hidden" name="user_current_user"  value="<?php echo $this->content->user_current_user ?>">
				<input type="hidden" name="user_code"  value="<?php echo $this->content->user_code ?>">
			</div>
		</div>
		<div class="botones-acciones">
			<button class="btn btn-guardar" type="submit">Guardar</button>
			<a href="<?php echo $this->route; ?>" class="btn btn-cancelar">Cancelar</a>
		</div>
	</form>
</div>

<script>
$(document).ready(function() {
  // Validar correo electrónico
  $('#user_email').on('keyup change', function() {
    var email = $(this).val();
    $.post("/core/user/validationemail", {
        "user_email": email
    }, function(res) {
		if (res.msm) {
          	$('#email-error').text(res.msm);
			$('.btn-guardar').prop('disabled',true);
        } else {
			$('#email-error').text('');
			$('.btn-guardar').prop('disabled',false);
		}
    });
  });

  // Validar nombre de usuario
  $('#user_user').on('keyup change', function() {
    var username = $(this).val();
    $.post("/core/user/validation", {
        "user_user": username
    }, function(res) {
		if (res.msm) {
          	$('#username-error').text(res.msm);
			$('.btn-guardar').prop('disabled',true);
        } else {
			$('#username-error').text('');
			$('.btn-guardar').prop('disabled',false);
		}
    });
  });

  // Validar contraseña
  $('#user_password').on('keyup change', function() {
    var password = $(this).val();
    $.post("/core/user/validarclave", {
        "user_password": password
    }, function(res) {
		if (res.msm) {
          	$('#password-error').text(res.msm);
			$('.btn-guardar').prop('disabled',true);
        } else {
			$('#password-error').text('');
			$('.btn-guardar').prop('disabled',false);
		}
    });
  });

  // Validar repetición de contraseña
  $('#user_passwordr').on('keyup change', function() {
    var password = $('#user_password').val();
    var passwordr = $(this).val();
    if (passwordr !== '' && password === passwordr) {
      $('#passwordr-error').text('').hide();
	  $('.btn-guardar').prop('disabled',false);
    } else {
      $('#passwordr-error').text('Las dos contraseñas no son iguales').show();
	  $('.btn-guardar').prop('disabled',true);
    }
  });
});



</script>