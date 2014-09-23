<?php

class Model_Record extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'staff_id',
		'classroom_id',
		'combustibles',
		'incombustibles',
		'plastics',
		'paper',
		'garbages',
		'others',
		'memo',
		'condition',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'records';

}
