<?php
// Define the theme slug and repository URL
$theme_slug = 'xwebdesign';
$repository_url = 'https://example.com/your-theme-repo.zip';

// Check if the theme is already installed
if (wp_get_theme($theme_slug)->exists()) {
    // Get the latest version information from the repository URL
    $response = wp_remote_get($repository_url);

    if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
        // Update the theme
        $updated = wp_update_theme($repository_url);

        if (is_wp_error($updated)) {
            // Update failed
            echo 'Theme update failed. Error: ' . $updated->get_error_message();
        } else {
            // Update successful
            echo 'Theme updated successfully.';
        }
    } else {
        // Unable to fetch the repository URL
        echo 'Unable to fetch the repository URL.';
    }
} else {
    // Theme not installed
    echo 'Theme not installed.';
}