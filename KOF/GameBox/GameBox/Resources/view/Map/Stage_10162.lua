-- 露天赛场(6张)
function _G.getMapData10162()
	return CBaseMapData(
			{ "Scene/m10118/m1001037.jpg","Scene/m10118/m1001038.jpg" }, -- 路径
			1, -- 地图类型
			10162, -- 地图id
			10, -- 格子宽度
			10, -- 格子高度
			3070, -- 格子宽数
			640, -- 格子高数
			{

			}, -- 可走
			{ "Scene/m10118/m1001037.jpg","Scene/m10118/m1001038.jpg","Scene/m10118/m1001037.jpg","Scene/m10118/m1001038.jpg","Scene/m10118/m1001037.jpg","Scene/m10118/m1001038.jpg" } , --地图块 
			3070, -- 地图宽度
			640, -- 地图高度
			512, -- 地图块宽度
			295 -- 可行高度
		) 
end