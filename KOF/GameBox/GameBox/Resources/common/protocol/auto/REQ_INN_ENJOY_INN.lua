
require "common/RequestMessage"

-- [31110]请求客栈 -- 客栈 

REQ_INN_ENJOY_INN = class(CRequestMessage,function(self)
	self.MsgID = Protocol.REQ_INN_ENJOY_INN
	self:init(1 ,{ 31120,700 })
end)
