<?php
/**
 * Created by PhpStorm.
 * User: jlroberts
 * Date: 10/16/17
 * Time: 1:26 AM
 */

namespace Example\Controller;

use Example\Controller\AppController as AppController;

/**
 * Dashboard Controller
 *
 *
 * @method \ZoneFiles\Model\Entity\Dashboard[] paginate($object = null, array $settings = [])
 */
class DashboardController extends AppController
{
    public function initialize() {

        parent::initialize();
    }

    public function index()
    {

    }
}