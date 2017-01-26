<?php include 'header.php'; ?>

<div class="left-nav">
	  <!-- Nav tabs -->
  <ul class="nav nav-tabs tabs-left" role="tablist">
    <li role="presentation" class="active"><a href="#lloji" aria-controls="lloji" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th"></span>Lloji</a></li>
    <li role="presentation"><a href="#profili" aria-controls="profili" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-asterisk"></span>Profili</a></li>
    <li role="presentation"><a href="#madhesia" aria-controls="madhesia" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-resize-full"></span>Madhesia</a></li>
    <li role="presentation"><a href="#mekanizmi" aria-controls="mekanizmi" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>Mekanizmi</a></li>
    <li role="presentation"><a href="#xhami" aria-controls="xhami" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-unchecked"></span>Xhami</a></li>
    <li role="presentation"><a href="#ngjyra" aria-controls="ngjyra" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-adjust"></span>Ngjyra</a></li>
  </ul>

</div><!-- left nac -->

<div class="content">
		<div class="container left-nav-padding">

		   <div class="page-container col-md-6">
			    <!-- Tab panes -->
			    <div class="tab-content">

			      <div class="tab-pane fade in active" id="lloji">
						<?php include 'php/lloji.php' ?>
			      </div><!-- lloji tab-->

			      <div class="tab-pane" id="profili">
			      		<?php include 'php/profili.php' ?>
			      </div><!-- profili tab -->

			      <div class="tab-pane fade" id="madhesia">
						<?php include 'php/madhesia.php' ?>
			      </div><!-- Madhesia tab-->

			      <div class="tab-pane fade" id="mekanizmi">
			      		<?php include 'php/mekanizmi.php' ?>
			      </div> <!-- Mekanizmi tab -->

			      <div class="tab-pane fade" id="xhami">
			      		<?php include 'php/xhami.php' ?>
			      </div> <!-- Xhami tab -->

			      <div class="tab-pane fade" id="ngjyra">
			      		<?php include 'php/ngjyra.php' ?>
			      </div> <!-- Ngjyra tab -->

			    </div>
			</div> <!-- profili-container col-md-6 -->
		<div class="page-container col-md-6">
		<button type="button" class="perfundo-btn btn btn-primary"> <i class="glyphicon glyphicon-ok-sign"></i>Përfundo</button>
		<?php include 'php/details.php'; ?>
		</div>

		</div><!-- container -->
</div><!-- content -->


<?php include 'footer.php'; ?>