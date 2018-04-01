<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-05-02 20:12:17                    *
 *   This file will never be generated again - feel free to edit.            *
 *****************************************************************************/

    /**
     * @method static BoardStatsDAO dao()
     * @method static ProtoBoardStats proto()
     */
	abstract class BoardStats extends AutoBoardStats implements Prototyped, DAOConnected
	{

	    /** @return Timestamp */
        abstract public function getActualPeriodValue();
        /** @return $this */
        abstract public function setActualPeriodValue(Timestamp $timestamp);
        /** @return string */
        abstract protected function exportKey();

        public function export()
        {
            $export = [
                static::dao()->getPeriodFieldName() => $this->getActualPeriodValue()->toStamp(),
                'key' => $this->exportKey()
            ];
            foreach (static::proto()->getMetricProperties() as $property) {
                $export[$property->getName()] = $this->{$property->getGetter()}();
            }
            return $export;
        }

	}
?>