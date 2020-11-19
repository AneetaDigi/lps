<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
		<footer>
            <div class="get-touch">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 d-flex align-items-center">
                            <h4>LET'S START SOMETHING GREAT </h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="button-call">
                                <a href="javascript:void(0)">Get In Touch</a>
                                <h6>Call Now: <span>(+91) 08048-765279</span></h6>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="navigation">
                                <h4>Navigation</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Company Brief</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Our products</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Contact Us</a>
                                    </li>

                                </ul>
                            </div>    
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-image">
                                <img class="img-fluid" src="http://localhost/pls-new-project/wp-content/uploads/2020/11/Logo_white.png">
                                <h6>1943/6, Kabir Woolen Complex, 422, Industrial Area A, Ludhiana - 141003, Punjab, India</h6>
                            </div>    
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="specialties">
                                <h4>Specialties</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Black baret Cap</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Army Pullover</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Dress Aiguillette</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Shoulder Sash</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Plaited Lanyard</a>
                                    </li>
                                </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="social-icons text-center">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>    
                        </div>
                        <div class="col-lg-8 col-md-8 col-xs-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="copyright text-center">
                                <h6><span><i class="fa fa-copyright"></i></span>2020 PLS Co. Design Designed by Digimantra Labs</h6>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </footer>
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
