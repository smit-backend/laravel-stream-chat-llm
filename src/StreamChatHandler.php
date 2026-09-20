<?php

declare(strict_types=1);

namespace SmitBackend\StreamLLM;

use SmitBackend\StreamLLM\Contracts\SseStreamInterface;

/**
 * Class StreamChatHandler
 *
 * @package SmitBackend\StreamLLM
 */
class StreamChatHandler implements SseStreamInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
