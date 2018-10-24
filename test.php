<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php  
  require_once('./vendor/giphy/giphy-php-client/autoload.php');
  $api_instance = new GPH\Api\DefaultApi();
$api_key = "BXOTdd4JaFwjYIeWFz7RgxQST3nLv4XQ"; // string | Giphy API Key.
$q = "loup"; // string | Search query term or prhase.
$limit = 2; // int | The maximum number of records to return.
$offset = 0; // int | An optional results offset. Defaults to 0.
$rating = "g"; // string | Filters results by specified rating.
$lang = "en"; // string | Specify default country for regional content; use a 2-letter ISO 639-1 country code. See list of supported languages <a href = \"../language-support\">here</a>.
$fmt = "json"; // string | Used to indicate the expected response format. Default is Json.


$url = "http://api.giphy.com/v1/gifs/search?q=loup&api_key=BXOTdd4JaFwjYIeWFz7RgxQST3nLv4XQ&limit=5";
$tab= ((json_decode(file_get_contents($url)))->data);
var_dump($tab);
				
// try 

// {

//     $result = $api_instance->gifsSearchGet($api_key, $q, $limit, $offset, $rating, $lang, $fmt);
//     print_r($result);
    
// } 
// catch (Exception $e)

//  {

//     echo 'Exception when calling DefaultApi->gifsSearchGet: ', $e->getMessage(), PHP_EOL;
	
//  }



		?>		
	
</body>
</html>