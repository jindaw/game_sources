-- 高架桥底(6张)
function _G.getMapData10156()
	return CBaseMapData(
			{ "Scene/m10112/m1001023.jpg","Scene/m10112/m1001024.jpg" }, -- 路径
			1, -- 地图类型
			10156, -- 地图id
			10, -- 格子宽度
			10, -- 格子高度
			3070, -- 格子宽数
			640, -- 格子高数
			{

			}, -- 可走
			{ "Scene/m10112/m1001023.jpg","Scene/m10112/m1001024.jpg","Scene/m10112/m1001023.jpg","Scene/m10112/m1001024.jpg","Scene/m10112/m1001023.jpg","Scene/m10112/m1001024.jpg" } , --地图块 
			3070, -- 地图宽度
			640, -- 地图高度
			512, -- 地图块宽度
			300 -- 可行高度
		) 
end