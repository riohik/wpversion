<?php

//functions 




global $bsp_forum_display ;
global $bsp_login ;
global $bsp_breadcrumb ;
global $bsp_profile ;
global $bsp_style_settings_freshness ;
global $bsp_style_settings_form ;
global $bsp_style_settings_ti ;


/**********forum list create vertical list************/
function bsp_sub_forum_list($args) {
  $args['separator'] = '<br>';
  return $args;
}

if ( !empty ($bsp_forum_display['forum_list'] ))  {
//if ($bsp_forum_display['forum_list'] == true) {
add_filter('bbp_before_list_forums_parse_args', 'bsp_sub_forum_list' );
}

/**********remove counts*********************/
function bsp_remove_counts($args) {
$args['show_topic_count'] = false;
$args['show_reply_count'] = false;
$args['count_sep'] = '';
 return $args;
}

if ( !empty ($bsp_forum_display['hide_counts'] ))  {
//if ($bsp_forum_display['hide_counts'] == true) {
add_filter('bbp_before_list_forums_parse_args', 'bsp_remove_counts' );
}



/**********removes 'private' and protected prefix for forums ********************/
function bsp_remove_private_title($title) {
	if (is_bbpress()  ) {
	return '%s';
	}
		
}


if ( !empty ($bsp_forum_display['remove_private'] ))  {
//if ($bsp_forum_display['remove_private'] == true  ) {
add_filter('private_title_format', 'bsp_remove_private_title');
}



/**********Create new topic    ********/


function bsp_create_new_topica () {
	global $bsp_forum_display ;
	if (!empty ($bsp_forum_display['Create New Topic Description'])) $text=$bsp_forum_display['Create New Topic Description'] ;
	else $text=__('Create New Topic', 'bbp-style-pack') ;
	if ( bbp_current_user_can_access_create_topic_form() && !bbp_is_forum_category() ) echo '<div class="bsp-new-topic">  <a href ="#topic">'.$text.'</a></div>' ;
	}
	
	
function bsp_create_new_topicb () {
	echo '<a name="topic"></a>' ;
	}


if ( !empty($bsp_forum_display['create_new_topic'] ) ) {	
//if ($bsp_forum_display['create_new_topic'] == true ) {
add_action ( 'bbp_template_before_single_forum', 'bsp_create_new_topica' ) ;
add_action( 'bbp_theme_before_topic_form', 'bsp_create_new_topicb' ) ;
}


/**********Add forum description    ********/

/** filter to add description after forums titles on forum index */
function bsp_add_display_forum_description() {
    echo '<div class="bsp-forum-content">' ;
    bbp_forum_content() ;
    echo '</div>';
    }
	
	

if ( !empty($bsp_forum_display['add_forum_description'] ) ) {
//if ($bsp_forum_display['add_forum_description'] == true ) {
add_action( 'bbp_template_before_single_forum' , 'bsp_add_display_forum_description' );
}




/**********BSP LOGIN*******************/
		
/**********adds login/logout to menu*******************/
if (!empty ($bsp_login['add_login'] )) {
add_filter( 'wp_nav_menu_items', 'bsp_nav_menu_login_link' , 10, 2);
}

function bsp_nav_menu_login_link($menu, $args) {
	global $bsp_login ;
	//if primary set and not primary then return
	if (!empty ($bsp_login['only_primary'] ) && $args->theme_location !== 'primary' )   {
		return $menu ;
	}
	//if primary set and is primary  or if primary is not set
	elseif (!empty ($bsp_login['only_bbpress'] )) {
	if(is_bbpress()) {
    $loginlink = bsp_login() ;
    }
    else {
    $loginlink="" ;
    }
	}
	
	else {
	$loginlink = bsp_login();
	}
        $menu = $menu . $loginlink ;
		return apply_filters( 'bsp_nav_menu_login_link', $menu );
       	
}

