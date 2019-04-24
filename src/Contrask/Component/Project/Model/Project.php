<?php

namespace Contrask\Component\Project\Model;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
class Project
{
    /**
     * @var string
     */
    private $strid;

    /**
     * @var string
     */
    private $name;

    /**
     * @param string $strid
     */
    public function setStrid($strid)
    {
        $this->strid = $strid;
    }

    /**
     * @return string
     */
    public function getStrid()
    {
        return $this->strid;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
