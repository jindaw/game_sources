-module(data_active_link).
-include("../include/comm.hrl").

-export([get/0]).

% get(成长类型,等级);
% 活动入口配置表;
% ;
% 已有的活动ID，请不要改，必改请通知后端，谢谢！;
% 
get()->
	[{101,1,15},
	 {102,1,15},
	 {103,1,15},
	 {104,1,15},
	 {105,3,10},
	 {106,2,10},
	 {107,5,15},
	 {108,5,10},
	 {109,1,10},
	 {111,2,10}].