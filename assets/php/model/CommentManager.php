<?php
namespace portfolio\model;
require('./assets/php/model/Manager.php');

class CommentManager extends Manager
{
     // Posté un commentaire
     public function insertComment($idProject, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(idProject, author, comment, comment_date, report) VALUES(?, ?, ?, NOW(), false)');
        $affectedLines = $comments->execute(array($idProject, $author, $comment));
        return $affectedLines;
    }

     // Recuperer commentaire
     public function getComments($idProject) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE idProject = ? ORDER BY comment_date DESC');
        $comments->execute(array($idProject));
        return $comments;
    }
}