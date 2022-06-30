<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage wphealth
 * @since wphealth 1.0
 */

?>
<div class="container">

	<section class="http-error">
		<div class="row justify-content-center py-52">
			<div class="col-md-12 text-center">
				<div class="http-error-main">
					<h2>404!</h2>
					<p>We're sorry, but the page you were looking for doesn't exist.</p>
				</div>
				<a href="<?= get_home_url()?>" class="btn btn-primary btn-rounded btn-xl font-weight-semibold text-2 px-4 py-3 mt-1 mb-4"><i class="fas fa-angle-left pr-3"></i>GO BACK TO HOME PAGE</a>
			</div>
		</div>
	</section>

</div>