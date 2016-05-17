-module(data_goods_category).
-include("../include/comm.hrl").

-export([attr_base/1]).

% attr_base(子类ID);
% 物品分类;
% 装备20个子 其它每个大类有50个子类ID的空间
attr_base(11)->[52,51];
attr_base(12)->[51,53];
attr_base(13)->[50,52];
attr_base(14)->[44];
attr_base(15)->[52,54];
attr_base(31)->[52,51];
attr_base(32)->[52,51];
attr_base(33)->[52,51];
attr_base(34)->[52,51];
attr_base(35)->[52,51];
attr_base(36)->[52,51];
attr_base(51)->[50,52,56,59,66,67];
attr_base(52)->[50,52,56,59,66,67];
attr_base(53)->[50,52,56,59,66,67];
attr_base(54)->[50,52,56,59,66,67];
attr_base(55)->[50,52,56,59,66,67];
attr_base(56)->[50,52,56,59,66,67];
attr_base(70)->[0];
attr_base(71)->[0];
attr_base(72)->[0];
attr_base(75)->[0];
attr_base(76)->[0];
attr_base(77)->[0];
attr_base(78)->[0];
attr_base(79)->[0];
attr_base(111)->[50,51];
attr_base(112)->[52,53];
attr_base(113)->[42];
attr_base(114)->[54];
attr_base(115)->[57];
attr_base(116)->[58];
attr_base(117)->[55];
attr_base(118)->[56];
attr_base(119)->[60];
attr_base(120)->[59];
attr_base(121)->[41];
attr_base(122)->[42];
attr_base(123)->[43];
attr_base(131)->[0];
attr_base(132)->[0];
attr_base(133)->[0];
attr_base(134)->[0];
attr_base(135)->[0];
attr_base(136)->[0];
attr_base(137)->[0];
attr_base(138)->[0];
attr_base(139)->[0];
attr_base(140)->[0];
attr_base(141)->[0];
attr_base(142)->[0];
attr_base(143)->[0];
attr_base(_)->0.