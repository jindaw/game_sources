-- 枫林深处
function _G.getMapData10101()
	return CBaseMapData(
			{ "Scene/m10101/m1001001.jpg","Scene/m10101/m1001002.jpg" }, -- 路径
			1, -- 地图类型
			10101, -- 地图id
			10, -- 格子宽度
			10, -- 格子高度
			1536, -- 格子宽数
			640, -- 格子高数
			{

			}, -- 可走
			{ "Scene/m10101/m1001001.jpg","Scene/m10101/m1001002.jpg","Scene/m10101/m1001001.jpg" } , --地图块 
			1536, -- 地图宽度
			640, -- 地图高度
			512, -- 地图块宽度
			600 -- 可行高度
		) 
end