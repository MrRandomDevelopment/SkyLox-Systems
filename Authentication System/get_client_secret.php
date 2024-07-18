<?php
header('Content-Type: application/json');
echo json_encode(['clientSecret' => getenv('ROBLOX_CLIENT_SECRET')]);
?>
