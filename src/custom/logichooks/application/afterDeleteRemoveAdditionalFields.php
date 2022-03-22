<?php

class afterDeleteRemoveAdditionalFields
{
    public function removeAdditionalFields($bean, $event, $arguments)
    {
        // after delete, make the field null if it is there
        if (isset($bean->integration1_id)) {
            $qb = \DBManagerFactory::getConnection()->createQueryBuilder();
            $qb->update($bean->table_name)
                ->set('integration1_id', $qb->createPositionalParameter(null))
                ->where($qb->expr()->eq('id', $qb->createPositionalParameter($bean->id)))
                ->execute();
        }
    }
}
