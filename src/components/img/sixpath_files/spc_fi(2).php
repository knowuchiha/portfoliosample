var firstSpcFetch={"status":"OK","geo":"IN","deviceDetected":1,"fiViewerId":"08029b6573a5f2a466171a82f49af999","pageViewUniqueId":770582838724633,"datasource":"LIVE","warnings":[],"options":{"hb_analytics":true,"notHotDog":{"enabled":false,"selectors":[]},"siteLang":null,"campaignLimitations":{},"prependScript":"\n\nFI.options.eventTracking.trackScroll  = true;\nFI.options.UXMonitor = {enabled: true};\n\nFI.common.infra.setFIInterval(\n        function () {\n            if (!FI.state.currentLocation)\n            {\n                FI.state.currentLocation = window.location.toString();\n            }\n            if (window.location.toString() != FI.state.currentLocation)\n            {\n                FI.state.currentLocation = window.location.toString();\n                FI.g_clientManager.refresh();\n            }\n        }, 500, true, false);\n\n\/\/ Handle publisher's transition from wikia.com to fandom.com for Native units\nfiQuery(window).on('SPCReturned',function(){\n\tvar nativePlacementsArray = [];\n\tnativePlacementsArray = fiQuery.map(FI.g_clientManager.placementQueue, function(value, index) {\n    \tif (value.type == \"nativead\") return [value];\n\t});\n\n\t\/\/ IF have native placements >> \n\tif (nativePlacementsArray.length > 0) {\n\t\tfunction domainIsFandomDotCom() {\n\t\t\treturn window.location.origin.indexOf(\"fandom.com\") != -1;\n\t\t} \n\n\t\t\/\/ IF it is NOT wikia.com (if its wikia.com the default source name is good)\n\t\tif (domainIsFandomDotCom()){\n\t\t\t\/\/ Replace source name in banner content\n\t\t\tfiQuery.each(nativePlacementsArray, function(index,palcement) {\n\t\t\t\tFI.g_clientManager.placementQueue[palcement.id].creatives[0].bannerContent = FI.g_clientManager.placementQueue[palcement.id].creatives[0].bannerContent.replace(\"http:\/\/www.firstimpression.io\/wikiacom\/\",\"http:\/\/www.firstimpression.io\/fandomcom\/\");\n\t\t\t});\n\t\t}\n\t}\n\tFI.state.inContentSequenceCanLunch = false;\n});\nfiQuery(window).on('proceededToNextInSequence', function(e,$placement,lastInSeq) {\n    if (($placement == FI.g_clientManager.placementQueue[102660] || $placement == FI.g_clientManager.placementQueue[102661]) && lastInSeq){\n        FI.state.inContentSequenceCanLunch = true;\n    }\n});","eventTracking":{"trackingDomains":[{"host":"tracking1.firstimpression.io","type":"full"}],"cookiename":"fi_tracked2","probability":12,"trackScroll":1,"trackTimeOnPage":1},"accelerate":true,"disableDynamic":false,"visibilityTracking":{"enabled":true}},"sessionTracking":true,"GDPRApplies":false,"incognito":null,"placements":[{"id":106124,"width":728,"height":90,"event":"load","type":"bottomsticky","selectorType":"singular","selector":"body","includeTags":"","excludeTags":"","options":{"node":"div","animate":1,"capping":{"type":"session","impressions":1},"monitorUX":1,"safeFrame":0,"bottomOffset":0,"noCloseButton":0,"morestylesJSON":{},"earlyStopSearch":0,"trackVisibility":{"enabled":false,"visibilityTime":1000,"visibilityPercent":50},"onDemandPlacement":{"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"waterfall":[{"bannerId":34902},{"bannerId":40528},{"bannerId":34807},{"bannerId":34776},{"bannerId":52503},{"bannerId":63524},{"bannerId":64271}]},"cappingPreiodInDays":0,"placementLimitation":1,"shortAdjustmentLoop":0,"validationSelectorCheckOnce":0,"totalRenderedInstancesLimitation":0},"creatives":[{"id":34902,"cid":31,"isHeaderBidding":"","requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=34902&campaignid=31&zoneid=106124&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=fe547ccd57","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=34902__zoneid=106124__cb=fe547ccd57__oadest=","width":728,"height":90,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"filename":"","bannerContent":"<script domsafe com=\"a\">\r\nfiQuery({window}).on('placementVisibleComplete_{apd-id}',function(){\r\n\tFI.common.infra.setFIInterval(function(){ \r\n\t\tif(fiQuery('div#WikiaBarWrapper.hidden').length > 0)\r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','0px');\r\n\t\t    fiQuery('div.WikiaBarCollapseWrapper').css('bottom','25px');\r\n\t\t} else \r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','25px');\r\n\t\t}\r\n\t}, 300, true, false, {apd-zoneid}); \r\n});\r\n<\/script>\r\n\r\n<style com=\"b\">\r\nfooter.wds-global-footer {\r\n    padding-bottom: 90px !important\r\n}\r\ndiv.featured-video__player-container {\r\n    margin-bottom: 90px !important;\r\n}\r\ndiv#FIBottomStickyInner {\r\n  visibility: hidden!important;\r\n}\r\n<\/style>\r\n<ins class=\"adsbygoogle\" data-ad-client=\"ca-pub-3622156405313063\" style=\"display:inline-block;width:728px;height:90px\"  data-ad-slot=\"VsMEq4ryX9CBNmSaWfG6\"><\/ins>","contentType":"html","trackBiddingParams":1},{"id":40528,"cid":15,"isHeaderBidding":1,"requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=40528&campaignid=15&zoneid=106124&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=b1a7dc7dc0","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=40528__zoneid=106124__cb=b1a7dc7dc0__oadest=","width":728,"height":90,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"filename":"","bannerContent":"<script domsafe com=\"a\">\r\nfiQuery({window}).on('placementVisibleComplete_{apd-id}',function(){\r\n\tFI.common.infra.setFIInterval(function(){ \r\n\t\tif(fiQuery('div#WikiaBarWrapper.hidden').length > 0)\r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','0px');\r\n\t\t    fiQuery('div.WikiaBarCollapseWrapper').css('bottom','25px');\r\n\t\t} else \r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','25px');\r\n\t\t}\r\n\t}, 300, true, false, {apd-zoneid}); \r\n});\r\n<\/script>\r\n\r\n<style com=\"b\">\r\nfooter.wds-global-footer {\r\n    padding-bottom: 90px !important\r\n}\r\ndiv.featured-video__player-container {\r\n    margin-bottom: 90px !important;\r\n}\r\ndiv#FIBottomStickyInner {\r\n  visibility: hidden!important;\r\n}\r\n<\/style>\r\n<prebid data-bidder='criteo' data-params-zoneid='zoneId=1143741' data-params-pubid='publisherSubId=40528'><\/prebid>","contentType":"html","floorPrice":0.05},{"id":34807,"cid":12,"isHeaderBidding":1,"requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=34807&campaignid=12&zoneid=106124&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=7c8da0032b","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=34807__zoneid=106124__cb=7c8da0032b__oadest=","width":728,"height":90,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"safeFrame":1,"sandboxFrame":1,"filename":"","bannerContent":"<script domsafe com=\"a\">\r\nfiQuery({window}).on('placementVisibleComplete_{apd-id}',function(){\r\n\tFI.common.infra.setFIInterval(function(){ \r\n\t\tif(fiQuery('div#WikiaBarWrapper.hidden').length > 0)\r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','0px');\r\n\t\t    fiQuery('div.WikiaBarCollapseWrapper').css('bottom','25px');\r\n\t\t} else \r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','25px');\r\n\t\t}\r\n\t}, 300, true, false, {apd-zoneid}); \r\n});\r\n<\/script>\r\n\r\n<style com=\"b\">\r\nfooter.wds-global-footer {\r\n    padding-bottom: 90px !important\r\n}\r\ndiv.featured-video__player-container {\r\n    margin-bottom: 90px !important;\r\n}\r\ndiv#FIBottomStickyInner {\r\n  visibility: hidden!important;\r\n}\r\n<\/style>\r\n<!-- AOL HB tag v1.0 -->\n<prebid data-bidder='aol'\n    data-params-network='network=10297.1'\n    data-params-placement='placement=4645786'\n    data-params-bidfloor='bidFloor=0.05'>\n<\/prebid>","contentType":"html","trackBiddingParams":1,"floorPrice":0.05},{"id":34776,"cid":11,"isHeaderBidding":1,"requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=34776&campaignid=11&zoneid=106124&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=614f70bc08","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=34776__zoneid=106124__cb=614f70bc08__oadest=","width":728,"height":90,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"filename":"","bannerContent":"<script domsafe com=\"a\">\r\nfiQuery({window}).on('placementVisibleComplete_{apd-id}',function(){\r\n\tFI.common.infra.setFIInterval(function(){ \r\n\t\tif(fiQuery('div#WikiaBarWrapper.hidden').length > 0)\r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','0px');\r\n\t\t    fiQuery('div.WikiaBarCollapseWrapper').css('bottom','25px');\r\n\t\t} else \r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','25px');\r\n\t\t}\r\n\t}, 300, true, false, {apd-zoneid}); \r\n});\r\n<\/script>\r\n\r\n<style com=\"b\">\r\nfooter.wds-global-footer {\r\n    padding-bottom: 90px !important\r\n}\r\ndiv.featured-video__player-container {\r\n    margin-bottom: 90px !important;\r\n}\r\ndiv#FIBottomStickyInner {\r\n  visibility: hidden!important;\r\n}\r\n<\/style>\r\n<!-- OpenX tag v1.0 -->\n<prebid data-bidder='openx'\n    data-params-unit='unit=540113647'\n    data-params-deldomain='delDomain=firstimpression-d.openx.net'\n    data-params-customfloor='customFloor=0.05'>\n<\/prebid>","contentType":"html","trackBiddingParams":1,"floorPrice":0.05},{"id":52503,"cid":18,"isHeaderBidding":1,"requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=52503&campaignid=18&zoneid=106124&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=0f6c5e0eeb","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=52503__zoneid=106124__cb=0f6c5e0eeb__oadest=","width":728,"height":90,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"filename":"","bannerContent":"<script domsafe com=\"a\">\r\nfiQuery({window}).on('placementVisibleComplete_{apd-id}',function(){\r\n\tFI.common.infra.setFIInterval(function(){ \r\n\t\tif(fiQuery('div#WikiaBarWrapper.hidden').length > 0)\r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','0px');\r\n\t\t    fiQuery('div.WikiaBarCollapseWrapper').css('bottom','25px');\r\n\t\t} else \r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','25px');\r\n\t\t}\r\n\t}, 300, true, false, {apd-zoneid}); \r\n});\r\n<\/script>\r\n\r\n<style com=\"b\">\r\nfooter.wds-global-footer {\r\n    padding-bottom: 90px !important\r\n}\r\ndiv.featured-video__player-container {\r\n    margin-bottom: 90px !important;\r\n}\r\ndiv#FIBottomStickyInner {\r\n  visibility: hidden!important;\r\n}\r\n<\/style>\r\n<!-- Rubicon HB tag v 1.0 -->\n<prebid data-bidder='rubicon'\n   data-params-accountid='accountId=18438'\n   data-params-siteid='siteId=202928'\n   data-params-zoneid='zoneId=1077810'\n   data-params-inventory='{\"figroup\": [\"{function:('1077810_a71').split('_').pop()}\"]}'\n   data-params-floor='floor=0.05'>\n<\/prebid>","contentType":"html","trackBiddingParams":1,"floorPrice":0.05},{"id":63524,"cid":9,"isHeaderBidding":1,"requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=63524&campaignid=9&zoneid=106124&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=f12d10b60c","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=63524__zoneid=106124__cb=f12d10b60c__oadest=","width":728,"height":90,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"safeFrame":1,"sandboxFrame":1,"filename":"","bannerContent":"<script domsafe com=\"a\">\r\nfiQuery({window}).on('placementVisibleComplete_{apd-id}',function(){\r\n\tFI.common.infra.setFIInterval(function(){ \r\n\t\tif(fiQuery('div#WikiaBarWrapper.hidden').length > 0)\r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','0px');\r\n\t\t    fiQuery('div.WikiaBarCollapseWrapper').css('bottom','25px');\r\n\t\t} else \r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','25px');\r\n\t\t}\r\n\t}, 300, true, false, {apd-zoneid}); \r\n});\r\n<\/script>\r\n\r\n<style com=\"b\">\r\nfooter.wds-global-footer {\r\n    padding-bottom: 90px !important\r\n}\r\ndiv.featured-video__player-container {\r\n    margin-bottom: 90px !important;\r\n}\r\ndiv#FIBottomStickyInner {\r\n  visibility: hidden!important;\r\n}\r\n<\/style>\r\n<!-- Appnexus HB tag v 1.0 -->\n<prebid data-bidder='appnexus'\n   data-params-placementId='placementId=16137388'\n   data-params-reserve='reserve=0.05'\n   data-params-position='position={function:FI.g_clientManager.getPlacement(106124).getFoldPosition()}'\n   data-params-pubClick='pubClick=https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=63524__zoneid=106124__cb=f12d10b60c__oadest='\n   data-params-user='user={function:JSON.stringify({dnt:!FI.state.cmp.personalizedAds,externalUid:FI.state.fiViewerId})}'\n   >\n<\/prebid>","contentType":"html","trackBiddingParams":1,"floorPrice":0.05},{"id":64271,"cid":13,"isHeaderBidding":1,"requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=64271&campaignid=13&zoneid=106124&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=78a1af9797","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=64271__zoneid=106124__cb=78a1af9797__oadest=","width":728,"height":90,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"safeFrame":1,"filename":"","bannerContent":"<script domsafe com=\"a\">\r\nfiQuery({window}).on('placementVisibleComplete_{apd-id}',function(){\r\n\tFI.common.infra.setFIInterval(function(){ \r\n\t\tif(fiQuery('div#WikiaBarWrapper.hidden').length > 0)\r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','0px');\r\n\t\t    fiQuery('div.WikiaBarCollapseWrapper').css('bottom','25px');\r\n\t\t} else \r\n\t\t{\r\n\t\t    fiQuery('div#FIBottomStickyInner').css('bottom','25px');\r\n\t\t}\r\n\t}, 300, true, false, {apd-zoneid}); \r\n});\r\n<\/script>\r\n\r\n<style com=\"b\">\r\nfooter.wds-global-footer {\r\n    padding-bottom: 90px !important\r\n}\r\ndiv.featured-video__player-container {\r\n    margin-bottom: 90px !important;\r\n}\r\ndiv#FIBottomStickyInner {\r\n  visibility: hidden!important;\r\n}\r\n<\/style>\r\n<!-- Sovrn HB tag v1.0 -->\n<prebid data-bidder='sovrn'\n    data-params-tagid='615728'\n    data-params-bidfloor='0.05'\n><\/prebid>","contentType":"html","trackBiddingParams":1,"floorPrice":0.05}]},{"id":109527,"width":1,"height":1,"event":"load","type":"static","selectorType":"css","selector":"body","includeTags":"","excludeTags":"","options":{"node":"div","animate":1,"position":"bottom","monitorUX":1,"safeFrame":0,"morestylesJSON":{"clear":"both"},"earlyStopSearch":0,"trackVisibility":{"enabled":false,"visibilityTime":1000,"visibilityPercent":50},"onDemandPlacement":{"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1},"placementLimitation":1,"validationSelectorCheckOnce":0,"totalRenderedInstancesLimitation":0},"creatives":[{"id":53731,"cid":494,"isHeaderBidding":"","requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=53731&campaignid=494&zoneid=109527&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=cf79fdeca6","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=53731__zoneid=109527__cb=cf79fdeca6__oadest=","width":1,"height":1,"timeoutAction":"show","passbackTimeout":1800,"countImpressionIfNoDemand":1,"filename":"","bannerContent":"<style>\ndiv[fi-instance-id={apd-id}] {\n    display:none !important;\n}\n<\/style><div><\/div>","contentType":"html","trackBiddingParams":1}]},{"id":109644,"width":1,"height":1,"event":"load","type":"static","selectorType":"css","selector":"body","includeTags":"","excludeTags":"","options":{"node":"div","animate":0,"position":"bottom","safeFrame":0,"morestylesJSON":{"clear":"both"},"earlyStopSearch":0,"trackVisibility":{"enabled":false,"visibilityTime":1000,"visibilityPercent":50},"placementLimitation":1,"validationSelectorCheckOnce":0,"totalRenderedInstancesLimitation":0},"creatives":[{"id":55969,"cid":494,"isHeaderBidding":"","requestLimitation":1,"logUrl":"https:\/\/cdn.firstimpression.io\/delivery\/lg.php?bannerid=55969&campaignid=494&zoneid=109644&loc=%2Fwiki%2FNagato_%28Pain%29%3Ffile%3DSix_paths_of_pein_render_by_xuzumaki-d49n8go.png&cb=461011c339","clickUrl":"https:\/\/cdn.firstimpression.io\/delivery\/ck.php?oaparams=2__bannerid=55969__zoneid=109644__cb=461011c339__oadest=","width":1,"height":1,"filename":"","bannerContent":"<style>\n    div[fi-instance-id={apd-id}] {\n        display: none !important;\n    }\n<\/style><div><\/div>","contentType":"html","trackBiddingParams":1}]}]};