<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $_POST["calc_result"] ?? "No result";

    // For demonstration, we just echo it.
    echo "<h2>Server Received Result: $result</h2>";
} else {
    echo "Invalid request method.";
}
?>
