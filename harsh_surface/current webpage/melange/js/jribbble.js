(function(a){"use strict",a.fn.jribbble=function(){this.makeRequest=function(b,c,d){var e=function(b){a.isFunction(c)&&c(b)},f=b.replace("//","/");a.ajax({data:d,dataType:"jsonp",success:e,type:"GET",url:a.jribbble.baseUrl+f})};return this},a.jribbble={},a.jribbble.baseUrl="http://api.dribbble.com",a.jribbble.paths={shots:"/shots/",rebounds:"/rebounds/",following:"/following/",players:"/players/",followers:"/followers/",draftees:"/draftees/",comments:"/comments/"},a.jribbble.getShotById=function(b,c){var d=a.jribbble.paths.shots+b;a.fn.jribbble().makeRequest(d,c)},a.jribbble.getReboundsOfShot=function(b,c,d){var e=a.jribbble.paths.shots+b+a.jribbble.paths.rebounds;a.fn.jribbble().makeRequest(e,c,d)},a.jribbble.getShotsByList=function(b,c,d){var e=a.jribbble.paths.shots+b;a.fn.jribbble().makeRequest(e,c,d)},a.jribbble.getShotsByPlayerId=function(b,c,d){var e=a.jribbble.paths.players+b+a.jribbble.paths.shots;a.fn.jribbble().makeRequest(e,c,d)},a.jribbble.getShotsThatPlayerFollows=function(b,c,d){var e=a.jribbble.paths.players+b+a.jribbble.paths.shots+a.jribbble.paths.following;a.fn.jribbble().makeRequest(e,c,d)},a.jribbble.getPlayerById=function(b,c){var d=a.jribbble.paths.players+b;a.fn.jribbble().makeRequest(d,c)},a.jribbble.getPlayerFollowers=function(b,c,d){var e=a.jribbble.paths.players+b+a.jribbble.paths.followers;a.fn.jribbble().makeRequest(e,c,d)},a.jribbble.getPlayerFollowing=function(b,c,d){var e=a.jribbble.paths.players+b+a.jribbble.paths.following;a.fn.jribbble().makeRequest(e,c,d)},a.jribbble.getPlayerDraftees=function(b,c,d){var e=a.jribbble.paths.players+b+a.jribbble.paths.draftees;a.fn.jribbble().makeRequest(e,c,d)},a.jribbble.getCommentsOfShot=function(b,c,d){var e=a.jribbble.paths.shots+b+a.jribbble.paths.comments;a.fn.jribbble().makeRequest(e,c,d)}})(jQuery)