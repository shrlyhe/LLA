<?php

/**  
 * Copyright 2013-2018 Epsiloncool
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 ******************************************************************************
 *  I am thank you for the help by buying PRO version of this plugin 
 *  at https://fulltextsearch.org/ 
 *  It will keep me working further on this useful product.
 ******************************************************************************
 * 
 *  @copyright 2013-2018
 *  @license GPL v3
 *  @package Wordpress Fulltext Search Pro
 *  @author Epsiloncool <info@e-wm.org>
 */

?><div class="wrap">
    <?php require dirname(__FILE__).'/admin_header.php'; ?>

	<h2 class="nav-tab-wrapper wpfts_tabs">
	<?php
	$tabs = array(
		'main_config' => __('Main Configuration', 'wpfts_lang'),
		'indexing_engine_settings' => __('Indexing Engine Settings', 'wpfts_lang'),
		'smart_excerpts' => __('Smart Excerpts', 'wpfts_lang'),
		'sandbox_page' => __('Sandbox Area', 'wpfts_lang'),
	);
	$current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'main_config';
	foreach ($tabs as $tab_key => $tab_caption) {
		$active = ($current_tab == $tab_key) ? " nav-tab-active" : "";
		echo '<a class="nav-tab'.$active.'" href="?page=wpfts-options&amp;tab='.$tab_key.'">'.$tab_caption.'</a>';
	}
	?>
	</h2>
	<?php

	switch ($current_tab) {
		case 'main_config':
				?>
    			<form method="post" id="wpftsi_form">
					<?php wp_nonce_field( 'wpfts_options', 'wpfts_options-nonce' ); ?>
        			<div id="poststuff">

						<div id="post-body" class="metabox-holder columns-2">
				
							<!-- Main Content -->
				    		<div id="postbox-container-1" class="postbox-container">
			            		<?php do_meta_boxes('wpfts-options', 'side', array()); ?>
	        	    		</div>

			    			<div id="postbox-container-2" class="postbox-container">
		            			<?php do_meta_boxes('wpfts-options', 'normal1', array()); ?>
	            			</div>

			    			<div>
		            			<button type="button" class="button-primary wpfts_submit" name="update_options"><?php echo __('Save Changes', 'wpfts_lang'); ?></button>
	            			</div>
						</div>
        			</div><!--#poststuff-->
    			</form>
				<?php
			break;
		case 'indexing_engine_settings':
					?>
    				<form method="post" id="wpftsi_form2">
						<?php wp_nonce_field( 'wpfts_options', 'wpfts_options-nonce' ); ?>
        				<div id="poststuff">

							<div id="post-body" class="metabox-holder columns-2">
				
								<!-- Main Content -->
			    				<div id="postbox-container-1" class="postbox-container">
		            				<?php do_meta_boxes('wpfts-options', 'side', array()); ?>
	            				</div>

			    				<div id="postbox-container-2" class="postbox-container">
		            				<?php do_meta_boxes('wpfts-options', 'normal2', array()); ?>
	            				</div>

			    				<div>
									<button type="button" class="button-primary wpfts_submit2" name="update_options" data-confirm="<?php echo htmlspecialchars(__('Changing of Indexing Engine Settings will automatically upgrade the search index. This operation could take some time. Are you sure?', 'wpfts_lang')); ?>"><?php echo __('Save Changes and Upgrade Index', 'wpfts_lang'); ?></button>
	            				</div>
							</div>
        				</div><!--#poststuff-->
    				</form>
					<?php
			break;
		case 'smart_excerpts':
				?>
				<form method="post" id="wpftsi_form5">
					<?php wp_nonce_field( 'wpfts_options', 'wpfts_options-nonce' ); ?>
					<div id="poststuff">
	
						<div id="post-body" class="metabox-holder columns-2">
					
							<!-- Main Content -->
							<div id="postbox-container-1" class="postbox-container">
								<?php do_meta_boxes('wpfts-options', 'side', array()); ?>
							</div>
	
							<div id="postbox-container-2" class="postbox-container">
								<?php do_meta_boxes('wpfts-options', 'normal5', array()); ?>
							</div>
	
							<div>
								<button type="button" class="button-primary wpfts_submit5" name="update_options"><?php echo __('Save Changes', 'wpfts_lang'); ?></button>
							</div>
						</div>
					</div><!--#poststuff-->
				</form>
				<?php
				break;
		case 'sandbox_page':
				?>
    			<form method="post" id="wpftsi_form3">
					<?php wp_nonce_field( 'wpfts_options', 'wpfts_options-nonce' ); ?>
        			<div id="poststuff">

						<div id="post-body" class="metabox-holder columns-2">
				
							<!-- Main Content -->
			    			<div id="postbox-container-1" class="postbox-container">
		            			<?php do_meta_boxes('wpfts-options', 'side', array()); ?>
	            			</div>

			    			<div id="postbox-container-2" class="postbox-container">
		            			<?php do_meta_boxes('wpfts-options', 'normal3', array()); ?>
	            			</div>

						</div>
        			</div><!--#poststuff-->
    			</form>
				<?php
			break;
	}
	?>
</div>
