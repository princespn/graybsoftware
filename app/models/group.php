<?php 
class Group extends AppModel {
        var $name = 'Group';
       	var $useTable = 'groups';
        var $validate = array(
	
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
							),
		),
		
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Name should not be empty',
				'on' => null, // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	
	var $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'group_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	

							 var $actsAs = array('Acl' => array('type' => 'requester'));
							function parentNode() {
									return null;
							}

}

