			<aside id="sidebar">
				<?php 
					//Se le pasa como parametro el id de registro del sidebar
					if( is_active_sidebar( 'main_sidebar' ) ) {
						dynamic_sidebar( 'main_sidebar' );
					} 
					//Lo que haremos si el sidebar no tiene nada que mostrar, mostrar un form de busqueda con título de referencia traducible
					else { ?>
						<div class="widget">
							<h3 class="widget-title">
								<?php _e('Buscar', 'apk')?>
							</h3>
							<div class="widget-content">
								<?php get_search_form( )?>
							</div>
						</div>
					<?php 
					}
				?>

				<!--
				<div class="widget"> 
					<h3 class="widget-title">Widget de texto</h3>
					<div class="widget-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				-->
				
				
			</aside><!-- /#sidebar -->