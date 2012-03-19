<?php

class m120224_161611_allow_null_iops extends CDbMigration {
	
	public function up() {
		$this->alterColumn('dataset','asmt_iop1', 'tinyint(10)');
		$this->alterColumn('dataset','asmt_iop2', 'tinyint(10)');
		$this->alterColumn('dataset','asmt_iop3', 'tinyint(10)');
	}

	public function down() {
		$this->alterColumn('dataset','asmt_iop1', 'tinyint(10) NOT NULL');
		$this->alterColumn('dataset','asmt_iop2', 'tinyint(10) NOT NULL');
		$this->alterColumn('dataset','asmt_iop3', 'tinyint(10) NOT NULL');
	}

	public function safeUp() {
		$this->up();
	}

	public function safeDown() {
		$this->down();
	}
	
}