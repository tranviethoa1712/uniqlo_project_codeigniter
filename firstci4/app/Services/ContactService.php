<?php

namespace App\Services;

use App\Models\ContactModel;
use App\Common\ResultUtils;
use Exception;

class ContactService extends BaseService
{
    /**
     * The main task:
     * Handle logic for the contact controller
     */

    protected $contactModel;

    function __construct()
    {
        parent::__construct();
        $this->contactModel = model(ContactModel::class);
    }

    public function getContacts() 
    {
        return $this->contactModel->getContacts();
    }

    public function getContactPaginationData() 
    {
        return $this->contactModel->orderBy('id', 'DESC')->paginate(10);
    }

    public function getPagerContacts() 
    {
        return $this->contactModel->pager;
    }
}
