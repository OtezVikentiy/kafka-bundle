<?php

declare(strict_types=1);

namespace Sts\KafkaBundle\Configuration\Type;

use Sts\KafkaBundle\Configuration\Contract\ProducerConfigurationInterface;
use Symfony\Component\Console\Input\InputOption;

class ProducerPartition implements ProducerConfigurationInterface
{
    public const NAME = 'producer_partition';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getMode(): int
    {
        return InputOption::VALUE_REQUIRED;
    }

    public function getDescription(): string
    {
        return
            <<<EOT
            Which partition producer should produce to. 
            Defaults to RD_KAFKA_PARTITION_UA (-1) and lets librdkafka choose the partition according to message key value.
            EOT;
    }

    public function isValueValid($value): bool
    {
        return (is_numeric($value) && $value >= 0) || $value === self::getDefaultValue();
    }

    public static function getDefaultValue(): int
    {
        return defined('RD_KAFKA_PARTITION_UA') ? RD_KAFKA_PARTITION_UA : -1;
    }
}