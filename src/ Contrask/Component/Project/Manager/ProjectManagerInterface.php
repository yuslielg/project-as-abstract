<?php

namespace Contrask\Component\Project\Manager;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
interface ProjectManagerInterface
{
    /**
     * Return the project by given criteria.
     *
     * @param $criteria
     * @return \Contrask\Component\Project\Entity\ProjectInterface The project
     */
    public function pick($criteria);

    /**
     * Return the projects by given criteria.
     * It returns all projects if criteria is null
     *
     * @param mixed $criteria
     * @return array The projects
     */
    public function collect($criteria = null);
}