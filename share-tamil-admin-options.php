<style type="text/css">
a.company{
	text-decoration: none;
	font: 600 16px sens-sarif, arial, verdana;
	color: #ff2f2f;
}

.wp-social-box{
	float: left;
	width: 250px;
	background-color: whiteSmoke;
	background-image: -ms-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -moz-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -o-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -webkit-gradient(linear,left top,left bottom,from(#F9F9F9),to(whiteSmoke));
	background-image: -webkit-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: linear-gradient(top,#F9F9F9,whiteSmoke);
	border-color: #DFDFDF;
	-moz-box-shadow: inset 0 1px 0 #fff;
	-webkit-box-shadow: inset 0 1px 0 white;
	box-shadow: inset 0 1px 0 white;
	-webkit-border-radius: 3px;
	webkit-border-radius: 3px;
	border-radius: 3px;
	border-width: 1px;
	border-style: solid;
	position: relative;
	margin-bottom: 20px;
	padding: 0;
	border-width: 1px;
	border-style: solid;
	line-height: 1;
	margin-left: 10px;
}
.wp-social-box h3 {
	font-size: 15px;
	font-weight: normal;
	padding: 7px 10px;
	margin: 0;
	line-height: 1;
	font-family: Georgia,"Times New Roman","Bitstream Charter",Times,serif;
	cursor: move;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	color: #464646;
	border-bottom-color: #DFDFDF;
	text-shadow: white 0 1px 0;
	-moz-box-shadow: 0 1px 0 #fff;
	-webkit-box-shadow: 0 1px 0 white;
	box-shadow: 0 1px 0 white;
	background-color: #F1F1F1;
	background-image: -ms-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: -moz-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: -o-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: -webkit-gradient(linear,left top,left bottom,from(#F9F9F9),to(#ECECEC));
	background-image: -webkit-linear-gradient(top,#F9F9F9,#ECECEC);
	background-image: linear-gradient(top,#F9F9F9,#ECECEC);
	margin-top: 1px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	cursor: move;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}
</style>
<div class="wrap" style="margin-top: 30px;margin-left: 30px;max-width:950px !important;">
<form action="<?php echo $action_url ?>" method="post">
		<input type="hidden" name="submitted" value="1" />
		<?php wp_nonce_field('share-tamil-by-techtamil-karthik'); ?>

<div class="wp-social-box">
	<h3>Single Posts Setting</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row" style="width: 150px;">Enable Plugin?</th>
					<td>
						<fieldset>
							<legend class="hidden">Enable Share Tamil Plugin?</legend>
							<label for="feedurl"><input type="checkbox" name="post_enable" value="post_enable" <?php echo $settings['post_enable']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 150px;">Tamil Manam</th>
					<td>
						<fieldset>
							<legend class="hidden">Tamilmanam</legend>
							<label for="feedurl"><input type="checkbox" name="post_tamilmanam" value="post_tamilmanam" <?php echo $settings['post_tamilmanam']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
                <tr valign="top">
					<th scope="row" style="width: 150px;">Indli Tamil</th>
					<td>
						<fieldset>
							<legend class="hidden">IndliTamil</legend>
							<label for="feedurl"><input type="checkbox" name="post_indli" value="post_indli" <?php echo $settings['post_indli']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
                  <tr valign="top">
					<th scope="row" style="width: 150px;">Tamil 10</th>
					<td>
						<fieldset>
							<legend class="hidden">Tamil 10</legend>
							<label for="feedurl"><input type="checkbox" name="post_tamil10" value="post_tamil10" <?php echo $settings['post_tamil10']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row" style="width: 150px;">Facebook Share</th>
					<td>
						<fieldset>
							<legend class="hidden">Facebook Share</legend>
							<label for="feedurl"><input type="checkbox" name="post_facebook_share" value="post_facebook_share" <?php echo $settings['post_facebook_share']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
                 <tr valign="top">
					<th scope="row" style="width: 150px;">Twitter</th>
					<td>
						<fieldset>
							<legend class="hidden">Twitter</legend>
							<label for="feedurl"><input type="checkbox" name="post_twitter" value="post_twitter" <?php echo $settings['post_twitter']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 150px;">Google Plus</th>
					<td>
						<fieldset>
							<legend class="hidden">Google Plus</legend>
							<label for="feedurl"><input type="checkbox" name="post_gplus" value="post_gplus" <?php echo $settings['post_gplus']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
                <tr valign="top">
					<th scope="row" style="width: 150px;">Facebook Like</th>
					<td>
						<fieldset>
							<legend class="hidden">Facebook Like</legend>
							<label for="feedurl"><input type="checkbox" name="post_facebook" value="post_facebook" <?php echo $settings['post_facebook']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 150px;">Linkedin</th>
					<td>
						<fieldset>
							<legend class="hidden">Linkedin</legend>
							<label for="feedurl"><input type="checkbox" name="post_linkedin" value="post_linkedin" <?php echo $settings['post_linkedin']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 150px;">Stumbleupon</th>
					<td>
						<fieldset>
							<legend class="hidden">Stumbleupon</legend>
							<label for="feedurl"><input type="checkbox" name="post_stumbleupon" value="post_stumbleupon" <?php echo $settings['post_stumbleupon']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 150px;">Digg</th>
					<td>
						<fieldset>
							<legend class="hidden">Digg</legend>
							<label for="feedurl"><input type="checkbox" name="post_diggthis" value="post_diggthis" <?php echo $settings['post_diggthis']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 150px;">reddit</th>
					<td>
						<fieldset>
							<legend class="hidden">reddit</legend>
							<label for="feedurl"><input type="checkbox" name="post_reddit" value="post_reddit" <?php echo $settings['post_reddit']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 150px;">Evernote</th>
					<td>
						<fieldset>
							<legend class="hidden">Evernote</legend>
							<label for="feedurl"><input type="checkbox" name="post_evernote" value="post_evernote" <?php echo $settings['post_evernote']=="yes"? 'checked="checked"': '' ; ?>  /></label>
						</fieldset>
					</td>
				</tr>
               
			</tbody>
		</table>
	</div>
<div class="wp-social-box" style="">
	<h3>Developer Information</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<td>
						Developed By <a href="http://techtamil.com/about/" target="_blank" class="company">TechTamil Karthik</a>.<br />
						<strong>Follow me in twitter:</strong> <a href="http://twitter.com/techtamil" target="_blank">Twitter Follow</a><br />
						<strong>Add me in Facebook:  </strong> <a href="http://www.facebook.com/karthikeyanzillion" target="_blank">Facebook Profile</a><br />

					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
    
    
    <div class="wp-social-box" style="">
	<h3>What else TechTamil Karthik Do?</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<td>
						<a href="http://blaze.ws/portfolio.php" target="_blank">PHP Web Development</a><br />
						<a href="http://blazepower.com/customers.php" target="_blank">Solar Power Projects</a><br />
                        <a href="http://hyperbig.com" target="_blank">Big Dedicated Servers</<br />
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
    
    
	
	<div class="submit" style="float: left; display: block; width: 100%;"><input type="submit" name="Submit" value="Update" /></div>
		</form>
	<div class="submit" style="float: left; display: block; width: 100%;">
		
		<br /><br /> Proudly Made in <b>Madurai</b>.
        </p>
	</div>
</div>

