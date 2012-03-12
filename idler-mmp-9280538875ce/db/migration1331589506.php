<?php
 class Migration1331589506 extends AbstractMigration
{
  protected $up = array(
    'ALTER TABLE `something` ADD `something` varchar(10)',
  );
  protected $down = array(
    'ALTER TABLE `something` DROP `something`',
  );
  protected $rev = 1331589506;
}
