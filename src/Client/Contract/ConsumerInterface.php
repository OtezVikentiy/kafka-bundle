<?php

declare(strict_types=1);

namespace Sts\KafkaBundle\Client\Contract;

use Sts\KafkaBundle\Client\Consumer\Message;
use Sts\KafkaBundle\RdKafka\Context;

interface ConsumerInterface extends ClientInterface
{
    public function consume(Message $message, Context $context): bool;
    public function getName(): string;
}