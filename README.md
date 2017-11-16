# blocklist_proxy
Proxy adding line to blocklist to make [filterlist](https://filterlists.com) compartible with opera-browser

Problem:  
Opera expects header-line.  
E.g.: 
- compartible: https://easylist-downloads.adblockplus.org/adwarefilters.txt
- compartible: https://raw.githubusercontent.com/hoshsadiq/adblock-nocoin-list/master/nocoin.txt
- incompartible: https://raw.githubusercontent.com/quidsup/notrack/master/trackers.txt
- incompratible: http://malwareurls.joxeankoret.com/normal.txt

Solution:  
Add-Adblock2-Header to Lists where you see that they are Adblock-Compartible (not these hosts file).

Usage:
Put script on your server, use url-parameter.  
e.g.: https://YOUR.SERVER/blocklist_proxy.php?url=https://raw.githubusercontent.com/metaphoricgiraffe/tracking-filters/master/trackingfilters.txt