function bsp_login () {
global $bsp_login ;
if (is_user_logged_in()) {
		if (!empty($bsp_login['Login/logoutLogout page'] )) {
        $url=$bsp_login['Login/logoutLogout page'] ;
		}
		else {
		$url=site_url();
		}		
		$url2=wp_logout_url($url) ;
		//add  menu item name
		$link = (!empty($bsp_login['Add login/logout to menu itemslogout']) ? $bsp_login['Add login/logout to menu itemslogout'] : 'Logout') ;
		//if we have a logout class add it here
		$start = (!empty($bsp_login['Add login/logout to menu itemslogoutcss']) ? '<li> <span class="'.$bsp_login['Add login/logout to menu itemslogoutcss'].'">' :'<li>') ;
		$end = (!empty($bsp_login['Add login/logout to menu itemslogoutcss']) ? '</span>' :'') ;
		$loginlink = $start.'<a href="'.$url2.'">'.$link.'</a>'.$end.'</li>';
		return $loginlink ;
        }
    else {
        if (!empty($bsp_login['Login/logoutLogin page'] )) {
		$url = $bsp_login['Login/logoutLogin page'] ;
		}
		else {
		$url=site_url().'/wp-login.php' ;
		}
		//add  menu item name
		$link = (!empty($bsp_login['Add login/logout to menu itemslogin']) ? $bsp_login['Add login/logout to menu itemslogin'] : 'Login') ;
		//if we have a login class add it here
		$start = (!empty($bsp_login['Add login/logout to menu itemslogincss']) ? '<li> <span class="'.$bsp_login['Add login/logout to menu itemslogincss'].'">' :'<li>') ;
		$end = (!empty($bsp_login['Add login/logout to menu itemslogincss']) ? '</span>' :'') ;
		$loginlink = $start.'<a href="'.$url.'">'.$link.'</a>'.$end.'</li>';
		return $loginlink ;
		
	}
		
}


if (!empty ($bsp_login['edit_profile'] )) {
add_filter( 'wp_nav_menu_items', 'bsp_edit_profile', 10,2 );
}

function bsp_edit_profile ($menu, $args) { 
global $bsp_login ;		
if (!is_user_logged_in())
		return $menu;
	//if primary set and not primary then return
	if (!empty ($bsp_login['profile_only_primary'] ) && $args->theme_location !== 'primary' )   {
		return $menu ;
	}
	//else if it's set to bbpress only and it's not bbpress - then return
	elseif(!empty($bsp_login['profile_only_bbpress'] ) && (!is_bbpress())) {
		return $menu ;	
	}
	else
		$current_user = wp_get_current_user();
		$user=$current_user->user_nicename  ;
		$user_slug =  get_option( '_bbp_user_slug' ) ;
			if (get_option( '_bbp_include_root' ) == true  ) {	
			$forum_slug = get_option( '_bbp_root_slug' ) ;
			$slug = $forum_slug.'/'.$user_slug.'/' ;
			}
			else {
			$slug=$user_slug . '/' ;
			}
			if (!empty($bsp_login['edit profileMenu Item Description'] )) {
			$edit_profile=$bsp_login['edit profileMenu Item Description'] ;
			}
			else $edit_profile = __('Edit Profile', 'bbp-style-pack') ;
			//get url
			$url = get_site_url(); 
			$start = (!empty($bsp_login['edit profilecss']) ? '<li> <span class="'.$bsp_login['edit profilecss'].'">' :'<li>') ;
			$end = (!empty($bsp_login['edit profilecss']) ? '</span>' :'') ;
			$profilelink = $start.'<a href="'. $url .'/' .$slug. $user . '/edit">'.$edit_profile.'</a>'.$end.'</li>';
			

			
		$menu = $menu . $profilelink;
		return apply_filters( 'bsp_edit_profile', $menu );
}

if (!empty ($bsp_login['register'] ) ) {
add_filter( 'wp_nav_menu_items', 'bsp_register', 10,2 );
}

