<?php

$additionalInfo = [
    'name' => 'sync_key',
    'label' => 'LBL_SYNC_KEY',
    'comment' => 'External default id of the remote integration record',
];

$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['name'] = $additionalInfo['name'];
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['vname'] = $additionalInfo['label'];
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['is_sync_key'] = true;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['type'] = 'varchar';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['enforced'] = '';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['dependency'] = '';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['required'] = false;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['massupdate'] = false;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['readonly'] = true;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['default'] = null;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['isnull'] = true;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['no_default'] = false;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['comments'] = $additionalInfo['comment'];
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['help'] = '';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['importable'] = 'true';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['duplicate_merge'] = 'disabled';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['merge_filter'] = 'disabled';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['duplicate_on_record_copy'] = 'no';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['audited'] = true;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['reportable'] = true;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['unified_search'] = false;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['calculated'] = false;
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['len'] = '100';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['size'] = '20';
$dictionary['{OBJECTNAME}']['fields'][$additionalInfo['name']]['studio'] = [
    'recordview' => true,
    'wirelessdetailview' => true,
    'listview' => false,
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
    'name' => $db->getValidDBName('idx_' . $idxName . '_' . $additionalInfo['name']),
    'type' => 'unique',
    'fields' => [$additionalInfo['name']],
];
