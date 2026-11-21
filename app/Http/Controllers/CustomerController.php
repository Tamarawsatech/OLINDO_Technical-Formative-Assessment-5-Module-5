<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@gmail.com',
                'phone' => '0917-555-0101',
            ],
            [
                'id' => 2,
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@yahoo.com',
                'phone' => '0918-555-0102',
            ],
            [
                'id' => 3,
                'full_name' => 'Angela Reyes',
                'email' => 'angela.reyes@gmail.com',
                'phone' => '0919-555-0103',
            ],
            [
                'id' => 4,
                'full_name' => 'Paolo Garcia',
                'email' => 'paolo.garcia@outlook.com',
                'phone' => '0920-555-0104',
            ],
            [
                'id' => 5,
                'full_name' => 'Sofia Mendoza',
                'email' => 'sofia.mendoza@gmail.com',
                'phone' => '0921-555-0105',
            ],
        ];

        return view('customers.index', compact('customers'));
    }
}
