<?php
/**
 * 
 */

$url = elgg_get_site_url() . 'twitter_api/forward';
$img_url = elgg_get_site_url() . 'mod/twitter_api/graphics/sign_in_with_twitter.gif';

$login = <<<__HTML
<div id="login_with_twitter">
	<a href="$url">
		<img src="$img_url" alt="Twitter" />
	</a>
</div>
__HTML;

echo $login;
