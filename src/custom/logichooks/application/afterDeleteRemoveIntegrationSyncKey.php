<?php

class afterDeleteRemoveIntegrationSyncKey
{
    protected $syncKeyField = 'integration1_id';

    public function removeSyncKey($bean, $event, $arguments)
    {
        // after delete, make the field null if it is there
        if (isset($bean->{$this->syncKeyField})) {
            $qb = \DBManagerFactory::getConnection()->createQueryBuilder();
            $qb->update($bean->table_name)
                ->set($this->syncKeyField, $qb->createPositionalParameter(null))
                ->where($qb->expr()->eq('id', $qb->createPositionalParameter($bean->id)))
                ->execute();
        }
    }
}
