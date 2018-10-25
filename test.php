<?php  
  require_once('./vendor/giphy/giphy-php-client/autoload.php');
 
$api_instance = new GPH\Api\DefaultApi();
$api_key = "dc6zaTOxFJmzC"; // string | Giphy API Key.
$q = "loup"; // string | Search query term or prhase.
$limit = 25; // int | The maximum number of records to return.
$offset = 0; // int | An optional results offset. Defaults to 0.
$rating = "g"; // string | Filters results by specified rating.
$lang = "fr"; // string | Specify default country for regional content; use a 2-letter ISO 639-1 country code. See list of supported languages <a href = \"../language-support\">here</a>.
$fmt = "json"; // string | Used to indicate the expected response format. Default is Json.

try {
    $result = (json_decode(file_get_contents($api_instance->gifsSearchGet($api_key, $q, $limit, $offset, $rating, $lang, $fmt))));
    echo ($result->{'url'});
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->gifsSearchGet: ', $e->getMessage(), PHP_EOL;
}

				
// try 

// {

//     $result = $api_instance->gifsSearchGet($api_key, $q, $limit, $offset, $rating, $lang, $fmt);
//     $result1 = (json_decode(file_get_contents($result)));


   
//    print_r($result1);
// } 
// catch (Exception $e)


//  {

//     echo 'Exception when calling DefaultApi->gifsSearchGet: ', $e->getMessage(), PHP_EOL;
	
//  }



		?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>	
	
</body>
</html>