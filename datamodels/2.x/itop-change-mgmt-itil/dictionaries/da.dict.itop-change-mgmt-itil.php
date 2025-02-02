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
	'Class:ApprovedChange' => 'Godkendte Changes',
	'Class:ApprovedChange+' => '',
	'Class:ApprovedChange/Attribute:approval_comment' => 'Kommentar til godkendelsen',
	'Class:ApprovedChange/Attribute:approval_comment+' => '',
	'Class:ApprovedChange/Attribute:approval_date' => 'Dato for godkendelse',
	'Class:ApprovedChange/Attribute:approval_date+' => '',
	'Class:ApprovedChange/Stimulus:ev_approve' => 'Godkend',
	'Class:ApprovedChange/Stimulus:ev_approve+' => '',
	'Class:ApprovedChange/Stimulus:ev_assign' => 'Tildel',
	'Class:ApprovedChange/Stimulus:ev_assign+' => '',
	'Class:ApprovedChange/Stimulus:ev_finish' => 'Afslut',
	'Class:ApprovedChange/Stimulus:ev_finish+' => '',
	'Class:ApprovedChange/Stimulus:ev_implement' => 'Implementer',
	'Class:ApprovedChange/Stimulus:ev_implement+' => '',
	'Class:ApprovedChange/Stimulus:ev_monitor' => 'Overvåg',
	'Class:ApprovedChange/Stimulus:ev_monitor+' => '',
	'Class:ApprovedChange/Stimulus:ev_notapprove' => 'Tilbagekald godkendelse',
	'Class:ApprovedChange/Stimulus:ev_notapprove+' => '',
	'Class:ApprovedChange/Stimulus:ev_plan' => 'Planlæg',
	'Class:ApprovedChange/Stimulus:ev_plan+' => '',
	'Class:ApprovedChange/Stimulus:ev_reject' => 'Afslå',
	'Class:ApprovedChange/Stimulus:ev_reject+' => '',
	'Class:ApprovedChange/Stimulus:ev_reopen' => 'Genåben',
	'Class:ApprovedChange/Stimulus:ev_reopen+' => '',
	'Class:ApprovedChange/Stimulus:ev_replan' => 'Genplanlæg',
	'Class:ApprovedChange/Stimulus:ev_replan+' => '',
	'Class:ApprovedChange/Stimulus:ev_validate' => 'Valider',
	'Class:ApprovedChange/Stimulus:ev_validate+' => '',
	'Class:Change' => 'Change',
	'Class:Change+' => '',
	'Class:Change/Attribute:child_changes_list' => 'Afledte Changes',
	'Class:Change/Attribute:child_changes_list+' => 'All the sub changes linked to this change~~',
	'Class:Change/Attribute:creation_date' => 'Oprettet dato',
	'Class:Change/Attribute:creation_date+' => '',
	'Class:Change/Attribute:fallback' => 'Fallback-Plan',
	'Class:Change/Attribute:fallback+' => '',
	'Class:Change/Attribute:impact' => 'Indvirkning',
	'Class:Change/Attribute:impact+' => '',
	'Class:Change/Attribute:manager_email' => 'Manager',
	'Class:Change/Attribute:manager_email+' => '',
	'Class:Change/Attribute:manager_group_id' => 'Manager-Team',
	'Class:Change/Attribute:manager_group_id+' => '',
	'Class:Change/Attribute:manager_group_name' => 'Manager-Team',
	'Class:Change/Attribute:manager_group_name+' => '',
	'Class:Change/Attribute:manager_id' => 'Manager',
	'Class:Change/Attribute:manager_id+' => '',
	'Class:Change/Attribute:outage' => 'Nedetid',
	'Class:Change/Attribute:outage+' => '',
	'Class:Change/Attribute:outage/Value:no' => 'Nej',
	'Class:Change/Attribute:outage/Value:no+' => '',
	'Class:Change/Attribute:outage/Value:yes' => 'Ja',
	'Class:Change/Attribute:outage/Value:yes+' => '',
	'Class:Change/Attribute:parent_id' => 'Parent Change',
	'Class:Change/Attribute:parent_id+' => '',
	'Class:Change/Attribute:parent_id_finalclass_recall' => 'Change-Type',
	'Class:Change/Attribute:parent_id_finalclass_recall+' => '',
	'Class:Change/Attribute:parent_id_friendlyname' => 'Parent Friendly Name',
	'Class:Change/Attribute:parent_id_friendlyname+' => '',
	'Class:Change/Attribute:parent_name' => 'Parent Change Ref',
	'Class:Change/Attribute:parent_name+' => '',
	'Class:Change/Attribute:reason' => 'Årsag',
	'Class:Change/Attribute:reason+' => '',
	'Class:Change/Attribute:related_incident_list' => 'Relaterede incidents',
	'Class:Change/Attribute:related_incident_list+' => 'All the incidents linked to this change~~',
	'Class:Change/Attribute:related_problems_list' => 'Relaterede Problemer',
	'Class:Change/Attribute:related_problems_list+' => 'All the problems linked to this change~~',
	'Class:Change/Attribute:related_request_list' => 'Relaterede Requests',
	'Class:Change/Attribute:related_request_list+' => 'All the user requests linked to this change~~',
	'Class:Change/Attribute:requestor_email' => 'Rekvirent e-mail',
	'Class:Change/Attribute:requestor_email+' => '',
	'Class:Change/Attribute:requestor_id' => 'Rekvirent',
	'Class:Change/Attribute:requestor_id+' => '',
	'Class:Change/Attribute:status' => 'Status',
	'Class:Change/Attribute:status+' => '',
	'Class:Change/Attribute:status/Value:approved' => 'Godkendt',
	'Class:Change/Attribute:status/Value:approved+' => '',
	'Class:Change/Attribute:status/Value:assigned' => 'Tildelt',
	'Class:Change/Attribute:status/Value:assigned+' => '',
	'Class:Change/Attribute:status/Value:closed' => 'Lukket',
	'Class:Change/Attribute:status/Value:closed+' => '',
	'Class:Change/Attribute:status/Value:implemented' => 'Implementeret',
	'Class:Change/Attribute:status/Value:implemented+' => '',
	'Class:Change/Attribute:status/Value:monitored' => 'Overvåget',
	'Class:Change/Attribute:status/Value:monitored+' => '',
	'Class:Change/Attribute:status/Value:new' => 'Ny',
	'Class:Change/Attribute:status/Value:new+' => '',
	'Class:Change/Attribute:status/Value:notapproved' => 'Ikke Godkendt',
	'Class:Change/Attribute:status/Value:notapproved+' => '',
	'Class:Change/Attribute:status/Value:plannedscheduled' => 'Planlagt og tidssat',
	'Class:Change/Attribute:status/Value:plannedscheduled+' => '',
	'Class:Change/Attribute:status/Value:rejected' => 'Afslået',
	'Class:Change/Attribute:status/Value:rejected+' => '',
	'Class:Change/Attribute:status/Value:validated' => 'Valideret',
	'Class:Change/Attribute:status/Value:validated+' => '',
	'Class:Change/Attribute:supervisor_email' => 'Supervisor e-mail',
	'Class:Change/Attribute:supervisor_email+' => '',
	'Class:Change/Attribute:supervisor_group_id' => 'Supervisor-Team',
	'Class:Change/Attribute:supervisor_group_id+' => '',
	'Class:Change/Attribute:supervisor_group_name' => 'Supervisor-Teamnavn',
	'Class:Change/Attribute:supervisor_group_name+' => '',
	'Class:Change/Attribute:supervisor_id' => 'Supervisor',
	'Class:Change/Attribute:supervisor_id+' => '',
	'Class:Change/Stimulus:ev_approve' => 'Godkend',
	'Class:Change/Stimulus:ev_approve+' => '',
	'Class:Change/Stimulus:ev_assign' => 'Tildel',
	'Class:Change/Stimulus:ev_assign+' => '',
	'Class:Change/Stimulus:ev_finish' => 'Afslut',
	'Class:Change/Stimulus:ev_finish+' => '',
	'Class:Change/Stimulus:ev_implement' => 'Implementer',
	'Class:Change/Stimulus:ev_implement+' => '',
	'Class:Change/Stimulus:ev_monitor' => 'Overvåg',
	'Class:Change/Stimulus:ev_monitor+' => '',
	'Class:Change/Stimulus:ev_notapprove' => 'Afslå',
	'Class:Change/Stimulus:ev_notapprove+' => '',
	'Class:Change/Stimulus:ev_plan' => 'Planlæg',
	'Class:Change/Stimulus:ev_plan+' => '',
	'Class:Change/Stimulus:ev_reject' => 'Afslå',
	'Class:Change/Stimulus:ev_reject+' => '',
	'Class:Change/Stimulus:ev_reopen' => 'Genåben',
	'Class:Change/Stimulus:ev_reopen+' => '',
	'Class:Change/Stimulus:ev_replan' => 'Genplanlæg',
	'Class:Change/Stimulus:ev_replan+' => '',
	'Class:Change/Stimulus:ev_validate' => 'Valider',
	'Class:Change/Stimulus:ev_validate+' => '',
	'Class:EmergencyChange' => 'Emergency Ændring',
	'Class:EmergencyChange+' => '',
	'Class:EmergencyChange/Stimulus:ev_approve' => 'Godkend',
	'Class:EmergencyChange/Stimulus:ev_approve+' => '',
	'Class:EmergencyChange/Stimulus:ev_assign' => 'Tildel',
	'Class:EmergencyChange/Stimulus:ev_assign+' => '',
	'Class:EmergencyChange/Stimulus:ev_finish' => 'Afslut',
	'Class:EmergencyChange/Stimulus:ev_finish+' => '',
	'Class:EmergencyChange/Stimulus:ev_implement' => 'Implementer',
	'Class:EmergencyChange/Stimulus:ev_implement+' => '',
	'Class:EmergencyChange/Stimulus:ev_monitor' => 'Overvåg',
	'Class:EmergencyChange/Stimulus:ev_monitor+' => '',
	'Class:EmergencyChange/Stimulus:ev_notapprove' => 'Godkend Ikke',
	'Class:EmergencyChange/Stimulus:ev_notapprove+' => '',
	'Class:EmergencyChange/Stimulus:ev_plan' => 'Planlæg',
	'Class:EmergencyChange/Stimulus:ev_plan+' => '',
	'Class:EmergencyChange/Stimulus:ev_reject' => 'Afslå',
	'Class:EmergencyChange/Stimulus:ev_reject+' => '',
	'Class:EmergencyChange/Stimulus:ev_reopen' => 'Genåben',
	'Class:EmergencyChange/Stimulus:ev_reopen+' => '',
	'Class:EmergencyChange/Stimulus:ev_replan' => 'Genplanlæg',
	'Class:EmergencyChange/Stimulus:ev_replan+' => '',
	'Class:EmergencyChange/Stimulus:ev_validate' => 'Valider',
	'Class:EmergencyChange/Stimulus:ev_validate+' => '',
	'Class:NormalChange' => 'Normal Ændring',
	'Class:NormalChange+' => '',
	'Class:NormalChange/Attribute:acceptance_comment' => 'Kommentar til accept',
	'Class:NormalChange/Attribute:acceptance_comment+' => '',
	'Class:NormalChange/Attribute:acceptance_date' => 'Dato for accept',
	'Class:NormalChange/Attribute:acceptance_date+' => '',
	'Class:NormalChange/Stimulus:ev_approve' => 'Godkend',
	'Class:NormalChange/Stimulus:ev_approve+' => '',
	'Class:NormalChange/Stimulus:ev_assign' => 'Tildel',
	'Class:NormalChange/Stimulus:ev_assign+' => '',
	'Class:NormalChange/Stimulus:ev_finish' => 'Afslut',
	'Class:NormalChange/Stimulus:ev_finish+' => '',
	'Class:NormalChange/Stimulus:ev_implement' => 'Implementer',
	'Class:NormalChange/Stimulus:ev_implement+' => '',
	'Class:NormalChange/Stimulus:ev_monitor' => 'Overvåg',
	'Class:NormalChange/Stimulus:ev_monitor+' => '',
	'Class:NormalChange/Stimulus:ev_notapprove' => 'Godkent Ikke',
	'Class:NormalChange/Stimulus:ev_notapprove+' => '',
	'Class:NormalChange/Stimulus:ev_plan' => 'Planlæg',
	'Class:NormalChange/Stimulus:ev_plan+' => '',
	'Class:NormalChange/Stimulus:ev_reject' => 'Afslå',
	'Class:NormalChange/Stimulus:ev_reject+' => '',
	'Class:NormalChange/Stimulus:ev_reopen' => 'Genåben',
	'Class:NormalChange/Stimulus:ev_reopen+' => '',
	'Class:NormalChange/Stimulus:ev_replan' => 'Genplanlæg',
	'Class:NormalChange/Stimulus:ev_replan+' => '',
	'Class:NormalChange/Stimulus:ev_validate' => 'Valider',
	'Class:NormalChange/Stimulus:ev_validate+' => '',
	'Class:RoutineChange' => 'Rutine Ændring',
	'Class:RoutineChange+' => '',
	'Class:RoutineChange/Stimulus:ev_approve' => 'Godkend',
	'Class:RoutineChange/Stimulus:ev_approve+' => '',
	'Class:RoutineChange/Stimulus:ev_assign' => 'Tildel',
	'Class:RoutineChange/Stimulus:ev_assign+' => '',
	'Class:RoutineChange/Stimulus:ev_finish' => 'Afslut',
	'Class:RoutineChange/Stimulus:ev_finish+' => '',
	'Class:RoutineChange/Stimulus:ev_implement' => 'Implementer',
	'Class:RoutineChange/Stimulus:ev_implement+' => '',
	'Class:RoutineChange/Stimulus:ev_monitor' => 'Overvåg',
	'Class:RoutineChange/Stimulus:ev_monitor+' => '',
	'Class:RoutineChange/Stimulus:ev_notapprove' => 'Godkend Ikke',
	'Class:RoutineChange/Stimulus:ev_notapprove+' => '',
	'Class:RoutineChange/Stimulus:ev_plan' => 'Planlæg',
	'Class:RoutineChange/Stimulus:ev_plan+' => '',
	'Class:RoutineChange/Stimulus:ev_reject' => 'Afslå',
	'Class:RoutineChange/Stimulus:ev_reject+' => '',
	'Class:RoutineChange/Stimulus:ev_reopen' => 'Genåben',
	'Class:RoutineChange/Stimulus:ev_reopen+' => '',
	'Class:RoutineChange/Stimulus:ev_replan' => 'Genplanlæg',
	'Class:RoutineChange/Stimulus:ev_replan+' => '',
	'Class:RoutineChange/Stimulus:ev_validate' => 'Valider',
	'Class:RoutineChange/Stimulus:ev_validate+' => '',
	'Menu:Change:Overview' => 'Oversigt',
	'Menu:Change:Overview+' => '',
	'Menu:Change:Shortcuts' => 'Genveje',
	'Menu:Change:Shortcuts+' => '',
	'Menu:ChangeManagement' => 'Change Management',
	'Menu:Changes' => 'Offene Changes',
	'Menu:Changes+' => 'Alle åbne Changes',
	'Menu:MyChanges' => 'Mine Changes',
	'Menu:MyChanges+' => 'Changes som er tildelt mig',
	'Menu:NewChange' => 'Ny Change',
	'Menu:NewChange+' => 'Opret en ny Change ticket',
	'Menu:SearchChanges' => 'Søg efter Changes',
	'Menu:SearchChanges+' => 'Søg efter Change Tickets',
	'Menu:WaitingAcceptance' => 'Changes, som afventer accept',
	'Menu:WaitingAcceptance+' => '',
	'Menu:WaitingApproval' => 'Changes, som afventer godkendelse',
	'Menu:WaitingApproval+' => '',
	'Tickets:Related:OpenChanges' => 'Open changes~~',
	'Tickets:Related:RecentChanges' => 'Recent changes (72h)~~',
	'UI-ChangeManagementOverview-ChangeByCategory-last-7-days' => 'Changes de sidste 7 dage, efter kategori',
	'UI-ChangeManagementOverview-ChangeByDomain-last-7-days' => 'Changes de sidste 7 dage efter type',
	'UI-ChangeManagementOverview-ChangeByStatus-last-7-days' => 'Changes de sidste 7 dage efter status',
	'UI-ChangeManagementOverview-Last-7-days' => 'Antal Changes de sidste 7 dage',
]);
