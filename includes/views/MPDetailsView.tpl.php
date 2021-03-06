<!-- Modal
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Login To Proceed</h4>
			</div>
			<div class="modal-body">
				<?php //$_CONTROL->pnlLogin->Render(); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 style="font-weight: bold;"><?php echo $_CONTROL->campaign->Question; ?></h2>
		</div>
		<div class="col-lg-6">
			<?php include __VIEWS_PATH__.'/sharebuttons.tpl.php'; ?>
		</div>
	</div>
	<div class="row" style="margin-top:20px;">
		<div class="col-lg-12">
			<div class="row" style="background-color: antiquewhite;">
				<div class="col-lg-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<?php $_CONTROL->lblMpName->Render(); ?>
						</div>
						<div class="panel-body">
							<?php $_CONTROL->lblConstituency->Render(); ?>
							<strong><?php $_CONTROL->lblParty->Render(); ?></strong><br />

							<em>Permanent Address:</em>
							<address>
								<?php $_CONTROL->lblPAddress->Render(); ?>
							</address>
							<em>Delhi Address:</em>
							<address>
								<?php $_CONTROL->lblDAddress->Render(); ?>
							</address>
							<?php $_CONTROL->lblEmail->Render(); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" style="margin-top: 20px; margin-bottom: 10px; font-size: 24px;" >
								MP's Stand on <?php echo $_CONTROL->campaign->Name; ?>
							</h3>
						</div>
						<div class="panel-body" style="min-height: 254px;">
							<?php $_CONTROL->lblMpStand->Render(); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title" style="font-size: 24px; margin-top: 20px; margin-bottom: 10px;">
								Citizen Voice
							</h3>
						</div>
						<div  class="panel-body" style="min-height:250px;">
							<div class="row">
								<div class="col-lg-6">
									<h3 class="text-success"><?php echo $_CONTROL->strConstituencyFor; ?> <small>FOR</small></h3>
								</div>
								<div class="col-lg-6">
									<h3 class="text-danger"><?php echo $_CONTROL->strConstituencyAgainst; ?> <small>AGAINST</small></h3>
								</div>
							</div>
							<div class="row">
								<div class="graph col-lg-12">
									<canvas id="canvasusers"></canvas>
								</div>
								<script>
									var pieDataUsers = [
										{
											// for
											value : <?php echo $_CONTROL->strConstituencyFor; ?>,
											color : "#009933"
										},
										{
											// against
											value : <?php echo $_CONTROL->strConstituencyAgainst; ?>,
											color : "#CC3300"
										}
									];
									var myPieUsers = new Chart(document.getElementById("canvasusers").getContext("2d")).Pie(pieDataUsers);
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div  class="row">
				<div class="col-lg-12">
					<?php $_CONTROL->lblMsg->Render(); ?>
					<div style="background-color:lightgrey;"  class="row">
						<div class="col-lg-12">

							<?php $_CONTROL->txtCommentBox->Render(); ?>
							<?php $_CONTROL->radioVote->RenderWithName(); ?>
							<?php $_CONTROL->btnCommentSubmit->Render(); ?><br /><br />
						</div>
					</div>
				<div class="col-lg-12">
					<div class="row">
						<table class="table">
							<?php $_CONTROL->dtrComments->Render(); ?>
						</table>
						<div class="text-center"><?php $_CONTROL->dtrComments->Paginator->Render(); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>