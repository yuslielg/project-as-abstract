<?php

namespace Contrask\Test\Component\Project\Model;

use Contrask\Component\Project\Model\Project;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
class ProjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Contrask\Component\Project\Entity\Project::getStrid
     */
    public function testStrid()
    {
        $project = new Project();
        $this->assertNull($project->getStrid());
    }

    /**
     * @covers \Contrask\Component\Project\Entity\Project::getName
     */
    public function testName()
    {
        $project = new Project();
        $this->assertNull($project->getName());
    }
}
