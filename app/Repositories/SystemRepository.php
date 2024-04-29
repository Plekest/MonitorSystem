<?php

namespace App\Repositories;

use App\Models\System;
use App\Repositories\Interface\SystemRepositoryInterface;

class SystemRepository implements SystemRepositoryInterface
{
    protected $system;

    public function __construct(System $system)
    {
        $this->system = $system;
    }

    public function all()
    {
        return $this->system->all();
    }

    public function find($id)
    {
        return $this->system->find($id);
    }

    public function create($data)
    {
        return $this->system->create($data);
    }

    public function update($id, $data)
    {
        return $this->system->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->system->find($id)->delete();
    }
}