function bsp_register ($menu, $args) { 
global $bsp_login ;	
if (is_user_logged_in())
		return $menu;
	//if primary set and not primary then return
	if (!empty ($bsp_login['register_only_primary'] ) && $args->theme_location !== 'primary' )   {
		return $menu ;
	}
	//else if it's set to bbpress only and it's not bbpress - then return
	elseif(!empty($bsp_login['register_only_bbpress'] ) && (!is_bbpress())) {
		return $menu ;	
	}
	else
	$url = $bsp_login['Register PageRegister page'] ;
	if (!empty($bsp_login['Register PageMenu Item Description'] )) {
        $desc=$bsp_login['Register PageMenu Item Description'] ;
		}
	else $desc=__('Register', 'bbp-style-pack') ;
	$start = (!empty($bsp_login['Register Pagecss']) ? '<li> <span class="'.$bsp_login['Register Pagecss'].'">' :'<li>') ;
	$end = (!empty($bsp_login['Register Pagecss']) ? '</span>' :'') ;
	$registerlink = $start.'<a href="'.$url.'">'.$desc.'</a>'.$end.'</li>';
	$menu = $menu . $registerlink;
		return apply_filters( 'bsp_register', $menu );
		
	
}


function bsp_login_redirect ()  {
	global $bsp_login ;	
	//find out whether we need to do a redirect
	
	$login_page = $bsp_login['Login/logoutLogin page'] ;
	$login_redirect = $bsp_login['Login/logoutLogged in redirect'] ; 
	$length1 = strlen ( site_url() ) ;
	$length2 = strlen ( $login_page ) ;
	$loginslug = substr( $login_page, $length1, $length2 ) ;
	//if the page that we're on ($_SERVER['REQUEST_URI']) is the one that is used for login ($loginslug) then we know that it is a redirect from out login not a widget redirect, so can do our redirect
		if ($_SERVER['REQUEST_URI']   ==  $loginslug) {
		$redirect_to = $login_redirect ;
		return $redirect_to ;
		}
	}


if (!empty ($bsp_login['Login/logoutLogged in redirect'] )) {	
add_filter ('bbp_user_login_redirect_to' , 'bsp_login_redirect') ;
}






/**********breadcrumbs    ********/

//no breadcrumbs
function bsp_no_breadcrumb ($param) { 
return true;
}

if ( !empty( $bsp_breadcrumb['no_breadcrumb'] ) ) {
//if ($bsp_breadcrumb['no_breadcrumb'] == true ) {
add_filter ('bbp_no_breadcrumb', 'bsp_no_breadcrumb');
}



function bsp_breadcrumbs ($args) {
	global $bsp_breadcrumb ;
	if ( !empty( $bsp_breadcrumb['no_home_breadcrumb'] ) ) $args['include_home'] = false;
	//if ($bsp_breadcrumb['no_home_breadcrumb'] == true) $args['include_home'] = false;
	if ( !empty( $bsp_breadcrumb['no_root_breadcrumb'] ) ) $args['include_root'] = false;
	//if ($bsp_breadcrumb['no_root_breadcrumb'] == true) $args['include_root'] = false;
	if ( !empty( $bsp_breadcrumb['no_current_breadcrumb'] ) ) $args['include_current'] = false;
	//if ($bsp_breadcrumb['no_current_breadcrumb'] == true) $args['include_current'] = false;
	if (!empty ($bsp_breadcrumb['Breadcrumb HomeText'] )) $args['home_text'] = $bsp_breadcrumb['Breadcrumb HomeText'];
	if (!empty ($bsp_breadcrumb['Breadcrumb RootText'] )) $args['root_text'] = $bsp_breadcrumb['Breadcrumb RootText'];
	if (!empty ($bsp_breadcrumb['Breadcrumb CurrentText'] )) $args['current_text'] = $bsp_breadcrumb['Breadcrumb CurrentText'];
	return $args ;
	
	
}


//add the filter - if no args set then this does nothing
add_filter('bbp_before_get_breadcrumb_parse_args', 'bsp_breadcrumbs');





//This function changes the text wherever it is quoted
function bsp_change_text( $translated_text, $text, $domain ) {
global $bsp_login ;
	if ( $text == 'You are already logged in.' ) {
	$translated_text = $bsp_login['Login/logoutLogged in text'];
	}
	return $translated_text;
}

