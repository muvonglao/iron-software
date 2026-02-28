<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $jsonPath = APPPATH . 'Data/content.json';
        $json = file_get_contents($jsonPath);
        $content = json_decode($json, true);

        return view('pages/home', [
        'title' => $content['meta']['title'] ?? '',
        'metaDescription' => $content['meta']['description'] ?? '',
        'hero' => $content['hero'] ?? [],
        'signup' => $content['signup'] ?? [],
        'overview' => $content['overview'] ?? [],
        'why' => $content['why'] ?? [],
        'earlyAccess' => $content['earlyAccess'] ?? [],
        'bottomSignup' => $content['bottomSignup'] ?? [],
        ]);
    }
}