<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-29 18:26:37                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoModeratorLog_PropertyDAO extends ModeratorLogDAO
	{
		protected $linkName =  'main';
		
		public function getTable()
		{
			return 'moderator_log';
		}
		
		public function getObjectName()
		{
			return 'ModeratorLog_Property';
		}
		
		public function getSequence()
		{
			return 'moderator_log_id';
		}
	}
?>