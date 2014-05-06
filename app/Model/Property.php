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
        'image_path' => array(
            'uploadError' => array(
                'rule' => 'uploadError',
                'message' => 'The property image was not uploaded successfully.',
                'allowEmpty' => true,
            ),
            'mimeType' => array(
                'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
                'message' => 'Please only upload images (gif, png, jpg).',
                'allowEmpty' => true,
            ),
            'fileSize' => array(
                'rule' => array('fileSize', '<=', '1MB'),
                'message' => 'Property image must not be bigger the 1MB.',
                'allowEmpty' => true,
            ),
            'processPropertyImageUpload' => array(
                'rule' => 'processPropertyImageUpload',
                'message' => 'Unable to process property image.',
                'allowEmpty' => true,
            ),
        )
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
        ),
        'Note' => array(
            'className' => 'Note',
            'foreignKey' => 'property_id',
        ),
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


    public function processPropertyImageUpload($check = array()){
        if (!is_uploaded_file($check['image_path']['tmp_name'])){
            return false;
        }
        if (!move_uploaded_file($check['image_path']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['image_path']['name'])){
            return false;
        }
        $this->data[$this->alias]['image_path'] = 'uploads' . DS . $check['image_path']['name'];
        return true;
    }
}
