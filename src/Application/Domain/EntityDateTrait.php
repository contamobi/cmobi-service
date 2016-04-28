<?php

namespace Application\Domain;

trait EntityDateTrait
{
    protected $created;
    protected $updated;

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated()
    {
        $this->created = new \DateTime('now');
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated()
    {
        $this->updated = new \DateTime('now');
    }
}