<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_Ci_Session_Table extends CI_Migration
{
  public function __construct()
  {
    $this->load->database();
    $this->load->dbforge();
  }

  public function up()
  {
    if ( ! $this->db->table_exists('ci_sessions'))
    {
      $this->db->query("
       CREATE TABLE `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
      )");
    }
  }

  public function down()
  {
  }
}