!function(t,n,i,a){function e(){var n=t(this);n.is(":visible")&&r(n)&&n.trigger(y)}function r(t){var n=t[0].getBoundingClientRect(),i=y1=-t.data(g).threshold,a=f-y1,e=v-i;return(n.top>=y1&&n.top<=a||n.bottom>=y1&&n.bottom<=a)&&(n.left>=i&&n.left<=e||n.right>=i&&n.right<=e)}function o(){f=n.innerHeight||i.documentElement.clientHeight,v=n.innerWidth||i.documentElement.clientWidth,d()}function d(){D=D.filter(p),1==this.nodeType?t(this).find(p).each(e):D.each(e)}function c(){var n=t(this),i=n.data(g),a=n.contents().filter(function(){return 8===this.nodeType}).get(0),e=t(a&&t.trim(a.data));n.replaceWith(e),t.isFunction(i.load)&&i.load.call(e,e)}function s(){var n=t(this);l(n)|h(n)&&(n.data(z)||(n.data(z,1),n.bind(y,u)))}function l(t){if(t.data(m))return!1;var n=t.css("overflow");return"scroll"!=n&&"auto"!=n?!1:(t.data(m,1),t.bind("scroll",d),!0)}function h(t){if(!t.data(w)){var n=t.css("display");if("none"==n)return t.data(w,1),t._bindShow(d),!0}}function u(){var n=t(this);0==n.find(p).length&&(n.removeData(m).removeData(w).removeData(z),n.unbind("scroll",d).unbind(y,u)._unbindShow(d))}var f,v,g="jquery-lazyload-any",y="appear",b=g+"-"+y,p=":"+b,m=g+"-scroller",w=g+"-display",z=g+"-watch",I=!1,D=t();t.expr[":"][b]=function(n){return t(n).data(b)!==a},t.fn.lazyload=function(a){var r={threshold:0,trigger:y};t.extend(r,a);var l=r.trigger.split(" ");return this.data(b,-1!=t.inArray(y,l)).data(g,r),this.bind(r.trigger,c),this.each(e),this.parents().each(s),this.each(function(){D=D.add(this)}),I||(I=!0,o(),t(i).ready(function(){t(n).bind("resize",o).bind("scroll",d)})),this},t.lazyload={check:d},function(){function n(){s=s.filter(d),s.each(i),0==s.length&&(e=clearInterval(e))}function i(){var n=t(this),i="none"!=n.css("display");n.data(o)!=i&&(n.data(o,i),i&&n.trigger(r))}var e,r="show",o=g+"-"+r,d=":"+o,c=50,s=t();t.expr[":"][o]=function(n){return t(n).data(o)!==a},t.fn._bindShow=function(t){this.bind(r,t),this.data(o,"none"!=this.css("display")),s=s.add(this),c&&!e&&(e=setInterval(n,c))},t.fn._unbindShow=function(t){this.unbind(r,t),this.removeData(o)},t.lazyload.setInterval=function(i){i==c||!t.isNumeric(i)||0>i||(c=i,e=clearInterval(e),c>0&&(e=setInterval(n,c)))}}()}(jQuery,window,document);