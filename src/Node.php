<?php

namespace de\micwag\PHDownload;
/**
 *   Class Node
 *   ==========
 *
 * Node in a virtual file system. A Node can be either a file or a folder. Each Node can (but needs not) have a parent Folder, in which it is included.
 *
 * @package de\micwag\PHDownload
 */
abstract class Node
{
    /**
     * Unique id of the node. Is used to reference it.
     * @var int
     *
     */
    protected $id;

    /**
     * Name of the Node. Must be unique per parent folder.
     *
     * @var String
     */
    protected $name;

    /**
     * Parent folder of the Node. May be null.
     *
     * @var Folder
     */
    protected $parent = null;

    /**
     * Returns the id of the Node.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the name of the Node.
     *
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name of the Node.
     *
     * @param String $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the parent Folder.
     *
     * @return Folder
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the parent folder.
     *
     * @param Folder $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }
}