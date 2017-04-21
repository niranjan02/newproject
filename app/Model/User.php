<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

// ...
public $validate = array(
        'username' => array(
        'alphanumeric' => array(
            'rule' => array('alphanumeric'),
            'allowEmpty' => false,
            'required' => true,
            'message' => "Alphanumeric characters only.",
        ),
        'between' => array(
            'rule' => array('between',4,20),
            'message' => "The username must be between %d and %d characters.",
        ),
        'isUnique' => array(
            'rule' => 'isUnique',
            'message' => "This username is already taken.",
        ),
    ),
    'password' => array(
        'notEmpty' => array(
            'rule' => array('notEmpty'),
            'message' => "You must specify your password.",
        ),
    ),
       'email' => array(
        'email' => array(
            'rule' => array('email'),
            'required' => true,
            'message' => "You must specify a valid Email address.",
        ),
        'isUnique' => array(
            'rule' => 'isUnique',
            'message' => "This Email is already taken.",
        ),
    ),
        'lastname' => array(
        'maxLength' => array(
            'rule' => array('maxLength', 25),
            'required' => true,
            'message' => "Your last name can't contain more than %d characters.",
        ),
    ),
    'firstname' => array(
        'maxLength' => array(
            'rule' => array('maxLength', 25),
            'required' => true,
            'message' => "Your first name can't contain more than %d characters.",
        ),
    ),
    );
public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}
}