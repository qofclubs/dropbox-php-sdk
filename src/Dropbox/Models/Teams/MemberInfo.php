<?php

namespace Kunnu\Dropbox\Models\Teams;

use Kunnu\Dropbox\Models\BaseModel;

class MemberInfo extends BaseModel
{
    /**
     * @var array
     */
    private $members;
    /**
     * @var array
     */
    private $roles;

    /**
     * Create a new MemberInfo instance
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);

        $members = $this->getDataProperty('members');
        if($members){
            foreach ($members as $member) {
                $this->members[] = new MemberProfile($member['profile']);
            }
        }

        $roles = $this->getDataProperty('roles');
        if($roles){
            foreach ($roles as $role) {
                $this->roles[] = new MemberRole($role);
            }
        }
    }

    /**
     * @return array
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

}
