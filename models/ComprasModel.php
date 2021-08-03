<?php

include_once 'OdooModel.php';

class ComprasModel extends Odoo
{
    public function getUsers($limit)
    {
        return $this->get_odoo(1);
    }
}
