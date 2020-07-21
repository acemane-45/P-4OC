
<?php

namespace App\src\DAO;

class Comment extends Database
{
    //On récupére tous les commentaires associés à un article (qui sera passé en paramètre GET dans la page  single.php
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$articleId]);
    }
}