QR helper 
=========

QR helper
PHP helper for generate QR for easily Mobile access

What to solve?
I build this helper to easily generate a QR for mobile to scran and browse site page, share on Facebook FB or Google plus.

How to call ?
This helper passing data to google char api and come back as a QR img src.
ex. 
'''
get_qr(); // basic call to generate QR default as site root
get_fb_qr(); // basic call to generate QR with facebook share 
'''
Example code :
'''
	<div class="modal-body">
		<h5>Main site ( <?php echo anchor( site_url('/') ); ?> ) : </h5>
		<ul class="thumbnails">
			<li class="span2"> Browser: <?php echo get_qr( ); ?></li>
			<li class="span2"> Facebook share: <?php echo get_fb_qr( ); ?></li>
			<li class="span2"> Google+ share: <?php echo get_gp_qr( ); ?></li>

		</ul>

		<h5>current URL ( <?php echo anchor( current_url() ); ?> ) : </h5>
		<ul class="thumbnails">
			<li class="span2"> Browser: <?php echo get_qr( current_url() ); ?></li>
			<li class="span2"> Facebook share: <?php echo get_fb_qr( current_url() ); ?></li>
			<li class="span2"> Google+ share: <?php echo get_gp_qr( current_url() ); ?></li>
		</ul>
	</div>
'''
Live demo example:
http://zonmine.com/en/product/trend?fast_pass=1