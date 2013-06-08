<?php
namespace Hawalius\Plugins;
class Instagram extends \Hawalius\Plugin{
	public function show_post($post){
		$template = '<div class="instagram_image"><img src="http://instagr.am/p/$1/media/?size=m"></div>';
		$content = preg_replace('#instagram\.com\/p\/([_-\d\w]+)#i', $template, $post['content']);
		$content = preg_replace('#instagr\.am\/p\/([_-\d\w]+)#i', $template, $content);
		$post['content'] = $content;
		return $post;
	}
}