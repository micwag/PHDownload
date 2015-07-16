<?php

namespace de\micwag\PHDownload;

/**
 *   Class File
 *   ==========
 *
 * Describes a virtual file.
 *
 * @package de\micwag\PHDownload
 */
class File extends Node
{
    /**
     * Path of the File in the physical filesystem.
     *
     * @var String
     */
    protected $path;

    /**
     * Returns the physical path of the file.
     *
     * @return String
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets the physical path of the file.
     *
     * @param String $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
}