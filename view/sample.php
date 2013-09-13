	<div class="modal-body">
		<h5>Main site ( <?php echo anchor( site_url('/') ); ?> ) : </h5>
		<ul class="thumbnails">
			<li class="span2"> Browser: <?php echo get_qr( ); ?></li>
			<li class="span2"> Facebook share: <?php echo get_fb_qr( ); ?></li>
			<li class="span2"> Google+ share: <?php echo get_gp_qr( ); ?></li>

		</ul>

		<h5>Share current URL ( <?php echo anchor( current_url() ); ?> ) : </h5>
		<ul class="thumbnails">
			<li class="span2"> Browser: <?php echo get_qr( current_url() ); ?></li>
			<li class="span2"> Facebook share: <?php echo get_fb_qr( current_url() ); ?></li>
			<li class="span2"> Google+ share: <?php echo get_gp_qr( current_url() ); ?></li>
		</ul>
	</div>