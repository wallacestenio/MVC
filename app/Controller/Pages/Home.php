<?php

namespace App\Controller\Pages;
use \App\Utils\View;

class Home extends Page {

    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     * @return string
     */
    public static function getHome(){
        //View da Home
        $content = View::render('pages/home', vars: [
            'name' => 'WStenioTI',
            'description' => 'https://wstenioti.com',
            'funcao' => 'Desenvolvedor',
            'idade' => '42',
            'cidade' => 'Rio de Janeiro',
            
        ]);
        //Retorna a View da página
        return parent::getPage('Wstenio - Site - Home', $content);
    }
}