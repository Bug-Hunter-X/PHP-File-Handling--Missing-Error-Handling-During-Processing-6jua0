```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    while (!feof($file)) {
        $line = fgets($file);
        if ($line === false) {
            // Handle fgets error (e.g., disk error)
            error_log("Error reading from file: " . error_get_last()['message']);
            break; // Exit the loop
        }
        // Process the line
        // ...
    }
    fclose($file);
} else {
    // Handle fopen error
    error_log("Error opening file: " . error_get_last()['message']);
}
```