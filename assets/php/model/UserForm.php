<?php

namespace portfolio\model;

class UserForm extends Manager
{
    public function insertForm($firstName, $secondName, $email, $comment)
    {
        $db = $this->dbConnect();
        $values = $db->prepare('INSERT INTO form(firstName, secondName, email, comment, dateForm) VALUES(?, ?, ?, ?, NOW() )');
        $form = $values->execute(array($firstName, $secondName, $email, $comment));
        return $form;
    }
}