if (!empty ($bsp_login['Login/logoutLogged in text'] )) add_filter( 'gettext', 'bsp_change_text', 20, 3 );


//this function adds the gravatar thingy to the profile page
if (!empty ($bsp_profile['gravatar'] )) {
add_action( 'bbp_user_edit_after_name', 'bsp_mention_gravatar' );
}


function bsp_mention_gravatar() {
global $bsp_profile ;
$label = (!empty($bsp_profile['ProfileGravatar Label']) ? $bsp_profile['ProfileGravatar Label'] : '');
$gdesc = (!empty($bsp_profile['ProfileItem Description']) ? $bsp_profile['ProfileItem Description'] : '');
$gurl = (!empty($bsp_profile['ProfilePage URL']) ? esc_html ($bsp_profile['ProfilePage URL']) : '');
$gurl = '<a href="'.$gurl.'" title="Gravatar">' ;
$gurldesc = (!empty($bsp_profile['ProfileURL Description']) ? esc_html ($bsp_profile['ProfileURL Description']) : '');

?>
<div>

	<label for="bbp-gravatar-notice"><?php echo $label ?></label>
	<fieldset style="width: 60%;">
		<span style="margin-left: 0; width: 100%;" name="bbp-gravatar-notice" class="description"><?php echo $gdesc ?> <?php echo $gurl?> <?php echo $gurldesc ?></a>.</span>
	</fieldset>
</div>

<?php

}





//register the new templates location
//so far this just does files in the templates/templates1 directory - set up to allow other variations and only take live those which you need
if (!empty ($bsp_templates['template'] ) && ($bsp_templates['template'] == 1)) {
add_action( 'bbp_register_theme_packages', 'bsp_register_plugin_template1' );
}


//get the template path
function bsp_get_template1_path() {
	return BSP_PLUGIN_DIR . '/templates/templates1';
}

function bsp_register_plugin_template1() {
	bbp_register_template_stack( 'bsp_get_template1_path', 12 );
}
	
	
///////////////////////////////////////////////////FORUM ROLES FUNCTION

add_filter( 'bbp_get_reply_author_role', 'bsp_get_reply_author_role', 10,2); 

function bsp_get_reply_author_role( $author_role, $r ) {
		global $bsp_roles ;
		$reply_id    = bbp_get_reply_id( $r['reply_id'] );
		$role        = bbp_get_user_role( bbp_get_reply_author_id( $reply_id ) );
		$roledisplay = bbp_get_user_display_role( bbp_get_reply_author_id( $reply_id ) );
		//now check if we should display this role, and if not just return
		$type = $role.'type' ;
		//bail if doesn't exist (anymore! - may be an old role that's been deleted)
		if (empty($bsp_roles[$type]) ) {
		$author_role = sprintf( '%1$s<div class="%2$s">%3$s</div>%4$s', $r['before'], esc_attr( $r['class'] ), esc_html( $roledisplay ), $r['after'] );
		return apply_filters( 'bsp_get_reply_author_role', $author_role, $r );
		}
		if ($bsp_roles[$type] ==  5) return ;
		$r['class'] = 'bsp-author-'.$role ;
		//get which display we are showing
		//if image then...
		if ($bsp_roles[$type] ==  1) {
		$image = (!empty($bsp_roles[$role.'image']) ? $bsp_roles[$role.'image'] : '') ;
		$image_height = (!empty($bsp_roles[$role.'image_height']) ? $bsp_roles[$role.'image_height'] : '') ;
		$image_width = (!empty($bsp_roles[$role.'image_width']) ? $bsp_roles[$role.'image_width'] : '') ;
		$role = '<img src = "'.$image.'" height="'.$image_height.'" width="'.$image_width.'" >' ;
		$author_role = sprintf( '%1$s<div class="%2$s">%3$s</div>%4$s', $r['before'], esc_attr( $r['class'] ),  $role , $r['after'] );		
		}
		//if name then...(with either background color if specified or image - styles.php checks which is required)
		if ($bsp_roles[$type] ==  2  || $bsp_roles[$type] ==  3 ) {
		$roledisplay = (!empty($bsp_roles[$role.'name']) ? $bsp_roles[$role.'name'] : $roledisplay) ;
			$author_role = sprintf( '%1$s<div class="%2$s">%3$s</div>%4$s', $r['before'], esc_attr( $r['class'] ), esc_html( $roledisplay ), $r['after'] );
		}
		//if name under image
		if ($bsp_roles[$type] ==  4) {
		$image = (!empty($bsp_roles[$role.'image']) ? $bsp_roles[$role.'image'] : '') ;
		$image_height = (!empty($bsp_roles[$role.'image_height']) ? $bsp_roles[$role.'image_height'] : '') ;
		$image_width = (!empty($bsp_roles[$role.'image_width']) ? $bsp_roles[$role.'image_width'] : '') ;
		$role1 = '<img src = "'.$image.'" height="'.$image_height.'" width="'.$image_width.'" >' ;
		$role2 = (!empty($bsp_roles[$role.'name']) ? $bsp_roles[$role.'name'] : $roledisplay) ;
		
		$author_role = sprintf( '%1$s<div class="%2$s"><ul><li>%3$s</li><li>%4$s</li></ul></div>%5$s', $r['before'], esc_attr( $r['class'] ),  $role1, $role2 , $r['after'] );	 ;
		}
		
		
		return apply_filters( 'bsp_get_reply_author_role', $author_role, $r );
	
	
}

