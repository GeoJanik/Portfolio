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
        if (!$affectedLines) {
            echo $db->errorInfo();
        }
        return $affectedLines;
        
    }
}