<?php
require_once '../vendor/autoload.php';

// Define the PHPUnit command
$command = "vendor/bin/phpunit tests/AuthTest.php";

// Execute the command and capture the output
ob_start();
passthru($command, $returnVar);
$output = ob_get_clean();

// Display the results in the browser
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results</title>
</head>
<body>
    <h1>PHPUnit Test Results</h1>
    <pre><?php echo htmlspecialchars($output); ?></pre>
    <?php if ($returnVar === 0): ?>
        <script>
            alert("All tests passed successfully!");
        </script>
    <?php else: ?>
        <script>
            alert("Some tests failed. Check the details above.");
        </script>
    <?php endif; ?>