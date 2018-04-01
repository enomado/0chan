<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2014-08-29 14:44:36                    *
 *   This file will never be generated again - feel free to edit.            *
 *****************************************************************************/

	class Video extends AutoVideo implements Prototyped, DAOConnected
	{
		/**
		 * @return Video
		**/
		public static function create()
		{
			return new self;
		}

		/**
		 * @return VideoDAO
		**/
		public static function dao()
		{
			return Singleton::getInstance('VideoDAO');
		}

		/**
		 * @return ProtoVideo
		**/
		public static function proto()
		{
			return Singleton::getInstance('ProtoVideo');
		}

	}