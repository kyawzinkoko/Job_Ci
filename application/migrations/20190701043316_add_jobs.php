<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_Add_jobs extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                            'type'           => 'INT',
                            'constraint'     => '11' ,
                            'unsigned'       => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'type' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'company' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'logo' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'url' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255'
                        ),
                        'position' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'location' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'description' => array(
                            'type'           => 'TEXT',
                            'null'           => TRUE,
                        ),
                        'how_to_apply' => array(
                            'type'           => 'TEXT',
                            'null'           => TRUE,
                        ),
                        'token' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'public' => array(
                            'type'           => 'boolean',
                        ),
                        'activated' => array(
                            'type'           => 'boolean',
                        ),
                        'email' => array(
                            'type'           => 'VARCHAR',
                            'constraint'     => '255',
                        ),
                        'expires_at' => array(
                            'type'           => 'DATETIME',
                        ),
                        'created_at' => array(
                            'type'           => 'DATETIME',
                        ),
                        'update_at' => array(
                            'type'           => 'DATETIME',
                        ),
                        'category_id' => array(
                            'type'           => 'INT',
                            'constraint'     =>'11' ,
                            'unsigned'       => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('jobs');
        }

        public function down()
        {
                $this->dbforge->drop_table('jobs');
        }
}
