<?php

namespace Fuel\Migrations;

class Create_records
{
	public function up()
	{
		\DBUtil::create_table('records', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'staff_id' => array('constraint' => 11, 'type' => 'int'),
			'classroom_id' => array('constraint' => 11, 'type' => 'int'),
			'combustibles' => array('constraint' => 11, 'type' => 'int'),
			'incombustibles' => array('constraint' => 11, 'type' => 'int'),
			'plastics' => array('constraint' => 11, 'type' => 'int'),
			'paper' => array('constraint' => 11, 'type' => 'int'),
			'garbages' => array('constraint' => 11, 'type' => 'int'),
			'others' => array('constraint' => 11, 'type' => 'int'),
			'memo' => array('type' => 'text'),
			'condition' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('records');
	}
}