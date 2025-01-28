<?php
function sanitize($data, $type = 'string') {
    switch ($type) {
        case 'int':
            $sanitized = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
            break;
        case 'float':
            $sanitized = filter_var($data, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            break;
        case 'email':
            $sanitized = filter_var($data, FILTER_SANITIZE_EMAIL);
            break;
        default:
            $sanitized = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // Default para string
    }
    return $sanitized;
}
?>
