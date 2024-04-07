<?php
include 'chatbot_api.php';

// Chatbot Logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['messageValue'])) {
    $userMessage = $_POST['messageValue'];
    $intent = classify_intent($userMessage, $intents);

    // Check if the intent exists in the responses array
    if (array_key_exists($intent, $responses)) {
        // Check if the response is an array
        if (is_array($responses[$intent])) {
            // If it's an array, use the default response
            $response_text = $responses[$intent]['response']; // Change here
        } else {
            // If it's a string, use the response
            $response_text = $responses[$intent];
        }
    } else {
        // If intent not found, fallback to default response
        $response_text = $responses['default']['response']; // Change here
    }

    // Output the response
    echo $response_text;
} else {
    // Handle case where message is not received
    echo 'Error: Message not received.';
}
