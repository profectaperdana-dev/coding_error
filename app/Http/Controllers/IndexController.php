<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $employee_data = [
            [
                'name' => 'Ethanbaron V Nusjuro',
                'position' => 'Sr. Programmer',
                'gender' => 'Male',
                'joining_date' => '2024-01-01'
            ],
            [
                'name' => 'Maki Zenin',
                'position' => 'IT Manager',
                'gender' => 'Female',
                'joining_date' => '2023-01-01'
            ],
            [
                'name' => 'Ishigami Senku',
                'position' => 'Quality Assurance',
                'gender' => 'Male',
                'joining_date' => '2023-12-12'
            ],
            [
                'name' => 'Jaygarcia Saturn',
                'position' => 'Jr. Programmer',
                'gender' => 'Male',
                'joining_date' => '2024-01-12'
            ],
            [
                'name' => 'Bachira Megumi',
                'position' => 'UI/UX Designer',
                'gender' => 'Male',
                'joining_date' => '2024-01-12'
            ],
            [
                'name' => 'Lady Nagan',
                'position' => 'Security Engineer',
                'gender' => 'Female',
                'joining_date' => '2024-01-15'
            ],
            [
                'name' => 'Ochako-chan',
                'position' => 'DevOps Engineer',
                'gender' => 'Female',
                'joining_date' => '2024-01-12'
            ],
        ];

        $data = [
            'employee_data' => $employee_data
        ];

        return view('welcome', $data);
    }
}
