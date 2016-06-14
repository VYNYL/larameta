<?php

namespace Vynyl\LaraMeta;

trait IsMetaData
{
    private $defaultProperties = [];

    // this should probably be a query scope
    public function getDefaultProperties()
    {

    }

    public function compiledProperties()
    {
        $properties = [];
        foreach ($this->defaultProperties as $property) {
            $properties[] = $this->transformProperty($property);
        }
        return $properties;
    }

    public function transformProperty($property)
    {
        
    }

}
