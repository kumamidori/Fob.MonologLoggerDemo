<?php
namespace Fob\MonologLoggerDemo\Resource\Page;

use BEAR\Resource\ResourceObject;
use Psr\Log\LoggerInterface;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

class Index extends ResourceObject
{
    private $logger;

    /**
     * @Inject
     * @Named("logger=fob.app_log.app_logger")
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function onGet(string $name = 'BEAR.Sunday') : ResourceObject
    {
        $this->logger->info('Hello, world');

        $this->body = [
            'greeting' => 'Hello ' . $name
        ];

        return $this;
    }
}
