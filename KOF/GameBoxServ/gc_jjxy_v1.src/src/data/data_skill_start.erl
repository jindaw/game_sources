-module(data_skill_start).
-include("../include/comm.hrl").

-export([get/1]).

% get();
% 职业初始化技能;
% 
get(1)->
	#d_skill_start{
		pro          = 1,               %% 职业ID
		skill_default = [{10010,1},{10011,1},{10012,1},{10013,1},{10014,1},{10015,1}],%% 初始技能
		skill_learn  = [10014,10015,10016]%% 学习技能
	};

get(2)->
	#d_skill_start{
		pro          = 2,               %% 职业ID
		skill_default = [{10020,1},{10021,1},{10022,1},{10023,1},{10024,1},{10025,1}],%% 初始技能
		skill_learn  = [10024,10025,10026]%% 学习技能
	};

get(3)->
	#d_skill_start{
		pro          = 3,               %% 职业ID
		skill_default = [{10030,1},{10031,1},{10032,1},{10033,1},{10034,1},{10035,1}],%% 初始技能
		skill_learn  = [10034,10035,10036]%% 学习技能
	};

get(4)->
	#d_skill_start{
		pro          = 4,               %% 职业ID
		skill_default = [{10040,1},{10041,1},{10042,1},{10043,1},{10044,1},{10045,1}],%% 初始技能
		skill_learn  = [10044,10045,10046]%% 学习技能
	};

get(5)->
	#d_skill_start{
		pro          = 5,               %% 职业ID
		skill_default = [{10050,1},{10051,1},{10052,1},{10053,1},{10054,1},{10055,1}],%% 初始技能
		skill_learn  = [10054,10055,10056]%% 学习技能
	};

get(6)->
	#d_skill_start{
		pro          = 6,               %% 职业ID
		skill_default = [{10060,1},{10061,1},{10062,1},{10063,1},{10064,1},{10065,1}],%% 初始技能
		skill_learn  = [10064,10065,10066]%% 学习技能
	};

get(_)->
	?null.
