-module(data_world_boss_reward).
-include("../include/comm.hrl").

-export([get/1]).

% get();
% 世界boss奖励;
% 计算公式=min(（造成伤害/标准伤害）*标准铜钱，上限铜钱)
get(1)->
	[41100,87750,210600,131625];
get(2)->
	[43950,92625,222300,138937];
get(3)->
	[47100,97500,234000,146250];
get(4)->
	[49950,102375,245700,153562];
get(5)->
	[53100,107250,257400,160875];
get(6)->
	[56250,112125,269100,168187];
get(7)->
	[59175,117000,280800,175500];
get(8)->
	[62400,121875,292500,182812];
get(9)->
	[65625,126750,304200,190125];
get(10)->
	[68550,131625,315900,197437];
get(11)->
	[71850,136500,327600,204750];
get(12)->
	[75150,138934,333446,208401];
get(13)->
	[78450,141375,339300,212062];
get(14)->
	[81750,146250,351000,219375];
get(15)->
	[86175,151125,362700,226687];
get(16)->
	[89625,156000,374400,234000];
get(17)->
	[93225,160875,386100,241312];
get(18)->
	[96675,165750,397800,248625];
get(19)->
	[100275,170625,409500,255937];
get(20)->
	[201975,175500,421200,263250];
get(21)->
	[207075,180375,432900,270562];
get(22)->
	[212100,182809,438746,274213];
get(23)->
	[217500,185250,444600,277875];
get(24)->
	[222750,190125,456300,285187];
get(25)->
	[272625,195000,468000,292500];
get(26)->
	[278400,199875,479700,299812];
get(27)->
	[283875,204750,491400,307125];
get(28)->
	[289725,209625,503100,314437];
get(29)->
	[295275,214500,514800,321750];
get(30)->
	[347025,219375,526500,329062];
get(31)->
	[352875,224250,538200,336375];
get(32)->
	[359100,229125,549900,343687];
get(33)->
	[365250,234000,561600,351000];
get(34)->
	[402975,243750,585000,365625];
get(35)->
	[416325,248625,596700,372937];
get(36)->
	[431475,253500,608400,380250];
get(37)->
	[444900,258375,620100,387562];
get(38)->
	[451500,263250,631800,394875];
get(39)->
	[466725,268125,643500,402187];
get(40)->
	[623700,277875,666900,416812];
get(41)->
	[696150,282750,678600,424125];
get(42)->
	[736200,287625,690300,431437];
get(43)->
	[776475,297375,713700,446062];
get(44)->
	[785400,302250,725400,453375];
get(45)->
	[866325,307125,737100,460687];
get(46)->
	[875625,316875,760500,475312];
get(47)->
	[885150,321750,772200,482625];
get(48)->
	[926700,331500,795600,497250];
get(49)->
	[936075,336375,807300,504562];
get(50)->
	[977925,346125,830700,519187];
get(51)->
	[1009800,355875,854100,533812];
get(52)->
	[1085100,360750,865800,541125];
get(53)->
	[1095150,370500,889200,555750];
get(54)->
	[1170075,380250,912600,570375];
get(55)->
	[1180500,390000,936000,585000];
get(56)->
	[1191000,394875,947700,592312];
get(57)->
	[1201275,404625,971100,606937];
get(58)->
	[1277175,414375,994500,621562];
get(59)->
	[1287975,424125,1017900,636187];
get(60)->
	[1425375,433875,1041300,650812];
get(61)->
	[1544175,443625,1064700,665437];
get(62)->
	[1577775,458250,1099800,687375];
get(63)->
	[1591050,468000,1123200,702000];
get(64)->
	[1604250,477750,1146600,716625];
get(65)->
	[1684275,487500,1170000,731250];
get(66)->
	[1697850,502125,1205100,753187];
get(67)->
	[1711500,511875,1228500,767812];
get(68)->
	[1725150,526500,1263600,789750];
get(69)->
	[1738875,536250,1287000,804375];
get(70)->
	[1887375,550875,1322100,826312];
get(71)->
	[2039850,565500,1357200,848250];
get(72)->
	[2054475,575250,1380600,862875];
get(73)->
	[2069025,589875,1415700,884812];
get(74)->
	[2084100,604500,1450800,906750];
get(75)->
	[2234925,619125,1485900,928687];
get(76)->
	[2250150,633750,1521000,950625];
get(77)->
	[2331900,648375,1556100,972562];
get(78)->
	[2347350,663000,1591200,994500];
get(79)->
	[2363175,682500,1638000,1023750];
get(80)->
	[3067275,697125,1673100,1045687];
get(81)->
	[3087225,711750,1708200,1067625];
get(82)->
	[3107175,731250,1755000,1096875];
get(83)->
	[3126750,745875,1790100,1118812];
get(84)->
	[3146925,765375,1836900,1148062];
get(85)->
	[3249900,784875,1883700,1177312];
get(86)->
	[3270300,804375,1930500,1206562];
get(87)->
	[3290850,819000,1965600,1228500];
get(88)->
	[3311475,838500,2012400,1257750];
get(89)->
	[3332100,858000,2059200,1287000];
get(90)->
	[3352800,882375,2117700,1323562];
get(91)->
	[3867825,901875,2164500,1352812];
get(92)->
	[3889650,921375,2211300,1382062];
get(93)->
	[3911625,940875,2258100,1411312];
get(94)->
	[3933675,965250,2316600,1447875];
get(95)->
	[3955725,984750,2363400,1477125];
get(96)->
	[3977850,1009125,2421900,1513687];
get(97)->
	[4000650,1033500,2480400,1550250];
get(98)->
	[4022925,1057875,2538900,1586812];
get(99)->
	[4045275,1082250,2597400,1623375];
get(100)->
	[4068075,1106625,2655900,1659937];
get(_)->[0,0,0,0].
