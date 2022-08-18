<?php

class m220817_104117_test_migration extends CDbMigration
{
	public function up()
	{
        $this->createTable('post',[
            'id'=>'pk',
            'title'=>'string NOT NULL',
            'content'=>'text NOT NULL',
            'author'=>'string NOT NULL'
        ]);
	}

	public function down()
	{
		$this->dropTable('post');

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