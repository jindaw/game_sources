<?php
/**********************************************************************************
 * 场景相关的
 ********************************************************************************** */

$GLOBALS['scene']['country'] = \funs\tools\php_data_read('scene','country');
$GLOBALS['scene']['city']	 = \funs\tools\php_data_read('scene','city');
$GLOBALS['scene']['scene']	 = \funs\tools\php_data_read('scene','scene');

$GLOBALS['scene']['type']    = array(
	1 => '城镇[1]',
	2 => '普通副本[2]',
	3 => '精英副本[3]',
	4 => '取经之路[4]',
	5 => '世界BOSS[5]',
	6 => '帮派战[6]',
	//  1:城镇  2:普通副本  3:精英副本 4:取经之路  5:世界BOSS 6:帮派战
);
$GLOBALS['scene']['tile']      = array(
	0 => '不可走',
	1 => '可行' ,
	2 => '半透区' ,
	3 => '安全区',
);
$GLOBALS['scene']['material_type']	= array(
	1  => '横版地图(1)' ,
	2  => '45角地图(2)' ,
	3  => '取经之路(3)' ,
	4  => '远景(4)',
);
$GLOBALS['scene']['copy_type']	= array(
	1 => '主线副本(1)',
	2 => '精英副本(2)',
	3 => '战役(3)',
	4 => '活动副本(4)',
);
$GLOBALS['scene']['copy_difficulty']	= array(
	1 => '普通(1)',
	2 => '难度(2)',
);
/*  monster */
$GLOBALS['scene']['monster_type']=array(
	1=>'普通怪',
	2=>'采集怪',
);
$GLOBALS['scene']['monster_share']=array(
	0=>'不共享(独享)',
	1=>'共享',
);
$GLOBALS['scene']['monster_attack_type']=array(
	1=>'力量',
	2=>'灵力',
);
$GLOBALS['scene']['monster_attack_distance']=array(
	0=>'近程攻击',
	1=>'远程攻击',
);
/*********************************************************************************
 * NPC相关的
********************************************************************************* */
$GLOBALS['scene']['npc']	 	 = \funs\tools\php_data_read('scene','npc');
$GLOBALS['scene']['npc_type']	 = \funs\tools\php_data_read('scene','npc_type');
$GLOBALS['scene']['npc_funs']	 = \funs\tools\php_data_read('scene','npc_funs');
//$GLOBALS['npc']['team']		 = funs\tools\php_data_read('npc','team');
/*********************************************************************************
 * 技能相关的
 ********************************************************************************* */
$GLOBALS['skill']['type']      = array( 
	1 => '被动', 
	2 => '主动',
);
$GLOBALS['skill']['distance']  = array( 
	0 => '近程', 
	1 => '远程',
);
$GLOBALS['skill']['range']     = array( 
	0 => '单体' ,
	1 => '列(身后) ',
	2 => '列(前后) ',
	3 => '行(左右)',
	4 => '十字型',
	5 => '四周(所有)',
);

/*********************************************************************************
 * 物品相关的
********************************************************************************* */
$GLOBALS['goods']['type']     = \funs\tools\php_data_read('goods','goods_category_type');
$GLOBALS['goods']['type_sub'] = \funs\tools\php_data_read('goods','goods_category_type_sub');


$GLOBALS['goods']['color']    = array( 
	1 => array('#666','白色',1),
	2 => array('#090','绿色',2),
	3 => array('#009','蓝色',3),
	4 => array('#C0F','紫色',4),
	5 => array('#FF0','金色',5),
	6 => array('#F90','橙色',6),
	7 => array('#F00','红色',7),
);

foreach ($GLOBALS['goods']['color'] as $k => $v)
{
	$GLOBALS['goods']['name_color'][$k] = $v[1];
}

