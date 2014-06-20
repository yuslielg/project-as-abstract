<?php

namespace Contrask\Component\Project\Manager;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
interface ProjectManagerInterface
{
    /**
     * Picks a project using given criteria.
     *
     * @param $criteria
     * @return mixed The project
     */
    public function pick($criteria);

    /**
     * Collects the projects by given criteria.
     * It returns all projects if criteria is null.
     *
     * @param mixed $criteria
     * @return array The projects
     */
    public function collect($criteria = null);
}