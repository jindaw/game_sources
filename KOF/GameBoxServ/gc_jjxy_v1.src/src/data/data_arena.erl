-module(data_arena).
-include("../include/comm.hrl").

-export([get/0]).

% get();
% 几率单位为10000；例如90%；就填9000;
% 竞技场数据;
% ;
% 
get()->
	[{1,10,60,15000,10,8000,1},
	 {11,50,50,12000,10,6000,1},
	 {51,100,45,10000,10,4000,1},
	 {101,200,40,8000,5,2000,2},
	 {201,300,35,6000,5,1000,2},
	 {301,400,30,4000,5,1000,5},
	 {401,500,25,2000,5,1000,5},
	 {501,1000,20,2000,5,1000,10},
	 {1001,2000,10,2000,5,1000,50},
	 {2001,3000,10,2000,5,1000,50},
	 {3001,4000,10,2000,5,1000,100},
	 {4001,5000,10,2000,5,1000,100},
	 {5001,0,10,2000,5,1000,200}].