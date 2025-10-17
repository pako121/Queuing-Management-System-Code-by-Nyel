<?php

include_once '../database/config.php';

// Enable SSE headers
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

// Include DB connection

// Prevent buffering issues
if (ob_get_level()) {
    ob_end_clean();
}
ob_implicit_flush(true);

// Function to send an SSE event
function sendEvent($data, $event = 'message', $id = null)
{
    echo "event: {$event}\n";
    if ($id !== null) {
        echo "id: {$id}\n";
    }
    echo "data: " . json_encode($data) . "\n\n";
    @ob_flush();
    @flush();
}

// Main loop
$id = 1;
while (true) {
    // Stop if client disconnected
    if (connection_aborted()) {
        break;
    }

    // Query active transaction types
    $result = $connection->query("SELECT * FROM transaction_types WHERE transaction_status = 1 ORDER BY id ASC");

    if ($result && $result->num_rows > -1) {
        $types = [];

        while ($row = $result->fetch_assoc()) {
            $types[] = [
                'id' => (int) $row['id'],
                'name' => $row['transaction_name'],
                'status' => (int) $row['transaction_status'],
                'current_queue' => rand(1, 20)
            ];
        }

        sendEvent($types, 'message', $id++);
    }

    sleep(1); // Delay between updates

    $connection->close();
}
