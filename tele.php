<?php
//$apiToken = "my_bot_api_token";
$data = [
    'chat_id' => '-601316859',
    'text' => 'hello'  //replace with your image url
];
$response = file_get_contents("https://api.telegram.org/bot1822605802:AAEvLu33K22koy5DMGvcSR0l9GdPCVk3vPU/sendMessage?" . http_build_query($data) );
echo ($response);
?>