<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:RequestManagement' => '服务台',
	'Menu:RequestManagement+' => '服务台',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:UserRequest:Provider' => 'Open request transfered to provider',
	'Menu:UserRequest:Provider+' => 'Open request transfered to provider',
	'Menu:UserRequest:Overview' => '概况',
	'Menu:UserRequest:Overview+' => '概况',
	'Menu:NewUserRequest' => '新建用户需求',
	'Menu:NewUserRequest+' => '新建用户需求',
	'Menu:SearchUserRequests' => '搜索用户需求',
	'Menu:SearchUserRequests+' => '搜索用户需求',
	'Menu:UserRequest:Shortcuts' => '快捷方式',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => '分配给我的需求',
	'Menu:UserRequest:MyRequests+' => '分配给我的需求 (作为办理人)',
	'Menu:UserRequest:MySupportRequests' => '我办理的需求',
	'Menu:UserRequest:MySupportRequests+' => '我办理的需求',
	'Menu:UserRequest:EscalatedRequests' => '已升级的需求',
	'Menu:UserRequest:EscalatedRequests+' => '已升级的需求',
	'Menu:UserRequest:OpenRequests' => '所有打开的需求',
	'Menu:UserRequest:OpenRequests+' => '所有打开的需求',
	'UI:WelcomeMenu:MyAssignedCalls' => '分配给我的需求',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => '最近两周的需求(按类型)',
	'UI-RequestManagementOverview-Last-14-days' => '最近两周的需求(按数量)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => '打开的需求(按状态)',
	'UI-RequestManagementOverview-OpenRequestByAgent' => '打开的需求(按办理人)',
	'UI-RequestManagementOverview-OpenRequestByType' => '打开的需求(按类型)',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => '打开的需求(按客户)',
	'Class:UserRequest:KnownErrorList' => '已知错误',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserRequest' => '用户需求',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => '状态',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => '新建',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => '已升级响应时间',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => '已分配',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => '已升级解决时间',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => '等待审批',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => '已审批',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => '已驳回',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => '待定',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => '已解决',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => '已关闭',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => '需求类型',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => '服务需求',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '服务需求',
	'Class:UserRequest/Attribute:impact' => '影响范围',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => '部门',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => '服务',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => '个人',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => '优先级',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => '非常高',
	'Class:UserRequest/Attribute:priority/Value:1+' => '非常高',
	'Class:UserRequest/Attribute:priority/Value:2' => '高',
	'Class:UserRequest/Attribute:priority/Value:2+' => '高',
	'Class:UserRequest/Attribute:priority/Value:3' => '中',
	'Class:UserRequest/Attribute:priority/Value:3+' => '中',
	'Class:UserRequest/Attribute:priority/Value:4' => '低',
	'Class:UserRequest/Attribute:priority/Value:4+' => '低',
	'Class:UserRequest/Attribute:urgency' => '紧急程度',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => '非常高',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '非常高',
	'Class:UserRequest/Attribute:urgency/Value:2' => '高',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '高',
	'Class:UserRequest/Attribute:urgency/Value:3' => '中',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '中',
	'Class:UserRequest/Attribute:urgency/Value:4' => '低',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '低',
	'Class:UserRequest/Attribute:origin' => '来自',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:mail+' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => '监控',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => '监控',
	'Class:UserRequest/Attribute:origin/Value:phone' => '电话',
	'Class:UserRequest/Attribute:origin/Value:phone+' => '电话',
	'Class:UserRequest/Attribute:origin/Value:portal' => ITOP_APPLICATION_SHORT,
	'Class:UserRequest/Attribute:origin/Value:portal+' => ITOP_APPLICATION_SHORT,
	'Class:UserRequest/Attribute:approver_id' => '审批人',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => '邮箱',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => '服务',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => '服务名称',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => '子服务',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => '子服务名称',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => '是否升级',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => '否',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '否',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => '是',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '是',
	'Class:UserRequest/Attribute:escalation_reason' => '升级原因',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => '分配日期',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => '解决日期',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => '最后更新',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => '累计待定',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => '响应时间',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => '解决时间',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => '响应时间截止',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => '超过SLA响应时间',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA响应时间超过',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => '解决时间截止',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => '超过SLA解决时间',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA解决时间超过',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => '耗时',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => '解决代码',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => '帮助',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '帮助',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'bug修复',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug修复',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => '其它',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '其它',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => '培训',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '培训',
	'Class:UserRequest/Attribute:solution' => '解决方案',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => '待定原因',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => '父级需求',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_incident_id' => '父级事件',
	'Class:UserRequest/Attribute:parent_incident_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => '需求编号',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => '父级问题',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => '问题编号',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => '父级变更',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => '变更编号',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:parent_incident_ref' => '父级事件编号',
	'Class:UserRequest/Attribute:parent_incident_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => '子需求',
	'Class:UserRequest/Attribute:related_request_list+' => '该父级需求相关的所有子需求',
	'Class:UserRequest/Attribute:public_log' => '评论',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => '用户满意度',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => '基本满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '基本满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => '非常不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '非常不满意',
	'Class:UserRequest/Attribute:user_comment' => '用户评论',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => '分配',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => '重新分配',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => '批准',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => '驳回',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => '待定',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => '超时',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => '自动解决',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => '自动关闭',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => '标记为已解决',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => '关闭',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => '重新打开',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => '等待审批',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => '不能分配父级需求给自己',

	'Class:UserRequest/Method:ResolveChildTickets' => '解决子工单',
	'Class:UserRequest/Method:ResolveChildTickets+' => '递归解决子工单(自动解决),并调整相关字段与父级工单保持一致: 服务, 团队, 办理人, 解决方案信息',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Organization:Overview:UserRequests' => '该组织的所有用户需求',
	'Organization:Overview:MyUserRequests' => '我在该组织内发起的需求',
	'Organization:Overview:Tickets' => '该组织内的所有工单',
));
