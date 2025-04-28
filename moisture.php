<?php
$filename = "soil_status.txt";

if (file_exists($filename)) {
    echo htmlspecialchars(file_get_contents($filename));
} else {
    echo "Unknown";
}
?>
