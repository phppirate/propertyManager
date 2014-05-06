<?php
App::uses('AppModel', 'Model');

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])){
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }


    public function admin($user){
        if ($user['role'] == 'admin'){
            return true;
        }
        return false;
    }

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'blank' => array(
				'rule' => array('blank'),
				'on' => 'create',
			),
		),
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'You must supply a Name.',
            ),
        ),
		'username' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Email must be valid.',
            ),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'You must supply an email',
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'You must supply a password.',
			),
		),
		'role' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'You need a role.',
			),
		),
	);

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Note' => array(
            'className' => 'Note',
            'foreignKey' => 'user_id',
        )
    );

    public $hasAndBelongsToMany = array(
        'Property' => array(
            'className' => 'Property',
            'joinTable' => 'property_to_user',
            'foreignKey' => 'user_id',
            'associationForeignKey' => 'property_id',
            'unique' => 'true',

        ),
    );
}
