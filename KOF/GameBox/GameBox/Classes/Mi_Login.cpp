//
//  Mi_Login.cpp
//  GameBox
//
//  Created by Mac on 13-10-22.
//
//

#include "Mi_Login.h"


//CMi_Login
#if (AGENT_SDK_CODE == 7)

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

CMi_Login::CMi_Login()
{
    
}

bool CMi_Login::init()
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
    
    
//    if( !CCLayer::init() )
//        return false;
//    
//    CCSize visibleSize = CCDirector::sharedDirector()->getVisibleSize();
//    CCSprite *pBackground = CCSprite::create("Loading/loading2_underframe.jpg");
//    pBackground->setPosition(ccp(visibleSize.width/2, visibleSize.height/2));
//    addChild(pBackground);
//    
//    CCSize portaitDeviceSize = CDevice::sharedDevice()->getScreenSize();
//    
//    m_pWebView = CWebView::create();
//    m_pWebView->setOverrideCallBack(this, (LP_OVERRIDE_WEBVIEW_URL_CALLBACK)(&CMi_Login::shouldOverrideUrl));
//    
//    m_pWebView->setPreferredSize(CCSizeMake(portaitDeviceSize.width,portaitDeviceSize.height));
//
//    char szUrl[1024] = {0};
//    getUrl( szUrl, 1024);
//    m_pWebView->loadGet(szUrl);
//    addChild(m_pWebView);
//    return true;
}

CCScene *CMi_Login::scene()
{
    CCScene *pScene = CCScene::create();
    if( pScene != NULL )
    {
        CMi_Login *pLogin = CMi_Login::create();
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

void CMi_Login::getUrl(char *lpszUrl, size_t uLength)
{
    
}

bool CMi_Login::shouldOverrideUrl(const char *lpcszUrl)
{
    return true;
}

void CMi_Login::parseJsonResultData(const char *lpcszJsonData)
{
    
}

std::string CMi_Login::urlDecode(const std::string& strToDecode)
{
	return NULL;
}

void CMi_Login::onJJAPIResponsed(cocos2d::CCNode *pSender, void *pResponseData)
{
    
}

#endif