<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class ArticleController extends BaseController
{
    public function index(){
        $local = $this->request->getLocale();

        $articleModel = new ArticleModel();

        $articles = $articleModel->where('lang', $local)->orderBy('created_at', 'desc')->findAll();

        $data = [
            'lang' => $local,
            'articles' => $articles,
        ];
        echo view("template/header", $data);
        echo view("index-articles", $data);
    }

    public function show($id = null) {
        $local = $this->request->getLocale();

        $articleModel = new ArticleModel();

        $article = $articleModel->find($id);

        // je verifie si l'article obtenu correspond a la langue active
        if ($article['lang'] === $local) {

            $data = [
                'article' => $article,
                'lang' => $local
            ];

            echo view("template/header", $data);
            echo view("show-article", $data);
        } else {
            return redirect()->to('/' .$local. '/article');
        }
    }

    public function new() {
        $local = $this->request->getLocale();

        // je verifie si l'article obtenu correspond a la langue active
        $data = [
            'lang' => $local
        ];

        echo view("template/header", $data);
        echo view("new-article", $data);
    }

    public function create(){
        $local = $this->request->getLocale();

        $articleModel = new ArticleModel();

        $article = [
            'title' => $this->request->getVar('title', FILTER_SANITIZE_STRING),
            'slug' => $this->request->getVar('slug', FILTER_SANITIZE_STRING),
            'lang' => $this->request->getVar('lang', FILTER_SANITIZE_STRING),
            'text' => $this->request->getVar('text', FILTER_SANITIZE_STRING),
            'created_at' => Time::now('Africa/Douala', 'en'),
            'updated_at' => Time::now('Africa/Douala', 'en'),
        ];

        $session = session();

        if ($articleModel->save($article) === true) {
            $session->setFlashdata('success', "Article created successfully");
            return redirect()->to('/'. $local . '/article/'. $articleModel->getInsertID());
        } else {
            $session->setFlashdata('error', "Error when creating Article");
            return redirect()->back();
        }
    }
}