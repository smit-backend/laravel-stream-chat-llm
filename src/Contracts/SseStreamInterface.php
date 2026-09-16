<?php

declare(strict_types=1);

namespace SmitBackend\StreamLLM\Contracts;

/**
 * Interface SseStreamInterface
 *
 * @package SmitBackend\StreamLLM
 */
interface SseStreamInterface
{
    public function execute(array $payload = []): mixed;
}
