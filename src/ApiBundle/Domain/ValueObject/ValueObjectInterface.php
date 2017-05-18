<?php

namespace ApiBundle\Domain\ValueObject;

/**
 * This interface determine DDD Value Objects on Domain.
 *
 * Interface ValueObjectInterface
 * @package Application\Domain
 */
interface ValueObjectInterface
{
    public function sameAs(ValueObjectInterface $other);
}