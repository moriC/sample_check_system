<?php

namespace Fuel\Migrations;

class Create_classrooms
{
	public function up()
	{
		\DBUtil::create_table('classrooms', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'class_name' => array('constraint' => 255, 'type' => 'varchar'),
			'place' => array('constraint' => 255, 'type' => 'varchar'),
			'condition' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('classrooms');
	}
}