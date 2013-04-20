<?php
namespace Hawalius\Plugins;

class Test extends \Hawalius\Plugin{
	public function show_post($post){
		$tmp = $post;
		$tmp['content'] = '<p>lol this is written by plugin</p>'. $tmp['content'];
		return $tmp;
	} 
	
	public function post_before(){
		return 'before';
	}
	
	
	public function post_after(){
		return 'after';
	}
	

	public function footer(){
		return 'look i am a footer';
	}
}