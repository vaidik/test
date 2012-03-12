<?php
class Schema extends AbstractSchema
{
  protected $queries = array(
    'DROP TABLE IF EXISTS `db_revisions`',
    'CREATE TABLE `db_revisions` ( `rev` bigint(20) unsigned DEFAULT NULL ) ENGINE=MyISAM DEFAULT CHARSET=latin1',
    'DROP TABLE IF EXISTS `something`',
    'CREATE TABLE `something` ( `id` int(11) DEFAULT NULL, `name` varchar(25) DEFAULT NULL, `college` varchar(50) DEFAULT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1',
    'INSERT INTO `db_revisions` SET rev=1331588999',
  );
}

