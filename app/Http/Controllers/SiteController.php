<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];

        $data = [
            'name' => 'Alesasndro',
            'age' => '90',
            'html' => '<p style="color:red;">Interpretado</p>',
            'times' => ['são paulo', 'atletico m', 'palmeiras', 'corinthians', 'flamento'],
            'pessoas' => $pessoas
        ];

        // return "Oiii. Eu me chamo $name";
       return view('welcome', $data);
    }

    public function images() {
        $url = 'https://i.pravatar.cc/150?img=';
        $dados['url'] = $url;

        return view('exercise', $dados);
    }
}