<?php
namespace Hawalius\Plugins;
class Youtube extends \Hawalius\Plugin{
	public function show_post($post){
		$template = '<div class="youtube_video">
	<object width="640" height="365">
		<param name="movie" value="http://www.youtube.com/v/$1&hl=en"></param>
		<param name="wmode" value="transparent"></param>
		<embed src="http://www.youtube.com/v/$1&hl=en" type="application/x-shockwave-flash" wmode="transparent" width="640" height="365"></embed>
		</object>
</div>';
		$content = preg_replace('~https?://(?:[0-9A-Z-]+\.)?(?:youtu\.be/|youtube\.com\S*[^\w\-\s])([\w\-]{11})(?=[^\w\-]|$)(?![?=&+%\w]*(?:[\'"][^<>]*>|</a>))[?=&+%\w-]*~ix', $template, $post['content']);
		$post['content'] = $content;
		return $post;
	}
}