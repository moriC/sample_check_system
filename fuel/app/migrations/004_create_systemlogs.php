<?php

namespace Fuel\Migrations;

class Create_systemlogs
{
	public function up()
	{
		\DBUtil::create_table('systemlogs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'activites' => array('constraint' => 255, 'type' => 'varchar'),
			'activites_level' => array('constraint' => 11, 'type' => 'int'),
			'condition' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('systemlogs');
	}
}