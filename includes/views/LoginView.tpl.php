<div class="container">
	<div class="row">
		<?php $_CONTROL->lblMsg->Render(); ?>
		<div class="col-lg-3 col-lg-offset-2">
			<h3>Login to <?php echo __SM_APP_NAME__; ?></h3>
			<div class="form-horizontal">
				<div class="form-group">
					<?php $_CONTROL->txtLogUsername->RenderWithName(); ?>
				</div>
				<div class="form-group">
					<?php $_CONTROL->txtLogPassword->RenderWithName(); ?>
				</div>
				<div class="form-actions">
					<?php $_CONTROL->btnLogin->Render(); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-lg-offset-1">
			<h3>Register a new account</h3>
			<div class="form-horizontal">
				<div class="form-group">
					<?php $_CONTROL->txtRegName->RenderWithName(); ?>
				</div>
				<div class="form-group">
					<?php $_CONTROL->txtRegEmail->RenderWithName(); ?>
				</div>
				<div class="form-group">
					<?php $_CONTROL->txtRegUsername->RenderWithName(); ?>
				</div>
				<div class="form-group">
					<?php $_CONTROL->txtRegPassword->RenderWithName(); ?>
				</div>
				<div class="form-group">
					<?php $_CONTROL->txtRegPasswordRepeat->RenderWithName(); ?>
				</div>
				<div class="form-group">
					<?php $_CONTROL->lstRegConstituency->RenderWithName(); ?>
				</div>
				<div class="form-actions">
					<?php $_CONTROL->btnRegister->Render(); ?>
				</div>
			</div>
		</div>
	</div>
</div>