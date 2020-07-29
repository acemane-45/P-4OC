<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Article;

class ArticleDAO extends DAO
{
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitle($row['title']);
        $article->setContent($row['content']);
        $article->setCreatedAt($row['createdAt']);
        return $article;
    }

    //Permet de récupérer la liste de tout les articles
    public function getArticles()
    {
        $sql = 'SELECT article.id, article.title, article.content, user.pseudo, article.createdAt FROM article INNER JOIN user ON article.user_id = user.id ORDER BY article.id DESC';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    //Permet de recupérer un article
    public function getArticle($articleId)
    {
        $sql = 'SELECT id, title, content, createdAt FROM article WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }

    //Permet d'ajouter un article dans la BDD
    public function addArticle(Parameter $post, $userId)
    {
        $sql = 'INSERT INTO article (title, content, createdAt, user_id) VALUES (?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('title'), $post->get('content'), $userId]);
    }
    

    //Permet de modifier un article dans la BDD
    public function editArticle(Parameter $post, $articleId)
    {
        $sql = 'UPDATE article SET title=:title, content=:content, user_id=:user_id WHERE id=:articleId';
        $this->createQuery($sql, [
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'user_id' => $userId,
            'articleId' => $articleId
        ]);
    }

    //Permet de suprimer un article et son commentaire dans la BDD
    public function deleteArticle($articleId)
    {
        $sql = 'DELETE FROM comment WHERE article_id = ?';//commentaire
        $this->createQuery($sql, [$articleId]);
        $sql = 'DELETE FROM article WHERE id = ?';//article
        $this->createQuery($sql, [$articleId]);
    }
}