<?php

namespace AppBundle\Service;


/**
 * Class ParentA
 */
class ParentA
{
    /**
     * @var Child
     */
    private $service;

    /**
     * ParentA constructor.
     *
     * @param Child $child
     */
    public function __construct(Child $child)
    {
        $this->service = $child;
    }
}
