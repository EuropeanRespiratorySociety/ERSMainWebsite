<?php 
namespace App\Extensions;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;

class BingHelper {
	public function search($query){
        //all available markets es-AR,en-AU,de-AT,nl-BE,fr-BE,pt-BR,en-CA,fr-CA,es-CL,da-DK,fi-FI,fr-FR,de-DE,zh-HK,en-IN,en-ID,en-IE,it-IT,ja-JP,ko-KR,en-MY,es-MX,nl-NL,en-NZ,no-NO,zh-CN,pl-PL,pt-PT,en-PH,ru-RU,ar-SA,en-ZA,es-ES,sv-SE,fr-CH,de-CH,zh-TW,tr-TR,en-GB,en-US,es-US
        $client = new Client();
        $params = '?q=site:www.ersnet.org '.$query;
        $response = $client->request('GET','https://api.cognitive.microsoft.com/bing/v5.0/search'.$params, ['headers' => ['Ocp-Apim-Subscription-Key' => env('BING_SEARCH')]]);
        $results = json_decode($response->getBody(), true);
        $key = 0;
        if(!isset($results['webPages']) || !isset($results['webPages']['value'])){
            return $parsed = array();
        }
        foreach($results['webPages']['value'] as $value){
        	$url = $this->urlDecode($value['url']);
        	if (strpos($value['displayUrl'], 'https://') !== false 
        		&& strpos($url, '.html') == false 
        		&& strpos($url, '.pdf') == false
        		&& strpos($url, 'index.php') == false
        		&& strpos($url, '.doc') == false) {
	        	$parsed[$key]['url'] = $url;
	        	$title = explode('|', $value['name']);
	        	$parsed[$key]['title'] = $title[0];
	        	$parsed[$key]['leadParagraph'] = $value['snippet'];
	        	$key ++ ;
	        }

        }
        return $parsed;
    }

    /**
    * Decode Bing url
    */
    public function urlDecode($url){
        $url = rawurldecode($url);
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        return $query['r'];
    }    

}        