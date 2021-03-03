<?php

declare(strict_types=1);

namespace Sts\KafkaBundle\Configuration\Type;

use Sts\KafkaBundle\Configuration\Contract\DecoderConfigurationInterface;
use Symfony\Component\Console\Input\InputOption;

class SchemaRegistry implements DecoderConfigurationInterface
{
    public const NAME = 'schema_registry';
    public const DEFAULT_VALUE = 'localhost';

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
        return sprintf(
            'Schema registry url needed for decoding/encoding messages. Defaults to %s.',
            self::DEFAULT_VALUE
        );
    }

    public function isValueValid($value): bool
    {
        return is_string($value) && '' !== $value;
    }
}