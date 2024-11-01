<?php
/*
Plugin Name: Share Tamil
Version: 1.2
Description: Add your posts to Tamilmanam, Tamil 10, Indli, Facebook, Twitter & Google Plus. Go to: Settings > Share Tamil. 
Author: TechTamil Karthik
Author URI: http://www.techtamil.com/about/
Plugin URI: http://www.techtamil.com/computer-tips-tricks-in-tamil/wordpress-plugin-share-tamil/
*/

/*Check Version*/
global $wp_version;
$exit_msg="WP Requires Latest version, Your version is old";
if(version_compare($wp_version, "3.0", "<"))
{
	exit($exit_msg);
}

if(!class_exists(WPShareTamil)):
	class WPShareTamil{
		function WPShareTamilThisCatsPosts($content)
		{
			$options = $this->get_share_tamil_options();
			if(is_single()){
				if($options['post_enable'] == "yes" || $options['post_enable'] != "no"){
					return $content.$this->share_tamil_single_post();
				}else{
					return $content;
				}
			}else if(is_home() || is_category() || is_page()){
				
					return $content;
				}
			
		}

		function handle_share_tamil_options()
		{
			$settings = $this->get_share_tamil_options();
			if (isset($_POST['submitted']))
			{
				//check security
				//check_admin_referer('wp-share-tamil-by-techtamil-karthik');
				
				$settings['post_enable'] = isset($_POST['post_enable'])? "yes" : "no" ;
				$settings['post_twitter'] = isset($_POST['post_twitter'])? "yes" : "no" ;
				$settings['post_tamilmanam'] = isset($_POST['post_tamilmanam'])? "yes" : "no" ;
				$settings['post_indli'] = isset($_POST['post_indli'])? "yes" : "no" ;
				$settings['post_tamil10'] = isset($_POST['post_tamil10'])? "yes" : "no" ;
				$settings['post_gplus'] = isset($_POST['post_gplus'])? "yes" : "no" ;
				$settings['post_facebook'] = isset($_POST['post_facebook'])? "yes" : "no" ;
				$settings['post_facebook_share'] = isset($_POST['post_facebook_share'])? "yes" : "no" ;
				$settings['post_linkedin'] = isset($_POST['post_linkedin'])? "yes" : "no" ;
				$settings['post_stumbleupon'] = isset($_POST['post_stumbleupon'])? "yes" : "no" ;
				$settings['post_diggthis'] = isset($_POST['post_diggthis'])? "yes" : "no" ;
				$settings['post_reddit'] = isset($_POST['post_reddit'])? "yes" : "no" ;
				$settings['post_evernote'] = isset($_POST['post_evernote'])? "yes" : "no" ;
				update_option("share_tamil_options", serialize($settings));
				echo '<div class="updated fade"><p>Setting Updated!</p></div>';
			}
			$action_url = $_SERVER['REQUEST_URI'];
			include 'share-tamil-admin-options.php';
		}
		

		//Share Tamil for Single Post
		function share_tamil_single_post() {
		global $post;
		$options = $this->get_share_tamil_options();
		$permalinked = urlencode(get_permalink($post->ID));
		$spermalink = get_permalink($post->ID);
		$title = urlencode($post->post_title);
		$stitle = $post->post_title;
		$cmt=$post->comment_count;
		$date=(mysql2date('m/d/Y',$post->post_date));
		$blogurl = (get_bloginfo('wpurl'));
		$photo= ($imagefile);
		
		
		$data = '<div class="share_single_tamil_wrapper">';
		
		
		
		 if ($options['post_facebook_share'] == "yes") { 
						$data .= '<div class="share_tamil_facebook_share wpsh_item">
							<a expr:share_url="'. $permalinked .'" href="http://www.facebook.com/sharer.php" name="fb_share" type="box_count">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
						</div> <!--facebook Button-->';
			 }	
		
			 if ($options["post_twitter"] == "yes") 
				 { 
						   $data .='<div class="share_tamil_twitter wpsh_item" >
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="'. $spermalink .'" data-text="'.$stitle.'" data-count="vertical">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
					</div> <!--Twitter Button-->';
				 }
				 
				
			 
			 if ($options["post_indli"] == "yes") 
		 { 
			$lang="ta";
			$orient = "hori";  //vert  hori
			$data .= "<div class='share_tamil_gplus wpsh_item' >";
			$data .= '<script type=\'text/javascript\'> button="'.$orient.'"; lang="'.$lang.'"; submit_url ="'.$spermalink.'" </script><script src="';
			if ($lang == 'ta')
			$data .= 'http://ta.indli.com/tools/voteb.php';
			$data .= '" type=\'text/javascript\'/></script> ';  
			$data .= "</script>\n</div>";
		 }
				 
		 if ($options["post_tamil10"] == "yes") 
		 { 
		 	$data .= "<div class='share_tamil_gplus wpsh_item' >";
			 $data .= '<script type=\'text/javascript\'>	submit_url = '.$spermalink.' </script>
		     <script src=\'http://tamil10.com/submit/evb/button.php\'></script></DIV>';
			 
		 }
		if ($options["post_tamilmanam"] == "yes") 
		{ 
			$thamizmanamURL = "http://services.thamizmanam.com/toolbar.php";
			$srcURL = $thamizmanamURL."?date=".$date."&amp;posturl=".($spermalink)."&amp;cmt=".$cmt."&amp;blogurl=".($blogurl)."&amp;photo=".($photo);
            // Tamilmanam posting code.
            
            $data .= "<div class='share_tamil_tamilmanam wpsh_item' >
					<script language=\"javascript\" type=\"text/javascript\" src=\"".$srcURL."\">\n";
            $data .= "</script>";
            $data .= "</div>";
		 }
				 
		  
				 
	     if ($options["post_gplus"] == "yes") { 
					$data .= '<div class="share_tamil_gplus wpsh_item">
				<!-- Place this tag where you want the +1 button to render -->
				<div class="g-plusone" data-size="tall" data-href="'. $permalinked .'"></div>

				<!-- Place this render call where appropriate -->
				<script type="text/javascript">
				  (function() {
					var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
					po.src = "https://apis.google.com/js/plusone.js";
					var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
					</div> <!--google plus Button-->';
				  } 

			 if ($options['post_facebook'] == "yes") { 
						$data .= '<div class="share_tamil_facebook wpsh_item">
							<iframe src="http://www.facebook.com/plugins/like.php?href='. $permalinked .'&amp;send=false&amp;layout=box_count&amp;width=44&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:44px; height:62px;" allowTransparency="true"></iframe>
						</div> <!--facebook Button-->';
			 }

					 

			 if ($options['post_linkedin'] == "yes") { 
						$data .= '<div class="share_tamil_linkedin wpsh_item">
						<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
						<script type="IN/Share" data-url="'. $permalinked .'" data-counter="top"></script>
						</div> <!--linkedin Button-->';
			 } 

			 if ($options['post_diggthis'] == "yes") { 
						$data .= '<div class="share_tamil_digg wpsh_item">
					<script type="text/javascript">
					(function() {
					var s = document.createElement("SCRIPT"), s1 = document.getElementsByTagName("SCRIPT")[0];
					s.type = "text/javascript";
					s.async = true;
					s.src = "http://widgets.digg.com/buttons.js";
					s1.parentNode.insertBefore(s, s1);
					})();
					</script>
					<!-- Medium Button -->
					<a class="DiggThisButton DiggMedium"
					href="http://digg.com/submit?url='. $permalinked .'&amp;title='. $title .'"></a>
					</div> <!--Digg Button-->';
			 } 

			 if ($options['post_evernote'] == "yes") { 
						$data .= '<div class="share_tamil_evernote wpsh_item">
						<script type="text/javascript" src="http://static.evernote.com/noteit.js"></script>
						<a href="#" onclick="Evernote.doClip({contentId:"article_content",providerName:"'. $permalinked .'",suggestNotebook:"'. $title .'"}); return false;"><img src="http://static.evernote.com/article-clipper-vert.png" alt="Clip to Evernote" /></a>
						</div> <!--evernote Button-->';
			 } 

			 if ($options['post_reddit'] == "yes") { 
						$data .='<div class="share_tamil_reddit wpsh_item">
							<script type="text/javascript">
							  reddit_url = "'. $permalinked .'";
							  reddit_title = "'. $title .'";
							</script>
							<script type="text/javascript" src="http://www.reddit.com/static/button/button3.js"></script>
						</div><!--reddit Button-->';
			 } 
			 
			 
	//$data .= '<div class="share_tamil_reddit wpsh_item"><a href="http://www.techtamil.com/computer-tips-tricks-in-tamil/wordpress-plugin-share-tamil/" target="_blank"><font color="red" size="8px">Share</font><font color="green" size="8px">Tamil</font></a></div>';	 
				 
			$data .= '</div>';
			return $data;
		 }

		function share_tamil_HeadAction()
		{
			echo '<style type="text/css">
					.share_single_tamil_wrapper {
						background: #F4F4F4;border: 2px solid #EBEBEB;margin-bottom: 6px;margin-top: 6px;overflow: hidden;height: 62px;padding: 10px;
					}
					.wpsh_item {
						float: left;margin-right: 10px;
					}
				
					}
				 </style>';
		}
		function get_share_tamil_options()
		{
			$options = unserialize(get_option("share_tamil_options"));
			return $options;
		}
		function WP_share_tamil_install()
		{
			$options = array(
				
				'post_enable' => 'yes',
				'post_tamilmanam' => 'yes',
				'post_tamil10' => 'yes',
				'post_indli' => 'yes',
				'post_gplus' => 'no',
				'post_twitter' => 'yes',
				'post_facebook' => 'no',
				'post_facebook_share' => 'yes',
				'post_linkedin' => 'no',
				'post_stumbleupon' => 'no',
				'post_diggthis' => 'no',
				'post_reddit' => 'no',
				'post_evernote' => 'no'
			);
			add_option("share_tamil_options", serialize($options));
		}
		function share_tamil_admin_menu()
		{
			add_options_page('Share Tamil', 'Share Tamil', 8, basename(__FILE__), array(&$this, 'handle_share_tamil_options'));
		}
	}
else:
	exit('WPShareTamil Already Exists');
endif;

$WPShareTamil = new WPShareTamil();
if(isset($WPShareTamil)){
	register_activation_hook(__FILE__, array(&$WPShareTamil, 'WP_share_tamil_install'));
	add_filter('wp_head', array(&$WPShareTamil, 'share_tamil_HeadAction'));
	add_filter('the_content', array(&$WPShareTamil, 'WPShareTamilThisCatsPosts'));
	add_action('admin_menu', array(&$WPShareTamil, 'share_tamil_admin_menu'));
}


?>