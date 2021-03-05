<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

    public function index()
    {

        $data =
            [
                'title' => 'Dashboard Admin'
            ];
        return view('dashboard/admin', $data);
    }




    //--------------------------------------------------------------------

}
