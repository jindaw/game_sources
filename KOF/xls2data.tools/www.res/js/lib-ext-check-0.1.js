var Check = 
{
	// JavaScript Document
	//--------
	// 检查当前浏览器是否为Netscape
	//--------
	isNetscape:function ()
	{
		app=navigator.appName.substring(0,1);
		if (app=='N') return true;
		else {return false;}
	},
	
	//--------
	// 检查当前浏览器是否为IE
	//--------
	isIE:function()
	{
		var userAgent = navigator.userAgent.toLowerCase();
		return (/msie/.test(userAgent) && !/opera/.test(userAgent));
	},
	
	//--------
	// 保存当前Form表单（仅适用于IE浏览器）
	//--------
	formSaveCheck:function(fileName)
	{
		if(this.isNetscape())
		{
			alert("Sorry, these function is not supported");
		}else
		{ 
			document.execCommand('SaveAs',null,fileName);
		}
	},
	
	//--------
	// 校验数据的合法性
	//--------
	isValidReg:function ( chars)
	{
		var re=/<|>|\[|\]|\{|\}|‘|’|※|○|●|◎|§|△|▲|☆|★|◇|◆|□|▼|㊣|﹋|⊕|⊙|〒|ㄅ|ㄆ|ㄇ|ㄈ|ㄉ|ㄊ|ㄋ|ㄌ|ㄍ|ㄎ|ㄏ|ㄐ|ㄑ|ㄒ|ㄓ|ㄔ|ㄕ|ㄖ|ㄗ|ㄘ|ㄙ|ㄚ|ㄛ|ㄜ|ㄝ|ㄞ|ㄟ|ㄢ|ㄣ|ㄤ|ㄥ|ㄦ|ㄧ|ㄨ|ㄩ|■|▄|▆|\*|@|#|\^|\\/;
		if (re.test( chars) == true)
		{
			return false;
		}else
		{
			return true;
		}	
	},
	//--------
	// 检查数据的长度是否合法
	//--------
	isValidLength:function (chars, len)
	{
		if (chars.length > len) 
		{
			return false;
		}
		return true;
	},
	
	//--------
	// 校验URL的合法性
	//--------
	isValidURL:function ( chars ) 
	{
		//var re=/^([hH][tT]{2}[pP]:\/\/|[hH][tT]{2}[pP][sS]:\/\/)((((\w+(-*\w*)+)\.)+((com)|(net)|(edu)|(gov)|(org)|(biz)|(aero)|(coop)|(info)|(name)|(pro)|(museum))(\.([a-z]{2}))?)|((\w+(-*\w*)+)\.(cn)))$/;
		var re=/^([hH][tT]{2}[pP]:\/\/|[hH][tT]{2}[pP][sS]:\/\/)(\S+\.\S+)$/;
		//var re=/^([hH][tT]{2}[pP]:\/\/|[hH][tT]{2}[pP][sS]:\/\/)(((((\w+(-*\w*)+)\.)+((com)|(net)|(edu)|(gov)|(org)|(biz)|(aero)|(coop)|(info)|(name)|(pro)|(museum)|(cn)|(tv)|(hk))(\.([a-z]{2}))?)|((\w+(-*\w*)+)\.(cn)))((\/|\?)\S*)*)$/;
		if (!isNULL(chars)) {
			chars = jsTrim(chars);
			if (chars.match(re) == null)
				return false;
			else
				return true;
		}
		return false;
	},
	
	//--------
	// 校验数字的合法性
	//--------
	isValidDecimal:function ( chars ) 
	{
		var re=/^\d*\.?\d{1,2}$/;
		if (chars.match(re) == null)
			return false;
		else
			return true;
	},
	
	//--------
	// 校验数字的合法性
	//--------
	isNumber:function ( chars )
	{
		var re=/^\d*$/;
		if (chars.match(re) == null)
			return false;
		else
			return true;
	},
	
	//--------
	// 校验邮编的合法性
	//--------
	isValidPost:function ( chars ) 
	{
		var re=/^\d{6}$/;
		if (chars.match(re) == null)
			return false;
		else
			return true;
	},
	
	//--------
	// 去掉数据的首尾空字符
	//--------
	jsTrim:function (value){
	  return value.replace(/(^\s*)|(\s*$)/g,"");
	},
	
	//--------
	// 校验数据是否为空（当数据为空字符时也为NULL）
	//--------
	isNULL:function ( chars ) {
		if (chars == null)
			return true;
		if (jsTrim(chars).length==0)
			return true;
		return false;
	},
	//--------
	// 校验Email的合法性
	//--------
	checkEmail:function  (fieldName, bMsg) 
	{
		var emailStr = fieldName.value;
	
		var emailPat=/^(.+)@(.+)$/;
		var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]";
		var validChars="\[^\\s" + specialChars + "\]";
		var quotedUser="(\"[^\"]*\")";
		var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
		var atom=validChars + '+';
		var word="(" + atom + "|" + quotedUser + ")";
		var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
		var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
	
		var matchArray=emailStr.match(emailPat);
		if (matchArray==null) 
		{
			if (bMsg) alert("Email address seems incorrect (check @ and .'s)");
			return false;
		}
		var user=matchArray[1];
		var domain=matchArray[2];
	
		// See if "user" is valid 
		if (user.match(userPat)==null) 
		{
			if (bMsg) alert("The Email address seems incorrect.");
			// fieldName.focus();
			return false;
		}
	
		/* if the e-mail address is at an IP address (as opposed to a symbolic
		   host name) make sure the IP address is valid. */
		var IPArray=domain.match(ipDomainPat);
		if (IPArray!=null) 
		{
			for (var i=1;i<=4;i++)
			{
				if (IPArray[i]>255)
				{
					if (bMsg) alert("Destination IP address is invalid!");
					return false;
				}
			}
			return true;
		}
	
		// Domain is symbolic name
		var domainArray=domain.match(domainPat);
		if (domainArray==null) 
		{
			if (bMsg) alert("The domain name doesn't seem to be valid.");
			return false;
		}
	
		/* domain name seems valid, but now make sure that it ends in a
		three-letter word (like com, edu, gov) or a two-letter word,
		representing country (uk, nl), and that there's a hostname preceding 
		the domain or country. */
	
		var atomPat=new RegExp(atom,"g");
		var domArr=domain.match(atomPat);
		var len=domArr.length;
		if (domArr[domArr.length-1].length<2 || domArr[domArr.length-1].length>3) 
		{
			// the address must end in a two letter or three letter word.
			if (bMsg) alert("The address must end in a three-letter domain, or two letter country.");
			return false;
		}
	
		// Make sure there's a host name preceding the domain.
		if (len<2)
		{
			if (bMsg) alert("This address is missing a hostname!");
			return false;
		}
	
		// If we've got this far, everything's valid!
		return true;
	},
	
	//--------
	// 判断是否为闰年
	//--------
	isLeapYear:function (year){
	  if (year % 4 != 0)
		return false;
	  if (year % 400 == 0)
		return true;
	  if (year % 100 == 0)
		return false;
	  return true;
	},
	
	//--------
	// 校验日期的合法性
	//--------
	validateDate:function (day,month,year)
	{
		if ((day<=0)||(month<=0)||(year<=0))
			return false;
			
		if ((month>=1)&&(month<=12)) {
			if (month == 2) {
				if (isLeapYear(year)) {
					if (day<=29) 
						return true;
				} else {
					if (day<=28)
						return true;
					else
						return false;
				}
			} else if ((month==4)||(month==6)||(month==9)||(month==11)) {
				if (day<=30)
					return true;
				else
					return false;
			} else {
				if (day<=31)
					return true;
				else
					return false;
			}
		}
	
		return false;
	},
	
	//--------
	// 判断数据是否包含都是Single Byte
	//--------
	isSingleByteString:function (str)
	{
	   var rc = true;
	   var j = 0, i = 0;
	   for (i=0; i<str.length; i++)
	   {
		 j = str.charCodeAt(i);
		 if (j>=128) 
		 {
		   rc = false;
		   break;
		 }
	   }
	   return rc;
	},
	checkDoubleSubmit:function ()
	{
		return submitEvent;
	},
	
	//--------
	// 弹出窗口
	// 参数：url-弹出窗口显示URL的内容
	//       w-弹出窗口的宽度
	//       h-弹出窗口的高度
	//       isCenter-控制弹出窗口是否在屏幕中央显示，值为true/false
	//       isResizable-控制弹出窗口是否可以改变大小，值为true/false
	//       isScroll-控制弹出窗口是否有滚动条，值为true/false
	//--------
	popupWindow:function (url,w,h,isCenter,isResizable,isScroll) 
	{
		if (isNULL(url)) return;
		var scrLeft = 0;
		var scrTop = 0;
		var scroll = "no";
		var resize = "no";
		if (isCenter) {
			scrLeft = (screen.width-w)/2;
			scrTop = (screen.height-h)/2;
		}
		if (isResizable) resize="yes";
		if (isScroll) scroll = "yes";
		window.open(url, 'popupWindow', 'height='+h+',width='+w+',top='+scrTop+',left='+scrLeft+',toolbar=no,menubar=no,scrollbars='+scroll+',resizable='+resize+',location=no,status=no');
	},
	
	//--------
	// 弹出窗口
	// 参数：url-弹出窗口显示URL的内容
	//       w-弹出窗口的宽度
	//       h-弹出窗口的高度
	//       isCenter-控制弹出窗口是否在屏幕中央显示，值为true/false
	//       isResizable-控制弹出窗口是否可以改变大小，值为true/false
	//       isModal-控制弹出窗口是否为模式或非模式对话框，值为ture/false
	//--------
	popupModalWindow:function (url,w,h,isCenter,isResizable,isModal) 
	{
		if (isNULL(url)) return;
		var scrLeft = 0;
		var scrTop = 0;
		var resize = "no";
		var cnt = "no";
		if (isCenter) 
		{
			cnt="yes";
			scrLeft = (screen.width-w)/2;
			scrTop = (screen.height-h)/2;
		}
		if (isResizable) resize="yes";
		if (isModal)
			window.showModalDialog(url, 'popupWindow', 'dialogWidth:'+w+'px;dialogHeight:'+h+'px;dialogLeft:'+scrLeft+'px;dialogTop:'+scrTop+'px;center:'+cnt+';help:no;resizable:'+resize+';status:no');
		else
			window.showModelessDialog(url, 'popupWindow', 'dialogWidth:'+w+'px;dialogHeight:'+h+'px;dialogLeft:'+scrLeft+'px;dialogTop:'+scrTop+'px;center:'+cnt+';help:no;resizable:'+resize+';status:no');
	},
	
	//--------
	// 弹出窗口
	// 参数：url-弹出窗口显示URL的内容
	//       w-弹出窗口的宽度
	//       h-弹出窗口的高度
	//       isCenter-控制弹出窗口是否在屏幕中央显示，值为true/false
	//       isResizable-控制弹出窗口是否可以改变大小，值为true/false
	//       isScroll-控制弹出窗口是否有滚动条，值为true/false
	//--------
	openWindowCenter:function (urll,w,h)
	{
		var top=(window.screen.height-h)/2;
		var left=(window.screen.width-w)/2;
		var param='toolbar=no,menubar=no,scrollbars=yes,resizable=no,location=no, status=no,top=';
		param=param+top;
		param=param+',left=';
		param=param+left;
		param=param+',height='+h;
		param=param+',width='+w;
		var w=window.open (urll,"",param);
		if(w!=null && typeof(w)!="undefined")
		{
			w.focus();
		}
	},

	//--------
	//checkbox全选
	//参数：field-需要操作的对象
	//--------
	checkAll:function (field) {
		if(field!=null){
			for (i = 0; i < field.length; i++) {
				field[i].checked = true; 
			}
		}
	},

	//--------
	//checkbox全取消
	//参数：field-需要操作的对象
	//--------
	uncheckAll:function (field) 
	{
		if(field!=null)
		{
			for (i = 0; i < field.length; i++) 
			{
				field[i].checked = false; 
			}
		}
	}

};
