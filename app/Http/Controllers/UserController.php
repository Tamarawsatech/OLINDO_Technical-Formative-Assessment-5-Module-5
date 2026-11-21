<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin.mia',
                'full_name' => 'Mia Villanueva',
                'email' => 'mia.villanueva@gmail.com',
            ],
            [
                'id' => 2,
                'username' => 'cashier.lee',
                'full_name' => 'Leonardo Tan',
                'email' => 'leonardo.tan@yahoo.com',
            ],
            [
                'id' => 3,
                'username' => 'sales.ana',
                'full_name' => 'Ana Bautista',
                'email' => 'ana.bautista@gmail.com',
            ],
            [
                'id' => 4,
                'username' => 'inventory.kai',
                'full_name' => 'Kai Navarro',
                'email' => 'kai.navarro@outlook.com',
            ],
            [
                'id' => 5,
                'username' => 'support.jules',
                'full_name' => 'Julia Ramos',
                'email' => 'julia.ramos@gmail.com',
            ],
        ];

        return view('users.index', compact('users'));
    }
}
