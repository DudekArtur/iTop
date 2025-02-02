<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 * @author Erik Bøg <erik@boegmoeller.dk>
 *
 */
Dict::Add('DA DA', 'Danish', 'Dansk', [
	'Class:Problem' => 'Problem',
	'Class:Problem+' => '',
	'Class:Problem/Attribute:assignment_date' => 'Dato tildelt',
	'Class:Problem/Attribute:assignment_date+' => '',
	'Class:Problem/Attribute:impact' => 'Påvirkning',
	'Class:Problem/Attribute:impact+' => '',
	'Class:Problem/Attribute:impact/Value:1' => 'Afdeling',
	'Class:Problem/Attribute:impact/Value:1+' => 'En afdeling er påvirket',
	'Class:Problem/Attribute:impact/Value:2' => 'Service',
	'Class:Problem/Attribute:impact/Value:2+' => 'En service er påvirket',
	'Class:Problem/Attribute:impact/Value:3' => 'Person',
	'Class:Problem/Attribute:impact/Value:3+' => 'En person er påvirket',
	'Class:Problem/Attribute:knownerrors_list' => 'Known Errors',
	'Class:Problem/Attribute:knownerrors_list+' => 'All the known errors that are linked to this problem~~',
	'Class:Problem/Attribute:priority' => 'Prioritet',
	'Class:Problem/Attribute:priority+' => '',
	'Class:Problem/Attribute:priority/Value:1' => 'Lav',
	'Class:Problem/Attribute:priority/Value:1+' => '',
	'Class:Problem/Attribute:priority/Value:2' => 'Middel',
	'Class:Problem/Attribute:priority/Value:2+' => '',
	'Class:Problem/Attribute:priority/Value:3' => 'Høj',
	'Class:Problem/Attribute:priority/Value:3+' => '',
	'Class:Problem/Attribute:priority/Value:4' => '',
	'Class:Problem/Attribute:priority/Value:4+' => '',
	'Class:Problem/Attribute:product' => 'Produkt',
	'Class:Problem/Attribute:product+' => '',
	'Class:Problem/Attribute:related_change_id' => 'Relateret Change',
	'Class:Problem/Attribute:related_change_id+' => '',
	'Class:Problem/Attribute:related_change_ref' => 'Ref',
	'Class:Problem/Attribute:related_change_ref+' => '',
	'Class:Problem/Attribute:related_incident_list' => 'Related incidents~~',
	'Class:Problem/Attribute:related_incident_list+' => 'All the incidents that are related to this problem~~',
	'Class:Problem/Attribute:related_request_list' => 'Relateret Requests',
	'Class:Problem/Attribute:related_request_list+' => 'All the requests that are related to this problem~~',
	'Class:Problem/Attribute:resolution_date' => 'Dato løst',
	'Class:Problem/Attribute:resolution_date+' => '',
	'Class:Problem/Attribute:service_id' => 'Service',
	'Class:Problem/Attribute:service_id+' => '',
	'Class:Problem/Attribute:service_name' => 'Navn',
	'Class:Problem/Attribute:service_name+' => '',
	'Class:Problem/Attribute:servicesubcategory_id' => 'Service Kategori',
	'Class:Problem/Attribute:servicesubcategory_id+' => '',
	'Class:Problem/Attribute:servicesubcategory_name' => 'Navn',
	'Class:Problem/Attribute:servicesubcategory_name+' => '',
	'Class:Problem/Attribute:status' => 'Status',
	'Class:Problem/Attribute:status+' => '',
	'Class:Problem/Attribute:status/Value:assigned' => 'Tildelt',
	'Class:Problem/Attribute:status/Value:assigned+' => '',
	'Class:Problem/Attribute:status/Value:closed' => 'Lukket',
	'Class:Problem/Attribute:status/Value:closed+' => '',
	'Class:Problem/Attribute:status/Value:new' => 'Ny',
	'Class:Problem/Attribute:status/Value:new+' => '',
	'Class:Problem/Attribute:status/Value:resolved' => 'Løst',
	'Class:Problem/Attribute:status/Value:resolved+' => '',
	'Class:Problem/Attribute:urgency' => 'Vigtighed',
	'Class:Problem/Attribute:urgency+' => '',
	'Class:Problem/Attribute:urgency/Value:1' => 'Lav',
	'Class:Problem/Attribute:urgency/Value:1+' => 'Lav',
	'Class:Problem/Attribute:urgency/Value:2' => 'Middel',
	'Class:Problem/Attribute:urgency/Value:2+' => 'Middel',
	'Class:Problem/Attribute:urgency/Value:3' => 'Høj',
	'Class:Problem/Attribute:urgency/Value:3+' => 'Høj',
	'Class:Problem/Attribute:urgency/Value:4' => '',
	'Class:Problem/Attribute:urgency/Value:4+' => '',
	'Class:Problem/Stimulus:ev_assign' => 'Tildel',
	'Class:Problem/Stimulus:ev_assign+' => '',
	'Class:Problem/Stimulus:ev_close' => 'Luk',
	'Class:Problem/Stimulus:ev_close+' => '',
	'Class:Problem/Stimulus:ev_reassign' => 'Forny tildeling',
	'Class:Problem/Stimulus:ev_reassign+' => '',
	'Class:Problem/Stimulus:ev_resolve' => 'Løs',
	'Class:Problem/Stimulus:ev_resolve+' => '',
	'Menu:NewProblem' => 'Nyt Problem',
	'Menu:NewProblem+' => 'Nyt Problem',
	'Menu:Problem:MyProblems' => 'Mine Problemer',
	'Menu:Problem:MyProblems+' => 'Mine Problemer',
	'Menu:Problem:OpenProblems' => 'Alle uløste problemer',
	'Menu:Problem:OpenProblems+' => 'Alle uløste problemer',
	'Menu:Problem:Overview' => 'Oversigt',
	'Menu:Problem:Overview+' => 'Oversigt',
	'Menu:Problem:Shortcuts' => 'Genvej',
	'Menu:ProblemManagement' => 'Problem Management',
	'Menu:ProblemManagement+' => 'Problem Management',
	'Menu:SearchProblems' => 'Søg efter problem',
	'Menu:SearchProblems+' => 'Søg efter problem',
	'UI-ProblemManagementOverview-ProblemByPriority' => 'Problemer efter prioritet',
	'UI-ProblemManagementOverview-ProblemByPriority+' => 'Problemer efter prioritet',
	'UI-ProblemManagementOverview-ProblemByService' => 'Problemer efter ydelse',
	'UI-ProblemManagementOverview-ProblemByService+' => 'Problemer efter ydelse',
	'UI-ProblemManagementOverview-ProblemUnassigned' => 'Ikke tildelte problemer',
	'UI-ProblemManagementOverview-ProblemUnassigned+' => 'Ikke tildelte problemer',
	'UI:ProblemMgmtMenuOverview:Title' => 'Dashboard for problem Management',
	'UI:ProblemMgmtMenuOverview:Title+' => 'Dashboard for problem Management',
]);
