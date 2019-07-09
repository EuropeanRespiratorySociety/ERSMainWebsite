<?php

return [
	'purifier'	=> [
		'enabled'	=> true,
		'settings'	=> [
			'parsedown'	=> [
				'Attr.EnableID'				=> true,
				
				'AutoFormat.RemoveEmpty'	=> true,
				'HTML.Doctype'             	=> 'XHTML 1.0 Transitional',
				'HTML.Allowed'				=> '*[class],*[id],h1,h2,h3,h4,h5,h6,div,b,strong,i,em,a[href|title|name],ul,ol,li,p,br,span,img[width|height|alt|src],code,pre,hr,sup,sub,table,thead,tbody,tr,th,td,iframe[src|width|height|class|frameborder|style]',
				'HTML.Nofollow'				=> true,
				'HTML.TargetBlank'			=> true,
				"HTML.SafeIframe"          => true,
				"URI.SafeIframeRegexp"     	=> "%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/|api.soundcloud.com/tracks/)%",
				'Output.SortAttr'			=> true,
				
				/**
				 * List by https://linkdecrypter.com/
				 */
				'URI.HostBlacklist'			=> []
			]
		]
	]
];