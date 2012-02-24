<?php

class m120224_162337_remove_calculated_fields extends CDbMigration {
	public function up() {
		$this->dropColumn('dataset','pt_age');
	}

	public function down() {
		$this->addColumn('dataset','asmt_avg_iop', 'tinyint(10) NOT NULL');
		$this->addColumn('dataset','pt_age', 'smallint(5) NOT NULL');
	}

	public function safeUp() {
		$this->up();
	}

	public function safeDown() {
		$this->down();
	}
	
}