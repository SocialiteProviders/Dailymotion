<?php
namespace SocialiteProviders\Dailymotion;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DailymotionExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('dailymotion', __NAMESPACE__.'\Provider');
    }
}
