<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2014-04-16 15:41:40                    *
 *   This file will never be generated again - feel free to edit.            *
 *****************************************************************************/

	class UserDAO extends AutoUserDAO implements IdentifiableByRequestDAO
	{
        /**
         * @param $login
         * @return User
         * @throws ObjectNotFoundException
         */
        public function getByRequestedValue($login) {
            return User::dao()->getByLogin($login);
        }

        /**
         * @param $login
         * @return User|null
         */
        public function getByLogin($login) {
            return Criteria::create(User::dao())
                ->add(Expression::eq(SQLFunction::create('lower', 'login'), mb_strtolower($login)))
                ->setLimit(1)
                ->get();
        }

	}
?>