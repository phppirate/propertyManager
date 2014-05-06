<?php
App::uses('AppModel', 'Model');
/**
 * Note Model
 *
 */
class Note extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

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
        'user_id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'You need to supply a user.',
                'on' => 'create',
            ),
        ),
        'property_id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'You need to supply a property.',
                //'on' => 'create',
            ),
        ),
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'You need to supply a title.',
			),
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'You need to supply a note.',
			),
		),
		'date_modified' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				'message' => 'You must supply a valid date.',
			),
		),
	);


    /**
     * BelongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
        ),
        'Property' => array(
            'className' => 'Property',
            'foreignKey' => 'property_id',
        )
    );
}
