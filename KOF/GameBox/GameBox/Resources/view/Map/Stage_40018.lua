-- 中级训练2
function _G.getMapData40018()
	return CBaseMapData(
			{ "Scene/m10107/m1001012.jpg","Scene/m10107/m1001013.jpg","Scene/m10107/m1001014.jpg" }, -- 路径
			1, -- 地图类型
			40018, -- 地图id
			10, -- 格子宽度
			10, -- 格子高度
			1280, -- 格子宽数
			640, -- 格子高数
			{

			}, -- 可走
			{ "Scene/m10107/m1001012.jpg","Scene/m10107/m1001013.jpg","Scene/m10107/m1001014.jpg","Scene/m10107/m1001012.jpg" } , --地图块 
			1280, -- 地图宽度
			640, -- 地图高度
			512, -- 地图块宽度
			280 -- 可行高度
		) 
end