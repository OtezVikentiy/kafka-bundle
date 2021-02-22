<?php

declare(strict_types=1);

namespace Sts\KafkaBundle\Configuration\Type;

use Sts\KafkaBundle\Configuration\Contract\ConfigurationInterface;
use Symfony\Component\Console\Input\InputOption;

class Brokers implements ConfigurationInterface
{
    public const NAME = 'brokers';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getMode(): int
    {
        return InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY;
    }

    public function getDescription(): string
    {
        return 'Comma-separated list of brokers in the format: broker1,broker2 i.e. 172.0.0.1:9092,127.0.0.2:9092. 
        Defaults to empty string - must be chosen explicitly.';
    }

    public function getDefaultValue(): string
    {
        return '';
    }
}