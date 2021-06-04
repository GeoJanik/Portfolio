<?php

namespace portfolio\model;
class UserForm extends Manager
{
    public function insertForm($firstName, $secondName, $email, $objectForm, $comment)
    {
        $db = $this->dbConnect();
        $values = $db->prepare('INSERT INTO form(firstName, secondName, email, objectForm, comment, dateForm) VALUES(?, ?, ?, ?, ?, NOW() )');
        $form = $values->execute(array($firstName, $secondName, $email, $objectForm, $comment));
        return $form;
    }

    public function selectForm()
    {
        $db = $this->dbConnect();
        $valueForm = $db->prepare('SELECT id, firstName, secondName, email, objectForm, comment, DATE_FORMAT(dateForm, \'%d/%m/%Y à %Hh%imin%ss\') AS dateFormFr FROM form ORDER BY dateForm DESC ');
        $valueForm->execute();
        return $valueForm;
    }

    public function deleteForm($id)
    {
        $db = $this->dbConnect();
        $deleteValues = $db->prepare('DELETE FROM form WHERE id = ?');
        $deleteValues->execute(array($id));
    }
}