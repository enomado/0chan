<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2014-08-21 12:21:47                    *
 *   This file will never be generated again - feel free to edit.            *
 *****************************************************************************/

	class FavouriteBoard extends AutoFavouriteBoard implements Prototyped, DAOConnected
	{
		/**
		 * @return FavouriteBoard
		**/
		public static function create()
		{
			return new self;
		}
		
		/**
		 * @return FavouriteBoardDAO
		**/
		public static function dao()
		{
			return Singleton::getInstance('FavouriteBoardDAO');
		}
		
		/**
		 * @return ProtoFavouriteBoard
		**/
		public static function proto()
		{
			return Singleton::getInstance('ProtoFavouriteBoard');
		}
		
		// your brilliant stuff goes here
	}
?>