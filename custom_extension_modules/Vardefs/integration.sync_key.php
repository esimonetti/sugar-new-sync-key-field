<?php

$fieldName = 'integration1_id';
$fieldLabel = 'LBL_INTEGRATION1_ID';

$dictionary['{OBJECTNAME}']['fields'][$fieldName]['name'] = $fieldName;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['comments'] = $fieldName;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['vname'] = $fieldLabel;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['is_sync_key'] = true;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['type'] = 'varchar';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['enforced'] = '';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['dependency'] = '';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['required'] = false;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['massupdate'] = false;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['readonly'] = true;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['default'] = null;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['isnull'] = true;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['no_default'] = false;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['help'] = '';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['importable'] = 'true';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['duplicate_merge'] = 'enabled'; // changed to enabled
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['merge_filter'] = 'disabled';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['duplicate_on_record_copy'] = 'no';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['audited'] = true;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['reportable'] = true;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['unified_search'] = false;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['calculated'] = false;
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['len'] = '100';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['size'] = '20';
$dictionary['{OBJECTNAME}']['fields'][$fieldName]['studio'] = [
    'recordview' => true,
    'wirelessdetailview' => true,
    'listview' => true, // changed to true
    'wirelesseditview' => false,
    'wirelesslistview' => false,
    'wireless_basic_search' => false,
    'wireless_advanced_search' => false,
    'portallistview' => false,
    'portalrecordview' => false,
    'portaleditview' => false,
];

$db = \DBManagerFactory::getInstance();
$idxName = strtolower('{MODULENAME}');
$dictionary['{OBJECTNAME}']['indices'][] = [
    'name' => $db->getValidDBName('idx_' . $idxName . '_' . $fieldName),
    'type' => 'index', // changed from unique to index
    'fields' => [$fieldName],
];
