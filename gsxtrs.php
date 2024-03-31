<?php
// Get the IP address from the request body
$ip_address = $_POST['ip'];

// Append the IP address to the ip.txt file
$file_path = 'ip.txt';
$current_content = file_get_contents($file_path);
file_put_contents($file_path, $current_content . $ip_address . PHP_EOL);

// Respond with a success message
http_response_code(200);
echo "IP address stored successfully.";
?>
