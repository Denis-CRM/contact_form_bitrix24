<?
$a = 'Test43';
echo "$a";

$lead_name1 = $_GET['lead_name'];
$phone1 = $_GET['phone'];
$email1 = $_GET['e-mail'];
$comment1 = $_GET['comment'];

$queryUrl = 'https://bitrix24.com.ua/rest/395/xxxxxxxxxxff/crm.lead.add.json';
$queryData = http_build_query(array(
   'fields' => array(
       'TITLE' => "$lead_name1",
       'NAME' => "$lead_name1",
       'EMAIL' => Array(
	    "n0" => Array(
	        "VALUE" => $email1,
	        "VALUE_TYPE" => "WORK",
	    ),
	),
	'PHONE' => Array(
	    "n0" => Array(
	        "VALUE" => $phone1,
	        "VALUE_TYPE" => "WORK",
	    ),
	),
   ),
   'params' => array("REGISTER_SONET_EVENT" => "Y")
));
$curl = curl_init();
curl_setopt_array($curl, array(
   CURLOPT_SSL_VERIFYPEER => 0,
   CURLOPT_POST => 1,
   CURLOPT_HEADER => 0,
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_URL => $queryUrl,
   CURLOPT_POSTFIELDS => $queryData,
));
$result = curl_exec($curl);
var_dump ($result);
curl_close($curl);


//Разумеется, мы можем обращаться к этим элементам как к элементам обычного массива. Например, так:
//echo $_GET['login'] 

//Вызов из строки браузера, с демо-данными
//https://b24.dnepr.top/lead_add_cloud.php?lead_name=%D0%98%D0%BC%D1%8F31&phone=%2B38030303030&e-mail=30%40i.ua&comment=%D0%9A%D0%BE%D0%BC%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%B931

?>

$queryData = http_build_query(array(
    'fields' => array(
        'TITLE' => 'Название формы name41', 
        'NAME' => 'Namename41'
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y")
)); 
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
));
$result = curl_exec($curl);
var_dump ($result);
curl_close($curl);
?>
