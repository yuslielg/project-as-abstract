<?php

namespace Contrask\Component\Project\Manager;

use Contrask\Component\Project\Model\Project;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
interface ProjectManagerInterface
{
    /**
     * Picks a project using given criteria.
     *
     * @param $criteria
     *
     * @return mixed The project
     */
    public function pick($criteria);

    /**
     * Collects the projects by given criteria.
     * It returns all projects if criteria is null.
     *
     * @param mixed $criteria
     *
     * @return array The projects
     */
    public function collect($criteria = null);

    /**
     * Adds given project.
     *
     * @param Project $project
     *
     * @return void
     */
    public function add(Project $project);

    /**
     * Updates given project.
     *
     * @param Project $project
     *
     * @return void
     */
    public function update(Project $project);

    /**
     * Removes given project.
     *
     * @param Project $project
     *
     * @return void
     */
    public function remove(Project $project);
}