$GLOBALS['goods']['sex']     		= array( 0 => '不限性别', 1 => '女生', 2 => '男生');
$GLOBALS['goods']['pro']     		= array( 0 => '所有职业(0)', 1 => '战灵' , 2 => '翎羽' , 3=> '天机',4=> '云狂',5=> '逍遥','[]' => '不限职业([])', );
$GLOBALS['goods']['streng']  		= array('0'=>'强化0级','1'=>'1级','2'=>'2级','3'=>'3级','4'=>'4级','5'=>'5级','6'=>'6级','7'=>'7级','8'=>'8级','9'=>'9级',
											 '10'=>'10级','11'=>'11级','12'=>'12级','13'=>'13级','14'=>'14级','15'=>'15级','16'=>'16级','17'=>'17级','18'=>'18级','19'=>'19级',
											 '20'=>'20级','21'=>'21级','22'=>'22级','23'=>'23级','24'=>'24级','25'=>'25级','26'=>'26级','27'=>'27级','28'=>'28级','29'=>'29级',
											 '30'=>'30级','31'=>'31级','32'=>'32级','33'=>'33级','34'=>'34级','35'=>'35级','36'=>'36级','37'=>'37级','38'=>'38级','39'=>'39级',
											 '40'=>'40级','41'=>'41级','42'=>'42级','43'=>'43级','44'=>'44级','45'=>'45级','46'=>'46级','47'=>'47级','48'=>'48级','49'=>'49级',
											 '50'=>'50级','51'=>'51级','52'=>'52级','53'=>'53级','54'=>'54级','55'=>'55级','56'=>'56级','57'=>'57级','58'=>'58级','59'=>'59级',
											 '60'=>'60级','61'=>'61级','62'=>'62级','63'=>'63级','64'=>'64级','65'=>'65级','66'=>'66级','67'=>'67级','68'=>'68级','69'=>'69级',
											 '70'=>'70级','71'=>'71级','72'=>'72级','73'=>'73级','74'=>'74级','75'=>'75级','76'=>'76级','77'=>'77级','78'=>'78级','79'=>'79级',
											 '80'=>'80级','81'=>'81级','82'=>'82级','83'=>'83级','84'=>'84级','85'=>'85级','86'=>'86级','87'=>'87级','88'=>'88级','89'=>'89级',
											 '90'=>'90级','91'=>'91级','92'=>'92级','93'=>'93级','94'=>'94级','95'=>'95级','96'=>'96级','97'=>'97级','98'=>'98级','99'=>'99级',
											 '100'=>'100级','101'=>'101级','102'=>'102级','103'=>'103级','104'=>'104级','105'=>'105级','106'=>'106级','107'=>'107级','108'=>'108级','109'=>'109级',
											 '110'=>'110级','111'=>'111级','112'=>'112级','113'=>'113级','114'=>'114级','115'=>'115级','116'=>'116级','117'=>'117级','118'=>'118级','119'=>'119级',
											 '120'=>'120级','121'=>'121级','122'=>'122级','123'=>'123级','124'=>'124级','125'=>'125级','126'=>'126级','127'=>'127级','128'=>'128级','129'=>'129级',
											 '130'=>'130级','131'=>'131级','132'=>'132级','133'=>'133级','134'=>'134级','135'=>'135级','136'=>'136级','137'=>'137级','138'=>'138级','139'=>'139级',
											 '140'=>'140级','141'=>'141级','142'=>'142级','143'=>'143级','144'=>'144级','145'=>'145级','146'=>'146级','147'=>'147级','148'=>'148级','149'=>'149级',
											 '150'=>'150级','151'=>'151级','152'=>'152级','153'=>'153级','154'=>'154级','155'=>'155级','156'=>'156级','157'=>'157级','158'=>'158级','159'=>'159级',
											 '160'=>'160级','161'=>'161级','162'=>'162级','163'=>'163级','164'=>'164级','165'=>'165级','166'=>'166级','167'=>'167级','168'=>'168级','169'=>'169级',
											 '170'=>'170级','171'=>'171级','172'=>'172级','173'=>'173级','174'=>'174级','175'=>'175级','176'=>'176级','177'=>'177级','178'=>'178级','179'=>'179级',
											 '180'=>'180级','181'=>'181级','182'=>'182级','183'=>'183级','184'=>'184级','185'=>'185级','186'=>'186级','187'=>'187级','188'=>'188级','189'=>'189级',
											 '190'=>'190级','191'=>'191级','192'=>'192级','193'=>'193级','194'=>'194级','195'=>'195级','196'=>'196级','197'=>'197级','198'=>'198级','199'=>'199级',
											 '200'=>'200级');

$GLOBALS['goods']['expiry_type']  	= array( 0 => '不限时', 1 => '限时单位(秒)' , 2 => '限时单位(天)');
$GLOBALS['goods']['bind']  			= array( 0 => '不绑定', 1 => '绑定' );
/**
 * 货币类型
 */
