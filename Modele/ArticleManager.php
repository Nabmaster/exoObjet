<?php

namespace Modele;
use PDO;

class ArticleManager extends \Lib\EntiteManager
{

    public function getListing()
    {
        $sql = 'SELECT id, titre, contenu, date FROM article ORDER BY titre';
        $result = $this->pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Article::class);
        $articles = $result->fetchAll();
        foreach ($articles as $article) {
          $article->setDate(new \DateTime($article->getDate()));
        }

        return $articles;
    }
    public function getArticleById($id)
    {
        $sql = 'SELECT id, titre, contenu, date FROM article WHERE id = ?';
        $result = $this->pdo->prepare($sql);
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Article::class);
        $article = $result->fetch();
        $article->setDate(new \DateTime($article->getDate()));
        return $article;
    }

}
