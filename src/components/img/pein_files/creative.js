var ZOOM_DURATION=.8,ZOOM_AMOUNT=5,FADE_DURATION=.8,Creative=function(){this.init=function(){TweenLite.set(View.endFrame,{alpha:0})},this.play=function(){TweenLite.fromTo(View.endFrame,FADE_DURATION,{alpha:0},{alpha:1,delay:0}),TweenLite.delayedCall(0,function(){View.endFrame.netflixLogo.play()})}};Creative.zoomDuration=ZOOM_DURATION,Creative.zoomAmount=ZOOM_AMOUNT;