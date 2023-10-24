<?php

namespace Kunnu\Dropbox\Models;

class RootInfo extends BaseModel
{

    /**
     * @var mixed|null
     */
    private $type;

    /**
     * @var mixed|null
     */
    private $root_namespace_id;
    /**
     * @var mixed|null
     */
    private $home_namespace_id;
    /**
     * @var mixed|null
     */
    private $home_path;

    public function __construct(array $data)
    {
        parent::__construct($data);

        $this->type = $this->getDataProperty('.type');
        $this->root_namespace_id = $this->getDataProperty('root_namespace_id');
        $this->home_namespace_id = $this->getDataProperty('home_namespace_id');
        $this->home_path = $this->getDataProperty('home_path');
    }


    /**
     * @return mixed|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed|null
     */
    public function getRootNamespaceId()
    {
        return $this->root_namespace_id;
    }

    /**
     * @return mixed|null
     */
    public function getHomeNamespaceId()
    {
        return $this->home_namespace_id;
    }

    /**
     * @return mixed|null
     */
    public function getHomePath()
    {
        return $this->home_path;
    }


}
