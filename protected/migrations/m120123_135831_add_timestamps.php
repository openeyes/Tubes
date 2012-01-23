<?php

class m120123_135831_add_timestamps extends CDbMigration {
	public function up() {
		$this->addColumn('dataset', 'create_time', 'datetime');
		$this->addColumn('dataset', 'update_time', 'datetime');
	}

	public function down() {
		$this->dropColumn('dataset', 'create_time');
		$this->dropColumn('dataset', 'update_time');
	}

}