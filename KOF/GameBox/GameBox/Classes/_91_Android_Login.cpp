//
//  _91_Android_Login.cpp
//  GameBox
//
//  Created by minfei xu on 13-11-28.
//
//

#include "_91_Android_Login.h"

//CMi_Login
#if (AGENT_SDK_CODE == 9)

#include "Device.h"
#include "CCCrypto.h"
#include "MD5Crypto.h"
#include "DateTime.h"
#include "json.h"
#include "Application.h"
#include "LoginHttpApi.h"
#include "cocos-ext.h"
#include "AWebView.h"

#include "RechargeScene.h"

#include "UserCache.h"
#include "ptola.h"


using namespace ptola;
using namespace cocos2d::extension;
using namespace Json;

C91Android_Login::C91Android_Login()
{
    
}

bool C91Android_Login::init()
{
    
    if( !CCLayer::init() )
        return false;
    
    CCSize visibleSize = CCDirector::sharedDirector()->getVisibleSize();
    CCSprite *pBackground = CCSprite::create("Loading/loading2_underframe.jpg");
    pBackground->setPosition(ccp(visibleSize.width/2, visibleSize.height/2));
    addChild(pBackground);
    
    
    const char *_account = CUserCache::sharedUserCache()->getObject("userName");
    CCLOG("accountName = %s", _account);
    CDateTime nowTime;
    int nLocalTime          = nowTime.getTotalSeconds();
    char szLocalTime[32]    = {0};
    sprintf(szLocalTime, "%d", nLocalTime);
    
    
    std::string strSessionId = CCUserDefault::sharedUserDefault()->getStringForKey("sid", "");
    const char *lpcszSessionId  = strSessionId.c_str();
    
    CDefaultLoginBehavior *pSender = new CDefaultLoginBehavior;
    pSender->autorelease();
    
    CLoginHttpApi::setInternalVerify(true);
    
    CLoginHttpApi::httpVerify( CID_w_217, CWebView::urlEncode(_account), CDevice::sharedDevice()->getMAC(), CApplication::sharedApplication()->getBundleVersion(),
                              "Android", SDK_SOURCE_FROM, SDK_SOURCE_SUB_FROM, szLocalTime,
                              PRIVATEKEY_W_217, lpcszSessionId, pSender, callfuncND_selector(CDefaultLoginBehavior::defaultHttpVerify) );
    
    return true;
}

CCScene *C91Android_Login::scene()
{
    CCScene *pScene = CCScene::create();
    if( pScene != NULL )
    {
        C91Android_Login *pLogin = C91Android_Login::create();
        if( pLogin != NULL )
        {
            pScene->addChild(pLogin);
        }
        else
        {
            CC_SAFE_DELETE(pScene);
        }
    }
    return pScene;
}

void C91Android_Login::getUrl(char *lpszUrl, size_t uLength)
{
    
}

bool C91Android_Login::shouldOverrideUrl(const char *lpcszUrl)
{
    return true;
}

void C91Android_Login::parseJsonResultData(const char *lpcszJsonData)
{
    
}

std::string C91Android_Login::urlDecode(const std::string& strToDecode)
{
	return NULL;
}

void C91Android_Login::onJJAPIResponsed(cocos2d::CCNode *pSender, void *pResponseData)
{
    
}

#endif