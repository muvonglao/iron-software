<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $jsonPath = APPPATH . 'Data/content.json';

        if (!is_file($jsonPath)) {
            throw new \RuntimeException('Content data file not found: ' . $jsonPath);
        }

        $json = file_get_contents($jsonPath);
        $content = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Invalid JSON in content data: ' . json_last_error_msg());
        }

        return view('pages/home', [
            'title'           => $content['meta']['title'] ?? '',
            'metaDescription' => $content['meta']['description'] ?? '',
            'nav'             => $content['nav'] ?? [],
            'hero'            => $content['hero'] ?? [],
            'productOverview' => $content['productOverview'] ?? [],
            'why'             => $content['why'] ?? [],
            'earlyAccess'     => $content['earlyAccess'] ?? [],
            'bottomSignup'    => $content['bottomSignup'] ?? [],
        ]);
    }
}