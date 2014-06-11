<?php

class m140602_130009_users extends CDbMigration
{
	public function up()
	{
        $this->createTable('users', array(
            'id' => 'pk',
            'name' => 'int',
            'email' => 'text',
            'password' => 'text',
            'islogin' => 'text',
            'logintime' => 'text',
        ));
	}

	public function down()
	{
        $this->dropTable('users');
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