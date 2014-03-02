<?php
namespace App\Maps;

class Controller extends \Core\Services
{
    public function __construct()
    {
        parent::__construct();
    }

    public function google()
    {
        $this->template->fetch("google");
    }
}
