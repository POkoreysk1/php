<?php

class m220817_132105_rand_10 extends CDbMigration
{
    public function up()
    {

for ($i = 0; $i<=10;$i++){
        $this->insert('post',['title'=>$i,'content'=>$i]) ;
}
    }

    public function down()
    {
        for ($i = 0; $i<=10;$i++) {
            $this->delete('post', "title=$i",);
        }
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