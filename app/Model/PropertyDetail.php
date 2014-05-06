<?php
App::uses('AppModel', 'Model');
/**
 * PropertyDetail Model
 *
 * @property Property $Property
 */
class PropertyDetail extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'business';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'blank' => array(
				'rule' => array('blank'),
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'property_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'You Must Select A Property.',
			),
		),
		'business' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'The Business Must Not Be Blank.',
			),
		),
		'source_type' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'You Must Select A Valid Source Type.',
			),
		),
		'source_of_contact' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'You Must Select A Valid Source Type.',
			),
		),
		'status' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Must Select A Valid Status Type.',
			),
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'You Must Select a Valid Status Type.',
            ),
		),
		'date_of_contact' => array(
			'date' => array(
				'rule' => array('date'),
			),
		),
		'requirements' => array(

		),
		'comments' => array(

		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Property' => array(
			'className' => 'Property',
			'foreignKey' => 'property_id',
		)
	);
}
