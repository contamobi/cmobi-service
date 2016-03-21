<?php

namespace Application\Domain;

trait EntityDateTrait
{
    protected $created;
    protected $updated;

    public function __construct()
    {
        $this->created = new \DateTime('now');
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $date
     */
    public function setCreated(\DateTime $date)
    {
        $this->created = $date;
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