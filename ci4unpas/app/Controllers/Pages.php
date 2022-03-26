<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Home Pages',
            'angka' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me',
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Me',
            'alamat' =>
            [
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ],
                [
                    'jalan' => 'Jl. Raya',
                    'kota' => 'Bandung',
                    'provinsi' => 'Jawa Barat',
                    'negara' => 'Indonesia'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
