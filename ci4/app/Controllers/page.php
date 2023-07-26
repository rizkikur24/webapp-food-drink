<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'home riz',

        ];
        return view('page/home', $data);
        return view('page/home/template');
    }

    public function about()
    {
        $data = [
            'title' => 'about me',
        ];

        return view('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'contact us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jln ciheuleut gang menteng Rt 02 Rw 08',
                    'kota' => 'Bogor'
                ]
            ]
        ];

        return view('page/contact', $data);
    }
}