$GLOBALS['goods']['currency']	 = array(
	0=>'请选择货币类型', 			// 0 CONST_GOODS_CURRENCY_BAG  			修改
	1=>'银元', 						// 1 CONST_GOODS_CURRENCY_GOLD 			修改
	//2=>'绑定金币(费除)', 		  	// 2 CONST_GOODS_CURRENCY_BIND_GOLD 	修改
	2=>'金元(人民币)', 	  	// 3 CONST_CURRENCY_RMB  			修改
	3=>'金元(绑定元宝)', 		// 4 CONST_CURRENCY_RMB_BIND  	修改
	//	5=>'仓库金币',		  		// 5 CONST_GOODS_CURRENCY_DEPOT_GOLD	修改
	4=>'声望', 			  			// 6 CONST_CURRENCY_RENOWN 		  	修改
	5=>'精力', 		  			// 7 CONST_CURRENCY_ENERGY 	 	修改
	6=>'真气',
	7=>'战功',
	8=>'紫色精魄', 					// 8 CONST_CURRENCY_SOUL_STAR 	 	修改
	9=>'金色精魄 ', 					// 9 CONST_CURRENCY_SOUL_VIGOUR 		修改
	10=>'橙色精魄', 					// 9 CONST_CURRENCY_SOUL_VIGOUR_PURPLE 		修改
	11=>'红色精魄', 					// 9 CONST_CURRENCY_SOUL_VIGOUR_GOLD 		修改
	12=>'战役-文谍', 					// 9 CONST_CURRENCY_SOUL_VIGOUR_ORANGE 		修改
	13=>'经验', 					// 9 CONST_CURRENCY_SOUL_VIGOUR_RED 		修改
	14=>'帮派贡献',						// 12	CONST_CURRENCY_FIGHT_ALLOW
	15=>'神器碎片',
	16=>'消费积分',  	
	17=>'体能',
	18=>'摇钱树经验'
);

/*********************************************************************************
 * 素材相关的
********************************************************************************* */
$GLOBALS['material']['skin'] 		= array(
	1 => '怪物/采集',
	2 => 'NPC/机器人',
	3 => '庞物',
	4 => '浮云/坐骑',
	5 => '武器',
	6 => '衣服',
	7 => '时装',
);
$GLOBALS['material']['sound']		= array(
	1=>'系统音效[1]',
	2=>'战斗(技能)音效[2]',
	3=>'地图背景音乐[3]',
	4=>'战斗背景音效[4]'
);
$GLOBALS['material']['skill_effect']  = array(
	1=>'施放技能/攻击方',
	2=>'被受技能/受击方',
	3=>'全屏效果/其它大面积',
	4=>'连继(如:射箭等轨道)效果',
	5=>'酝酿(如:蓄能等停顿)效果',
);
// $GLOBALS['material']['scene_effect']	= array(
// 	0  => '共用地图',
// 	1  => '沙阔界' ,
// 	2  => '火宙界' ,
// 	3  => '水源界',
// 	9  => '系统(传送点等)',
// );
/*** 
 * 素材 类型
 */
$GLOBALS['material']['standard_type'] 		= array(
		320  => '320 ios android',
		480  => '480 android',
		640  => '640 ios',
		720  => '720 android',
		768  => '768 ios pad android',
		1024 => '1024 ios pad android',
		'web' => 'web',
);





/**  可接状态 */
$GLOBALS['task']['accept']		= array(0=>'激活列表(隐)',1=>'可接列表',2=>'已接受列表');
/**  提交方式 */
$GLOBALS['task']['submit']		= array(0=>'NPC对话完成',1=>'直接完成');
/**  任务追踪弹出面板  */
$GLOBALS['task']['pop']		    = array(0=>'无弹出面板',
		2=>'封神台面板',
		3=>'财神系统面板',
		4=>'坐骑系统面板',
		5=>'声望系统面板',
		6=>'仙旅奇缘面板',
		7=>'角色系统面板',
		8=>'背包系统面板',
		9=>'商城',
);
 
/*********************************************************************************
 * 素材相关的
********************************************************************************* */
/**  任务类型 */
$GLOBALS['task']['type']		= array(1 =>'主线任务', 2=>'支线任务',
		10=>'日常任务',
		20=>'家族任务',21=>'师徒任务',22=>'夫妻任务',
		60=>'活动任务',
		99=>'其他任务');
