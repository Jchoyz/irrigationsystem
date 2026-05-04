<?php
$file = "/var/www/html/irrigationsystem/pump_command.json";

$mode = $_GET["mode"] ?? null;
$pump = $_GET["pump"] ?? null;

$data = [
    "mode" => $mode,
    "pump" => $pump
];

file_put_contents($file, json_encode($data));

echo "Command saved";
?>