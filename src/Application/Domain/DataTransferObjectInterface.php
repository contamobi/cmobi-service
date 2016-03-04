<?php

namespace Application\Domain;

interface DataTransferObjectInterface
{
    /**
     * Return serializer method
     *
     * @return mixed
     */
    public function getSerializer();
}