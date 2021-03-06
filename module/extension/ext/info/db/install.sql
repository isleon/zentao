SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- DROP TABLE IF EXISTS `zt_infoasset`;
CREATE TABLE IF NOT EXISTS `zt_infoasset` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `lib` varchar(30) NOT NULL,
  `module` mediumint(8) unsigned NOT NULL default '0',
  `product` mediumint(8) unsigned NOT NULL default '0',
  `project` mediumint(8) unsigned NOT NULL default '0',
  `createdBy` varchar(30) NOT NULL default '',
  `createdDate` datetime NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL default '',
  `lastEditedDate` datetime NOT NULL,
  `editedCount` smallint(6) NOT NULL default '0',
  `viewedCount` smallint(6) NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL default '0',
  `company` mediumint(8) unsigned NOT NULL,
  `hostname` char(30) NOT NULL,
  `address` char(30) NOT NULL default '',
  `extendaddress` char(30) NOT NULL default '',
  `os` char(30) NOT NULL default '',
  `username` char(255) NOT NULL default '',
  `password` char(255) NOT NULL default '',
  `status` varchar(30) NOT NULL default '1',
  `duty` char(30) NOT NULL default '',
  `position` varchar(30) NOT NULL default '',
  `devicenumber` varchar(60) NOT NULL default '',
  `rootusername` char(255) NOT NULL default '',
  `rootpassword` char(255) NOT NULL default '',
  `codeversion` char(30) NOT NULL default '',
  `name` varchar(30) NOT NULL,
  `serial` varchar(255) NOT NULL default '',
  `model` varchar(255) NOT NULL default '',
  `cpu` varchar(30) NOT NULL default '',
  `memory` varchar(30) NOT NULL default '',
  `disk` varchar(30) NOT NULL default '',
  `graphics` varchar(30) NOT NULL default '',
  `price` mediumint(8) unsigned NOT NULL default '0',
  `netvalue` mediumint(8) unsigned NOT NULL default '0',
  `code` varchar(60) NOT NULL default '',
  `from` varchar(255) NOT NULL default '',
  `registdate` date NOT NULL default '0000-00-00',
  `lend` varchar(255) NOT NULL default '',
  `lenddate` date NOT NULL default '0000-00-00',
  `returndate` date NOT NULL default '0000-00-00',
  `assetcomment` varchar(255) NOT NULL default '',
  `use` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `company` (`company`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- DROP TABLE IF EXISTS `zt_info`;
CREATE TABLE IF NOT EXISTS `zt_info` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `keywords` varchar(255) NOT NULL default '',
  `lib` varchar(30) NOT NULL,
  `module` mediumint(8) unsigned NOT NULL default '0',
  `createdBy` varchar(30) NOT NULL default '',
  `createdDate` datetime NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL default '',
  `lastEditedDate` datetime NOT NULL,
  `deadline` date NOT NULL default '0000-00-00',
  `editedCount` smallint(6) NOT NULL default '0',
  `viewedCount` smallint(6) NOT NULL DEFAULT '0',
  `mailto` varchar(255) NOT NULL default '',
  `deleted` enum('0','1') NOT NULL default '0',
  `company` mediumint(8) unsigned NOT NULL,
  `account` char(30) NOT NULL,
  `type` char(30) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `digest` varchar(255) NOT NULL,
  `stickie` enum('0','1','2') NOT NULL default '0',
  `state` enum('normal','nocomment') NOT NULL default 'normal',
  `highlight` varchar(7) NOT NULL,
  `relatedStory` varchar(255) NOT NULL DEFAULT '',
  `relatedTask` varchar(255) NOT NULL DEFAULT '',
  `relatedBug` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY  (`id`),
  KEY `company` (`company`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- DROP TABLE IF EXISTS `zt_infolib`;
CREATE TABLE IF NOT EXISTS `zt_infolib` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `company` smallint(5) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `type` char(30) NOT NULL,
  `deleted` enum('0','1') NOT NULL default '0',
  `defaultlib` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `company` (`company`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- DROP TABLE IF EXISTS `zt_infomodule`;
CREATE TABLE IF NOT EXISTS `zt_infomodule` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `company` mediumint(8) unsigned NOT NULL,
  `root` mediumint(8) unsigned NOT NULL default '0',
  `name` char(60) NOT NULL default '',
  `parent` mediumint(8) unsigned NOT NULL default '0',
  `path` char(255) NOT NULL default '',
  `grade` tinyint(3) unsigned NOT NULL default '0',
  `order` tinyint(3) unsigned NOT NULL default '0',
  `type` char(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `company` (`company`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- DROP TABLE IF EXISTS `zt_inforemind`;
CREATE TABLE IF NOT EXISTS `zt_inforemind` (
  `actionID` mediumint(8) unsigned NOT NULL,
  `account` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `company` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY  (`actionID`),
  KEY `company` (`company`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