//////////////remove space after the name and before the role


function bsp_break_remove ($author_link) {
$pattern = '#<br /><div class="bsp-author#' ;
$replacement = '<div class="bsp-author' ;
$author_link = preg_replace($pattern, $replacement, $author_link);
return $author_link ;

}


if (!empty ($bsp_roles['removeline'] )) {
	add_filter ('bbp_get_reply_author_link' , 'bsp_break_remove' ) ;
}


////////////////////////////////////////////////////////FRESHNESS DISPLAY

//Check they are activated, and add filters if they are
if (!empty ($bsp_style_settings_freshness ['activate'] ))  {
	//heading name
	if (!empty ($bsp_style_settings_freshness ['heading_name'] )) {
		add_filter( 'gettext', 'bsp_change_translate_text', 20, 3 );		
	}
	//show title
	if (!empty ($bsp_style_settings_freshness ['show_title'] ))  {
		add_action( 'bbp_theme_before_forum_freshness_link', 'bsp_freshness_display_title');
	}
	//show date
	if (!empty ($bsp_style_settings_freshness) && empty($bsp_style_settings_freshness ['show_date'] ))  {
		add_filter('bbp_get_forum_freshness_link', 'bsp_hide_freshness_link' );
		add_filter('bbp_get_topic_freshness_link', 'bsp_hide_freshness_link' );
	}
	//show avatar/name combination as appropriate
	if (!empty($bsp_style_settings_freshness)) {
		add_filter('bbp_before_get_author_link_parse_args', 'bsp_author_freshness_link' );
	}
	//change date format if needed
	if (!empty ($bsp_style_settings_freshness ['date_format'] ) && $bsp_style_settings_freshness ['date_format'] == 2)  {
		add_filter( 'bbp_get_forum_last_active', 'bsp_change_freshness_forum', 10, 2 );
		add_filter( 'bbp_get_topic_last_active', 'bsp_change_freshness_topic', 10, 2 );
	}	

}

function bsp_freshness_display_title ($forum_id = 0) {
	// Verify forum and get last active meta
	$forum_id  = bbp_get_forum_id( $forum_id );
		$active_id = bbp_get_forum_last_active_id( $forum_id );
		$link_url  = $title = '';

		if ( empty( $active_id ) )
			$active_id = bbp_get_forum_last_reply_id( $forum_id );

		if ( empty( $active_id ) )
			$active_id = bbp_get_forum_last_topic_id( $forum_id );

		if ( bbp_is_topic( $active_id ) ) {
			$link_url = bbp_get_forum_last_topic_permalink( $forum_id );
			$title    = bbp_get_forum_last_topic_title( $forum_id );
		} elseif ( bbp_is_reply( $active_id ) ) {
			$link_url = bbp_get_forum_last_reply_url( $forum_id );
			$title    = bbp_get_forum_last_reply_title( $forum_id );
		}
		
		$anchor = '<a href="' . esc_url( $link_url ) . '" title="' . esc_attr( $title ) . '">' . esc_html( $title ) . '</a>';
		echo $anchor.'<p/>' ;
}


