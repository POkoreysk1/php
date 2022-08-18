<?php

class m220817_130041_delete_author extends CDbMigration
{
	public function up()
	{
        $this->dropColumn('post','author');
	}

	public function down()
	{
		$this->addColumn('post','author','string NOT NULL');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}