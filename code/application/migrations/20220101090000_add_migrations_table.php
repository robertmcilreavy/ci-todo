<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_Migrations_Table extends CI_Migration
{
  public function __construct()
  {
    $this->load->database();
    $this->load->dbforge();
  }

  public function up()
  {
    if ( ! $this->db->table_exists('migrations'))
    {
      $this->db->query("
        CREATE TABLE `migrations` (
        `version` bigint(20) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
      $this->db->query("UPDATE migrations SET version = 0;");

    }
  }

  public function down()
  {
  }
}