function bsp_hide_freshness_link () {
	$anchor = '' ;
	return $anchor ;
}

function bsp_author_freshness_link ($args) {
	global $bsp_style_settings_freshness ;
	if (!empty($bsp_style_settings_freshness ['show_name'])  && !empty($bsp_style_settings_freshness ['show_avatar'] ))  $args ['type'] = 'both' ;
	if (empty($bsp_style_settings_freshness ['show_name'])  && !empty($bsp_style_settings_freshness ['show_avatar'] ))  $args ['type'] = 'avatar' ;
	if (!empty($bsp_style_settings_freshness ['show_name'])  && empty($bsp_style_settings_freshness ['show_avatar'] ))  $args ['type'] = 'name' ;
	if (empty($bsp_style_settings_freshness ['show_name'])  && empty($bsp_style_settings_freshness ['show_avatar'] ))   $args['post_id'] = '' ;
	return $args ;
}

//this function changes the bbp freshness data (time since) into a last post date for forums
function bsp_change_freshness_forum ($forum_id = 0 ) {
	global $bsp_style_settings_freshness ;

// Verify forum and get last active meta
		$forum_id    = bbp_get_forum_id( $forum_id );
		$last_active = get_post_meta( $forum_id, '_bbp_last_active_time', true );

		if ( empty( $last_active ) ) {
			$reply_id = bbp_get_forum_last_reply_id( $forum_id );
			if ( !empty( $reply_id ) ) {
				$last_active = get_post_field( 'post_date', $reply_id );
			} else {
				$topic_id = bbp_get_forum_last_topic_id( $forum_id );
				if ( !empty( $topic_id ) ) {
					$last_active = bbp_get_topic_last_active_time( $topic_id );
				}
			}
		}

		$last_active = bbp_convert_date( $last_active ) ;
		$date_format = (!empty ( $bsp_style_settings_freshness['bsp_date_format'] ) ? $bsp_style_settings_freshness['bsp_date_format'] : get_option( 'date_format' ) );
		$time_format = (!empty ( $bsp_style_settings_freshness['bsp_time_format'] ) ? $bsp_style_settings_freshness['bsp_time_format'] : get_option( 'time_format' ));
		if ($date_format == '\c\u\s\t\o\m' )  $date_format = $bsp_style_settings_freshness['bsp_date_format_custom'] ;
		if ($time_format == '\c\u\s\t\o\m' )  $time_format = $bsp_style_settings_freshness['bsp_time_format_custom'] ;
		$date= date_i18n( "{$date_format}", $last_active );
		$time=date_i18n( "{$time_format}", $last_active );
		//check the order
		if (!empty ($bsp_style_settings_freshness['date_order'])) {
			$first = $time ;
			$second = $date ;
		}
		else {
			$first = $date ;
			$second = $time ;
		}
		$separator = (!empty ($bsp_style_settings_freshness['date_separator'] ) ? $bsp_style_settings_freshness['date_separator']  : ' at ' ) ;
		$active_time = $first.$separator.$second ;
		return apply_filters ('bsp_change_freshness_forum' , $active_time) ;
}


