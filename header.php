<?php
    /*
     *      OSCLass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2010 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

    osc_show_flash_message() ;
?>

<!-- header -->
<div id="header">
<!-- wrapper -->
	<div class="wrapper">
	<!-- holder -->
		<div class="holder">
			<h1 class="logo"><a href="<?php echo osc_base_url() ; ?>"><?php echo logo_header(); ?></a></h1>
		    <div id="user_menu">
		            <?php if(osc_users_enabled()) { ?>
		                <?php if( osc_is_web_user_logged_in() ) { ?>
			                <ul>
			                    <li class="first logged">
			                        <?php echo sprintf(__('Hi %s', 'modern'), osc_logged_user_name() . '!'); ?>  &middot;
			                        <strong><a href="<?php echo osc_user_dashboard_url() ; ?>"><?php _e('My account', 'modern') ; ?></a></strong> &middot;
			                        <a href="<?php echo osc_user_logout_url() ; ?>"><?php _e('Logout', 'modern') ; ?></a>
			                    </li>
			                 </ul>
		                <?php } else { ?>
			                <div class="login-block">
		                		<?php if(osc_user_registration_enabled()) { ?>
		                            <a href="<?php echo osc_register_account_url() ; ?>" class="account"><?php _e('Create a new account', 'modern'); ?></a>
		                        <?php }; ?>
		                        <span class="sign"><span>Sign in</span></span>
		                        <form class="sign-form" action="<?php echo osc_base_url(true) ; ?>" method="post">
									<fieldset>
										<input type="hidden" name="page" value="login" />
		                                <input type="hidden" name="action" value="login_post" />
										<div class="row">
											<span class="text"><?php UserForm::email_login_text() ; ?></span>
											<span class="text"><?php UserForm::password_login_text() ; ?></span>
											<input type="submit" value="<?php _e('Log in', 'modern') ; ?>" class="submit" />
										</div>
										<div class="row">
											<label for="remember"><?php _e('Remember me', 'modern') ; ?></label>
											<?php UserForm::rememberme_login_checkbox();?>
											<a href="<?php echo osc_recover_user_password_url() ; ?>"><?php _e("Forgot password?", 'modern');?></a>
										</div>
									</fieldset>
								</form>
		                        
			                </div>
		                <?php } ?>
		            <?php } ?>
		          
		            <?php /*if ( osc_count_web_enabled_locales() > 1) { ?>
		            	<ul>
			                <?php osc_goto_first_locale() ; ?>
			                <li class="last with_sub">
			                    <strong><?php _e("Language", 'modern') ; ?></strong>
			                    <ul>
			                        <?php $i = 0 ;  ?>
			                        <?php while ( osc_has_web_enabled_locales() ) { ?>
			                            <li <?php if( $i == 0 ) { echo "class='first'" ; } ?>><a id="<?php echo osc_locale_code() ; ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ) ; ?>"><?php echo osc_locale_name() ; ?></a></li>
			                            <?php $i++ ; ?>
			                        <?php } ?>
			                    </ul>
			                </li>
		                </ul>
		            <?php } */?>
		        
		        
		        <?php /* if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>
		            <div class="form_publish">
		                <strong class="publish_button"><a href="<?php echo osc_item_post_url_in_category() ; ?>"><?php _e("Publish your ad for free", 'modern');?></a></strong>
		            </div>
		        <?php } */?>
		       
		    </div>
		</div>
		<!-- /holder -->
		
		<ul id="nav">
			<li><a href="<?php echo osc_base_url() ; ?>">Home</a></li>
			<li><a href="#">Job Seekers</a></li>
			<li><a href="#">Employers</a></li>
			<li><a href="#">Career advice</a></li>
			<li><a href="#">FAQ</a></li>
		</ul>
	</div>
	<!-- /wrapper -->
</div>
<!-- /header -->
<?php    osc_show_widgets('header') ;    ?>
<!-- main -->
<div id="middle">
<!-- wrapper -->
	<div class="wrapper">
<?php 
    $breadcrumb = osc_breadcrumb('&raquo;', false);
    if( $breadcrumb != '') { ?>
    <div class="breadcrumb">
        <?php echo $breadcrumb; ?>
        <div class="clear"></div>
    </div>
<?php
    }
?>