<?php
App::uses('AppModel', 'Model');
/**
 * Property Model
 *
 */
class Property extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'address';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'blank' => array(
				'rule' => 'blank',
				'on' => 'create',
			),
		),
		'address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'The Address can not be empty.',
			),
		),
		'city' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'The City can not be empty.',
            ),
		),
		'state' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'The State can not be empty.',
            ),
		),
		'zip' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'The Zip-code can not be empty.',
            ),
		),
	);

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'PropertyDetail' => array(
            'className' => 'PropertyDetail',
            'foreignKey' => 'property_id',
        )
    );

    public $hasAndBelongsToMany = array(
        'User' => array(
            'className' => 'User',
            'joinTable' => 'property_to_user',
            'foreignKey' => 'property_id',
            'associationForeignKey' => 'user_id',
            'unique' => 'true',
        ),
    );
}
