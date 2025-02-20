<?php

namespace App;

trait Education
{
    protected $school;

    /**
     * @return mixed
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @param mixed $school
     */
    public function setSchool($school): void
    {
        $this->school = $school;
    }


}