//this function changes the bbp freshness data (time since) into a last post date for topics
function bsp_change_freshness_topic ($last_active, $topic_id) {
	global $bsp_style_settings_freshness ;
	$topic_id = bbp_get_topic_id( $topic_id );

		// Try to get the most accurate freshness time possible
		$last_active = get_post_meta( $topic_id, '_bbp_last_active_time', true );
		if ( empty( $last_active ) ) {
		$reply_id = bbp_get_topic_last_reply_id( $topic_id );
		if ( !empty( $reply_id ) ) {
			$last_active = get_post_field( 'post_date', $reply_id );
		} else {
				$last_active = get_post_field( 'post_date', $topic_id );
			}
		}
		
		
		$last_active = bbp_convert_date( $last_active ) ;
		$date_format = (!empty ( $bsp_style_settings_freshness['bsp_date_format'] ) ? $bsp_style_settings_freshness['bsp_date_format'] : get_option( 'date_format' ) );
		$time_format = (!empty ( $bsp_style_settings_freshness['bsp_time_format'] ) ? $bsp_style_settings_freshness['bsp_time_format'] : get_option( 'time_format' ));
		if ($date_format == '\c\u\s\t\o\m' )  $date_format = $bsp_style_settings_freshness['bsp_date_format_custom'] ;
		if ($time_format == '\c\u\s\t\o\m' )  $time_format = $bsp_style_settings_freshness['bsp_time_format_custom'] ;
		$date= date_i18n( "{$date_format}", $last_active );
		$time=date_i18n( "{$time_format}", $last_active );
		//check the order
		if (!empty ($bsp_style_settings_freshness['date_order'])) {
			$first = $time ;
			$second = $date ;
		}
		else {
			$first = $date ;
			$second = $time ;
		}
		$separator = (!empty ($bsp_style_settings_freshness['date_separator'] ) ? $bsp_style_settings_freshness['date_separator']  : ' at ' ) ;
		$active_time = $first.$separator.$second ;
		return apply_filters ('bsp_change_freshness_topic' , $active_time) ;
}
		
//This function changes the heading "Freshness" to the name created in Settings
function bsp_change_translate_text( $translated_text, $text, $domain ) {
	global $bsp_style_settings_freshness ;
	if (empty ($bsp_style_settings_freshness ['heading_name'] )) return $translated_text;
		$testtext = 'Freshness' ;
		$testdomain = 'bbpress' ;
			if ( ($text == $testtext) && ($domain == $testdomain) ) {
			$translated_text = $bsp_style_settings_freshness ['heading_name'];
			}	
	return $translated_text;
}

////////////////////////////////Submitting and spinner
//new version_compare
if (!empty ( $bsp_style_settings_form['SubmittingActivate'])) {
	add_action ('bbp_theme_before_topic_form_submit_button' , 'bsp_load_spinner_topic' ) ;
	add_action ('bbp_theme_before_reply_form_submit_button' , 'bsp_load_spinner_reply' ) ;
}


function bsp_load_spinner_topic () {
	global $bsp_style_settings_form ;
	//preload spinner so it is ready - css hides this
	echo '<div id="bsp-spinner-load"></div>' ;
	//add button - hidden by css
	echo '<button type="submit" id="bsp_topic_submit" name="bbp_topic_submit" class="button submit">' ;
	//leave as is if field is blanked (user may just want spinner)
	$value = (!empty($bsp_style_settings_form['SubmittingSubmitting']) ? $bsp_style_settings_form['SubmittingSubmitting']  : '') ;
	echo $value ;
	//then add spinner if activated
	if (!empty( $bsp_style_settings_form['SubmittingSpinner'])) echo '<span class="bsp-spinner"></span>' ;
	//then finish button
	echo '</button>' ;
	}
	
	
function bsp_load_spinner_reply () {
	global $bsp_style_settings_form ;
	//preload spinner so it is ready - css hides this
	echo '<div id="bsp-spinner-load"></div>' ;
	//add button - hidden by css
	echo '<button type="submit" id="bsp_reply_submit" name="bbp_reply_submit" class="button submit">' ;
	//leave as is if field is blanked (user may just want spinner)
	$value = (!empty($bsp_style_settings_form['SubmittingSubmitting']) ? $bsp_style_settings_form['SubmittingSubmitting']  : '') ;
	echo $value ;
	//then add spinner if activated
	if (!empty ( $bsp_style_settings_form['SubmittingSpinner'])) echo '<span class="bsp-spinner"></span>' ;
	//then finish button
	echo '</button>' ;
	}
	


	
