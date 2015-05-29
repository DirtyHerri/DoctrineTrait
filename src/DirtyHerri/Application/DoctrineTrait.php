<?php

namespace DirtyHerri\Application;

trait DoctrineTrait
{

    /**
     * Returns the EntityManager aka $app['em']
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function em() {
        return $this['em'];
    }

    /**
     * Shortcut function for \Doctrine\ORM\EntityManager::createQuery
     *
     * @param string $query
     * @return \Doctrine\ORM\Query
     */
    public function createQuery($query) {
        return $this['em']->createQuery($query);
    }

}