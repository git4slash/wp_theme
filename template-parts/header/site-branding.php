<?php
	/**
	 * Created by IntelliJ IDEA.
	 * User: SubbAlIg
	 * Date: 28.09.2018
	 * Time: 12:51
	 */
?>

<div class="site-branding">

    <!-- Start logo svg from old main paige -->
    <?php //<svg class="icon-logo" viewBox="0 0 59 40" width="100%" height="100%"> ?>
    <svg class="icon-logo" viewBox="0 0 59 40">
        <title>finleap</title>
        <path d="M58.623 19.83a2.105 2.105 0 0 0-.006-.405c-.065-1.752-.482-2.55-.482-2.55.423-5.184-1.938-9.377-1.999-9.438C51.712-.146 44.366.17 44.366.012c-9.4-.237-17.141 3.08-17.141 3.08l-2.335 1.12c-2.054-.204-11.817-.946-17.514 2.664 0 0 6.073-.746 5.551 5.696C1.373 23.655.13 39.746.13 39.746 22.011 5.384 56.294 21.26 56.215 21.182c.038.012.075.022.112.032a1.698 1.698 0 0 0 2.273-1.237s.027-.138.023-.138v-.009z"
              fill="#FFF" fill-rule="evenodd"></path>
    </svg>
    <!-- End logo svg from old main paige -->

	<?php
		//    the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </h1>
		<?php
		else :
			?>
            <p class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </p>
		<?php
		endif;
		$fintec_new_description = get_bloginfo( 'description', 'display' );
		if ( $fintec_new_description || is_customize_preview() ) :
			?>
            <p class="site-description"><?php echo $fintec_new_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
</div><!-- .site-branding -->