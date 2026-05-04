<?php
$file = "/var/www/html/irrigationsystem/pump_command.json";

$current = [
    "mode" => "automatic"
    "pump" => "auto"
]

if (file_exists($file)) {
    $old = json_decode(file_get_contents($file), true);
    if (is_array($old)) {
        $current = array_merge($current, $old);
    }
}

if (isset($_GET["mode"])) {
    $current["mode"] = $_GET["mode"];

    if ($_GET["mode"] == "automatic") {
        $current["pump"] = "auto";
    }
}

if (isset($_GET["pump"]) {
    $current["pump"] = $_GET["pump"];
})

file_put_contents($file, json_encode($current));

echo json_encode($current);
?>