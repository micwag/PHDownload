<?php

namespace de\micwag\PHDownload;


/**
 * A link is a public identifier of a Node. A Node can have multiple links.
 **/
class Link
{
    /**
     * ID of the link
     *
     * @var int
     */
    protected $id;

    /**
     * Public identifier of the link. Must be unique.
     *
     * @var String
     */
    protected $identifier;

    /**
     * Node which is linked.
     *
     * @var Node
     */
    protected $node;

    /**
     * True if the link requires a password, false if not.
     *
     * @var bool
     */
    protected $isProtected = false;

    /**
     * Hash of the password for the link. May be null if $isProtected is false.
     *
     * @var String
     */
    protected $passwordHash = null;


    /**
     * Returns the ID of the Link.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the public identifier of the link.
     *
     * @return String
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the public identifier of the link.
     *
     * @param String $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns the linked Node.
     *
     * @return Node
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Sets the linked Node.
     *
     * @param Node $node
     */
    public function setNode($node)
    {
        $this->node = $node;
    }

    /**
     * Returns true if the link is password-protected.
     *
     * @return boolean
     */
    public function isProtected()
    {
        return $this->isProtected;
    }

    /**
     * Sets if the link is password-protected.
     *
     * @param boolean $isProtected
     */
    public function setIsProtected($isProtected)
    {
        $this->isProtected = $isProtected;
    }

    /**
     * Returns the password hash of the link.
     *
     * @return String
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * Sets the password hash of the link.
     *
     * @param String $passwordHash
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;
    }
}