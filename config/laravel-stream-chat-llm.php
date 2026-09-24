<?php

return [
    'enabled' => env('LARAVEL_STREAM_CHAT_LLM_ENABLED', true),
    'timeout' => env('LARAVEL_STREAM_CHAT_LLM_TIMEOUT', 30),
    'log_channel' => env('LARAVEL_STREAM_CHAT_LLM_LOG', 'stack'),
];
