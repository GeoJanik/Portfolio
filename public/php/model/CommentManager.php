<?php
namespace portfolio\model;
require('./public/php/model/Manager.php');

class CommentManager extends Manager
{
     // Poster un commentaire
     public function insertComment($idProject, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(idProject, author, comment, comment_date, report) VALUES(?, ?, ?, NOW(), false)');
        $affectedLines = $comments->execute(array($idProject, $author, $comment));
        return $affectedLines;
    }

     // Récupérer un commentaire
     public function getComments($idProject) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE idProject = ? ORDER BY comment_date DESC');
        $comments->execute(array($idProject));
        return $comments;
    }

    // Update des commentaires à reporter
    public function updateReport($commentId) {
        $db = $this->dbConnect();
        $reportValues = $db->prepare('UPDATE comments SET report = 1 WHERE id = ?');
        $report = $reportValues->execute(array($commentId));
        return $report;
    }

    // Sélectionner un commentaire reporté
    public function getReportCommment() {
        $db = $this->dbConnect();
        $reportcomment = $db->prepare('SELECT comment, author, id FROM comments WHERE report = 1');
        $reportcomment->execute();
        return $reportcomment;

    }

    // Supprimer un commentaire en bdd
    public function deleteValues($commentId) {
        $db = $this->dbConnect();
        $values = $db->prepare('DELETE FROM comments where id = ?');
        $values->execute(array($commentId));
        return;
    }
}