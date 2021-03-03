<?php

declare(strict_types=1);

namespace Sts\KafkaBundle\Client\Contract;

interface ProducerInterface extends ClientInterface
{
    public function getMessage(): string;
}