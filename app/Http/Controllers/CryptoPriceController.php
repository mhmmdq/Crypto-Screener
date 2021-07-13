<?php

namespace App\Http\Controllers;

use App\Models\Crypto;

use Illuminate\Support\Facades\Storage;
use PHPHtmlParser\Dom;

class CryptoPriceController extends Controller
{
    public function index()
    {
        return view('Home');
    }
    private function crawlData() {
        $dom = new Dom;
        $data = [];
        $dom->loadFromUrl('https://bitscreener.com/');
        $contents = $dom->find('table')->find('tr');
        foreach ($contents as $content) {
            $content = $content->find('a');
            $name = $content[1]->find('div')->find('div')->find('div');
            $color = strpos($content[5]->innerText , '-') !== false || ($content[5]->innerText == '0.0') ? 'ff333a' : '009933' ;
            $data[] = [
                'name' => trim($name[1]->innerText) ,
                'fullName' => trim($name[2]->innerText) ,
                'price' => trim($content[2]->innerText),
                'change' => trim($content[5]->innerText),
                'color' => $color
            ];
        }
        return $data;
    }
    public function updateDatabase() {
        if(Storage::disk('local')->exists(date("Y-m-d").".json")) {
            return Storage::disk('local')->get(date("Y-m-d").".json");
        }else {
            Storage::disk('local')->put(date("Y-m-d").".json",json_encode($this->crawlData()));
            return Storage::disk('local')->get(date("Y-m-d").".json");
        }
    }


}
