-- 东京
function _G.getMapData10001()
	return CBaseMapData(
			{ "Scene/m10001/m1000101.jpg","Scene/m10001/m1000102.jpg","Scene/m10001/m1000103.jpg","Scene/m10001/m1000104.jpg","Scene/m10001/m1000105.jpg" }, -- 路径
			1, -- 地图类型
			10001, -- 地图id
			10, -- 格子宽度
			10, -- 格子高度
			2560, -- 格子宽数
			640, -- 格子高数
			{

			}, -- 可走
			{ "Scene/m10001/m1000101.jpg","Scene/m10001/m1000102.jpg","Scene/m10001/m1000103.jpg","Scene/m10001/m1000104.jpg","Scene/m10001/m1000105.jpg" } , --地图块 
			2560, -- 地图宽度
			640, -- 地图高度
			512, -- 地图块宽度
			260 -- 可行高度
		) 
end