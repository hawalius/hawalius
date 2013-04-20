<?php
namespace Hawalius\Plugins;

class Disqus extends \Hawalius\Plugin{
	public function post_after(){
		return '<div id="disqus_thread"></div>';
	}
	
	public function footer(){
		return '<script type="text/javascript">var disqus_shortname = "' . $this->config['shortname'] . '";(function() {var dsq = document.createElement("script"); dsq.type = "text/javascript";dsq.async = true;dsq.src = "//" + disqus_shortname + ".disqus.com/embed.js"; (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);})();</script>';
	}
}