/**  国家要求 */
$GLOBALS['task']['country'] 	= $GLOBALS['scene']['country'];
/**  性别要求 */
$GLOBALS['task']['sex']     	= $GLOBALS['goods']['sex'];
/**  职业要求 */
$GLOBALS['task']['pro']     	= $GLOBALS['goods']['pro'];
/**  状态 */
$GLOBALS['task']['state']		= array( 0 => '未激活',  1 =>'已激活',		2=>'可接受',  3=>'接受未完成',  4=>'完成未提交',  5=>'已提交');
/**  任务目标 */
$GLOBALS['task']['target']		= array( 1 => '对话类',
		2 =>'收集类(采集)',
		3=>'击杀怪物',
		4=>'击杀玩家',
		5=>'问答题',
		7=>'关卡/副本通关',
		6=>'其它');


$GLOBALS['task']['target_other']= array(1=> '其它-首次充值(值1:首充下限)',
		2=> '其它-加入阵营',
		3=> '其它-加入帮派',
		4=> '其它-装备打造',
		5=> '其它-装备强化(值1：强化次数)',
		6=> '其它-装备洗练(值1：洗练次数)',
		7=> '其它-通过关卡(值1：通过次数)',
		8=> '其它-培养宠物(值1：培养次数)',
		9=> '其它-招财(值1：招财次数)',
		10=> '其它-上香(值1：上香次数)',
		11=> '其它-提升声望等级',
		12=> '其他-三界杀(值1：挑战某BOSS)',
		14=> '其它-特殊道具(物品ID,场景ID,X,Y,容错值)',
		15=> '其它-道具使用(值1:物品ID)',
		17=> '其它-封神台(值1:挑战次数)',
		18=> '其它-消费元宝(值1:元宝数量)',
		19=> '其它-充值元宝(值1:充值数量)',
		20=> '其它-送伙伴(值1:伙伴ID)',
		21=> '其它-下载新资源包',);
	
/**  接任务要求属性ID(见常量： 玩家属性(更新/任务)地图广播) */
$GLOBALS['task']['accept_id']	= array(0=>'请选择，接受任务属性值要求',
		1=>'任务ID(完成某任务ID)',
		2=>'追加任务',
		7=>'VIP等级',
		41=>'士气',
		42=>'气血',
		50=>'物攻',
		51=>'物防',
		52=>'法攻',
		53=>'法防',
		54=>'速度',
		55=>'命中',
		56=>'躲避',
		57=>'暴击',
		58=>'抗暴',
		59=>'格挡',
		60=>'破击',
		61=>'合击',
		62=>'求援',
		63=>'伤害率',
		64=>'免伤率',
		71=>'要有配偶(此项值可不填)',
		81=>'称号',
		91=>'要有帮派(此项值可不填)',
		92=>'帮派-职位',
		111=>'有师徒关系(此项值可不填)[暂无效]');
/**  其他奖励属性ID(见常量： 玩家属性(更新/任务)地图广播) */
$GLOBALS['task']['ext_id']		= array( 
		0=>'请选择，其他奖励属性',
		41=>'士气',
		42=>'气血',
		50=>'物攻',
		51=>'物防',
		52=>'法攻',
		53=>'法防',
		54=>'速度',
		55=>'命中',
		56=>'躲避',
		57=>'暴击',
		58=>'抗暴',
		59=>'格挡',
		60=>'破击',
		61=>'合击',
		62=>'求援',
		63=>'伤害率',
		64=>'免伤率',
		4=>'声望', 			  			// 6 CONST_CURRENCY_RENOWN 		  	修改
		5=>'精力', 		  			// 7 CONST_CURRENCY_ENERGY 	 	修改
		6=>'真气',
		7=>'战功',                    
		81=>'称号-新加',
		92=>'帮派-职位');

/**  变身玩家属性变化(见常量： 玩家属性(更新/任务)地图广播) */
$GLOBALS['task']['shape_id']		= array( 0=>'请选择属性...',
		41=>'士气',
		42=>'气血',
		50=>'物攻',
		51=>'物防',
		52=>'法攻',
		53=>'法防',
		54=>'速度',
		55=>'命中' ,
		56=>'躲避',
		57=>'暴击',
		58=>'抗暴',
		59=>'格挡',
		60=>'破击',
		61=>'合击',
		62=>'求援',
		63=>'伤害率',
		64=>'免伤率');


