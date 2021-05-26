<?php
namespace portfolio\model;

class CommentManager extends Manager
{
     // Posté un commentaire
     public function postComment($author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date, report) VALUES(?, ?, ?, NOW(), false)');
        $affectedLines = $comments->execute(array($author, $comment));
        return $affectedLines;
    }

    // // Recuperer commentaire
    // public function getComments() {
    //     $db = $this->dbConnect();
    //     $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    //     $comments->execute(array());
    //     return $comments;
    // }
}