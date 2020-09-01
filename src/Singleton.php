<?php

namespace PiQo\JSON;

class Singleton
{
    /**
     * Return a *Singleton* instance
     *
     * @return Singleton Instance *Singleton*
     */
    public static function getInstance()
    {
        static $instance = null;

        if (null === $instance) {
            $instance = new static();
        }
        
        return $instance;
    }

    /**
     * Protected constructor to avoid new *Singleton* instances via `new`
     */
    protected function __construct()
    {
    }

    /**
     * Private `clone` method to avoid *Singleton* instances clones
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private deserialization method to avoid *Singleton* instances clones
     */
    private function __wakeup()
    {
    }
}