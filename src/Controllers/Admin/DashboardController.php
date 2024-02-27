<?php

namespace Phuon\Ontap\Controllers\Admin;

use Phuon\Ontap\Commons\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return $this->renderViewAdmin(__FUNCTION__);
    }
}
