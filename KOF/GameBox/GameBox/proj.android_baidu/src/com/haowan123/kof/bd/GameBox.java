/****************************************************************************
 Copyright (c) 2010-2012 cocos2d-x.org
 
 http://www.cocos2d-x.org
 
 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:
 
 The above copyright notice and this permission notice shall be included in
 all copies or substantial portions of the Software.
 
 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 THE SOFTWARE.
 ****************************************************************************/
package com.haowan123.kof.bd;

import java.util.UUID;

import org.cocos2dx.lib.Cocos2dxActivity;

import com.duoku.platform.DkPlatform;
import com.duoku.platform.DkProCallbackListener.OnExitChargeCenterListener;
import com.duoku.platform.entry.DkBaseUserInfo;
import com.ptola.GameApp;
import com.ptola.GameUUID;
import com.ptola.GameVideoHandler;
import com.ptola.GameWebViewHandler;
//import com.wws.sdk.WwsLoginActivity;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.util.Log;
import android.view.KeyEvent;
import android.view.ViewGroup;
import android.view.WindowManager;
import android.widget.TextView;
import android.widget.Toast;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import com.duoku.platform.DkProCallbackListener;
import com.haowan123.kof.bd.R;

public class GameBox extends Cocos2dxActivity implements OnClickListener
{
	public static Activity getCurrentActivity()
	{
		return m_ctxActivity;
	}
    
	public static GameWebViewHandler getHandler()
	{
		return m_handler;
	}
    
	public static GameVideoHandler getVideoHandler()
	{
		return m_videoHandler;
	}
    
	// 退出支付中心事件Listener
	private static OnExitChargeCenterListener mOnExitChargeCenterListener;
    
	protected void onCreate(Bundle savedInstanceState)
	{
		m_ctxActivity = this;
		getWindow().setFlags(WindowManager.LayoutParams.FLAG_KEEP_SCREEN_ON, WindowManager.LayoutParams.FLAG_KEEP_SCREEN_ON);
		super.onCreate(savedInstanceState);
		m_handler = new GameWebViewHandler();
        
		//视频播放
		m_videoHandler = new GameVideoHandler();
		ViewGroup group = (ViewGroup)getWindow().getDecorView();
		m_videoHandler.setViewGroup(group);
        
		mOnExitChargeCenterListener = new OnExitChargeCenterListener() {
			// 此处的orderid是调用充值接口时开发者传入的，原样返回
			@Override
			public void doOrderCheck(boolean needcheck, String orderid) {
				// TODO Auto-generated method stub
				Log.d("test", "orderid == " + orderid);
				if(needcheck) {
					Toast.makeText(GameBox.this, "退出充值中心,此时应去查询订单:" + orderid  + "的状态！", Toast.LENGTH_LONG).show();
				}else {
					Toast.makeText(GameBox.this, "无需查询订单状态！", Toast.LENGTH_LONG).show();
				}
			}
		};
		// 设置注销回调
		DkPlatform.getInstance().dkSetOnUserLogoutListener(new DkProCallbackListener.OnUserLogoutLister() {
			@Override
			public void onUserLogout() {
				// TODO Auto-generated method stub
				Intent i = GameBox.this.getPackageManager().getLaunchIntentForPackage(GameBox.this.getPackageName());
				i.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
				GameBox.this.startActivity(i);
				
				String sessionId = DkPlatform.getInstance().dkGetSessionId();
				String uid = DkPlatform.getInstance().dkGetLoginUid();
			}
		});
	}
	
	private long mExitTime;
	private void confirmExit()
	{
		AlertDialog.Builder confirmDialog = new AlertDialog.Builder(this);
		confirmDialog.setTitle("退出");
		confirmDialog.setMessage("你确定要退出拳皇咆哮?");
		confirmDialog.setPositiveButton("确定", new DialogInterface.OnClickListener() {
			@Override
			public void onClick(DialogInterface dialog, int which) {
				// TODO Auto-generated method stub
				//nativeClose();
				new GameApp().nativeClose();
			}
		});
		confirmDialog.setNegativeButton("取消", new DialogInterface.OnClickListener() {
			@Override
			public void onClick(DialogInterface dialog, int which) {
				// TODO Auto-generated method stub
			}
		});
		confirmDialog.show();
	}
    
	//public native void nativeClose();
	
	public boolean dispatchKeyEvent(KeyEvent event)
	{
		if( event.getKeyCode() == KeyEvent.KEYCODE_BACK
           && event.getAction() == KeyEvent.ACTION_UP )
		{
			if(System.currentTimeMillis() - mExitTime > 2000)
			{
				Toast.makeText(this, "再按一次返回键退出拳皇咆哮", Toast.LENGTH_SHORT).show();
				mExitTime = System.currentTimeMillis();
			}
			else
			{
				confirmExit();
			}
			return true;
		}
		return super.dispatchKeyEvent(event);
	}
	
    static
    {
        System.loadLibrary("game");
    }
    
    
    
	@Override
	protected void onResume() {
		super.onResume();
	}
    
	@Override
	public void onClick(View v) {
        
	}
    
	/**
	 * 进入代币充值界面
	 */
	private static void recharge(String amount, String cpInfo) {
		UUID guid = UUID.randomUUID();
		DkBaseUserInfo baseInfo = DkPlatform.getInstance().dkGetMyBaseInfo(m_ctxActivity);
		String cooOrderSerial = guid.toString();
		cooOrderSerial = cooOrderSerial.replace("-", "".trim());
        
		int amountInt = Integer.valueOf(amount);
		int exchangeRatio = 10;
		
		//参数说明
		//参数一：进入支付中心的当前activity
		//参数二：兑换比例，如1酷币兑换100游戏币，则兑换比例为100
		//参数三：游戏币名称，如金币、符石
		//参数四：cp生成的订单号，充值结束后，多酷服务器会通知业务服务器该订单号及充值结果
		//参数五：定额支付消费金额（人民币），如购买1元的物品或者游戏币，则amount为1；若不需要定额支付则传入0
		//参数六：支付描述，cp可以在此处自定义字段完成自己的需求，若不需要传入空串，请勿传null
		//参数七：退出支付中心回调接口，cp收到该通知后可根据参数四去自家服务器查询订单是否成功
		Log.d("test", "cooOrderSerial:" + cooOrderSerial);
		Log.d("test", "cpInfo+baseInfo:" + cpInfo+baseInfo.getUserName());
		Log.d("test", "UUID:" + guid.toString());
		
		// 此处订单号cooOrderSerial在退出支付中心时，将原样返回给开发者
		DkPlatform.getInstance().dkUniPayForCoin(m_ctxActivity, exchangeRatio, "钻石", cooOrderSerial, amountInt, cpInfo+baseInfo.getUserName(), mOnExitChargeCenterListener);
	}
	
    public static void applyRecharge(int money, String cpInfo)
    {
    	
    	recharge(String.valueOf(money), cpInfo);
    }
    
    public static void dkAccountManager()
    {
    	//账户管理
    	DkPlatform.getInstance().dkAccountManager(m_ctxActivity);
    }
    
    
	@Override
	protected void onDestroy() {
		// TODO Auto-generated method stub
		super.onDestroy();
		DkPlatform.getInstance().dkReleaseResource(this);
	}
    
    private static Activity m_ctxActivity;
	private static GameWebViewHandler m_handler = new GameWebViewHandler();
	private static GameVideoHandler m_videoHandler = new GameVideoHandler();
}