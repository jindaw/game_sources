
require "common/AcknowledgementMessage"

-- [39585]通关信息块 -- 取经之路 

ACK_PILROAD_OVER_DATA = class(CAcknowledgementMessage,function(self)
	self.MsgID = Protocol.ACK_PILROAD_OVER_DATA
	self:init()
end)

-- {玩家姓名}
function ACK_PILROAD_OVER_DATA.getUname(self)
	return self.uname
end

-- {}
function ACK_PILROAD_OVER_DATA.getCount(self)
	return self.count
end

-- {物品信息块}
function ACK_PILROAD_OVER_DATA.getMsgGood(self)
	return self.msg_good
end
