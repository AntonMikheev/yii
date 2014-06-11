<?php

class m140602_085105_reviews extends CDbMigration
{
	public function up()
	{
        $this->createTable('reviews', array(
            'id' => 'pk',
            'heading_id' => 'int',
            'name' => 'text',
            'text' => 'text',
            'author' => 'text',
        ));
	}

	public function down()
	{
        $this->dropTable('reviews');
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