/////////////////////////////  REPLY SUBSCRIBED
//Add reply subscribed
function bsp_default_reply_subscribed() {

		// Get _POST data  IE is this a first post of a topic?
		if ( bbp_is_post_request() && isset( $_POST['bbp_topic_subscription'] ) ) {
			$topic_subscribed = (bool) $_POST['bbp_topic_subscription'];

		// Get edit data  IE either the author or someone else is editing a topic or reply
		} elseif ( bbp_is_topic_edit() || bbp_is_reply_edit() ) {

			// Get current posts author
			$post_author = bbp_get_global_post_field( 'post_author', 'raw' );

			// Post author is not the current user EG a moderator is altering this. In this case we'll leave the default to blank, 
			//as much of the time mods are correcting or moderating, their not interested in the topic itself !
			if ( bbp_get_current_user_id() !== $post_author ) {
				$topic_subscribed = bbp_is_user_subscribed_to_topic( $post_author );

			// Post author is the current user  IE you're editing your own post, so default should be to see any replies
			} else {
				$topic_subscribed = true ;
				//the next line is what it used to say instead of true
				//bbp_is_user_subscribed_to_topic( bbp_get_current_user_id() );
			}

		// Get current status
		} elseif ( bbp_is_single_topic() ) {
			//the user is writing a new reply ?
			$topic_subscribed = true ;
			//the next line is what it used to say instead of true
			//bbp_is_user_subscribed_to_topic( bbp_get_current_user_id() );

		// No data
		} else {
			$topic_subscribed = true;
			//used to say false !
		}

		// Get checked output
		$checked = checked( $topic_subscribed, true, false );

		return apply_filters( 'default_reply_subscribed', $checked, $topic_subscribed );
}
	
if (!empty ($bsp_style_settings_form ['NotifyActivate'] )) {
add_filter ('bbp_get_form_topic_subscribed', 'bsp_default_reply_subscribed') ;
}

//////////////////////////////  ADD FORUM ID column to admin

add_action("manage_edit-forum_columns", 'bsp_column_add');
add_filter("manage_forum_posts_custom_column", 'bsp_column_value', 10, 3);

function bsp_column_add($columns)  {
	$new = array();
  foreach($columns as $key => $title) {
    if ($key=='bbp_forum_topic_count') // Put the forum ID column before the Topics column
      $new['bsp_id'] = 'Forum ID';
    $new[$key] = $title;
  }
  return $new;
}
	
function bsp_column_value($column_name, $id) {
		if ($column_name == 'bsp_id') echo $id;
	}
			
			
			
/////////////////////////////////////////  ADD LOCK ICON to closed topics

if (!empty ($bsp_style_settings_ti['Lock IconActivate'])) {
add_action( 'bbp_theme_before_topic_title', 'bsp_lock_icon' ) ;
}

function bsp_lock_icon () {
	if (bbp_is_topic_closed()) {
	global $bsp_style_settings_ti ;
	$height = (!empty ($bsp_style_settings_ti['Lock IconSize']) ? ($bsp_style_settings_ti['Lock IconSize']) : 15 ) ;
	echo '<img src="' . plugins_url( 'images/lock.png',dirname(__FILE__)  ) . '" height='.$height.'> ';
	}
}


///////////////////////////REVISIONS

// Only return one entry for revision log otherwise it gets cluttered
function bsp_trim_revision_log( $r='' ) {
	global $bsp_style_settings_t ;
	//if not set up or 'all' then just return
	$rev = (!empty($bsp_style_settings_t['Revisionsrevisions']) ? $bsp_style_settings_t['Revisionsrevisions']  : 'all' ) ;
	if ($rev== 'all') return $r ;
		//if 0, then return none
	if ($rev == 'none') return ;
	else {
		//show only the last n revisions
		$arr = array_slice($r, -$rev);
		return $arr ;
		}
}
 
add_filter( 'bbp_get_reply_revisions', 'bsp_trim_revision_log', 20, 1 );
add_filter( 'bbp_get_topic_revisions', 'bsp_trim_revision_log', 20, 1 );


