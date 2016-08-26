<?php

return [
	'purifier'	=> [
		'enabled'	=> true,
		'settings'	=> [
			'parsedown'	=> [
				'Attr.EnableID'				=> true,
				
				'AutoFormat.RemoveEmpty'	=> true,
				
				'HTML.Allowed'				=> '*[class],*[id],h1,h2,h3,h4,h5,h6,div,b,strong,i,em,a[href|title|name],ul,ol,li,p,br,span,img[width|height|alt|src],code,pre,hr,sup,table,thead,tbody,tr,th,td',
				'HTML.Nofollow'				=> true,
				'HTML.TargetBlank'			=> true,
				
				'Output.SortAttr'			=> true,
				
				/**
				 * List by https://linkdecrypter.com/
				 */
				'URI.HostBlacklist'			=> []
			]
		]
	]
];