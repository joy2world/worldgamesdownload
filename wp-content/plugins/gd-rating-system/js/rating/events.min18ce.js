!function(t,r){"use strict";t.wp=t.wp||{},t.wp.gdrts=t.wp.gdrts||{},t.wp.gdrts.hooks=new function(){var n=Array.prototype.slice,e={removeFilter:function(t,r){return"string"==typeof t&&i("filters",t,r),e},applyFilters:function(){var t=n.call(arguments),r=t.shift();return"string"!=typeof r?e:f("filters",r,t)},addFilter:function(t,r,n,i){return"string"==typeof t&&"function"==typeof r&&(n=parseInt(n||10,10),o("filters",t,r,n,i)),e},removeAction:function(t,r){return"string"==typeof t&&i("actions",t,r),e},doAction:function(){var t=n.call(arguments),r=t.shift();return"string"==typeof r&&f("actions",r,t),e},addAction:function(t,r,n,i){return"string"==typeof t&&"function"==typeof r&&(n=parseInt(n||10,10),o("actions",t,r,n,i)),e}},c={actions:{},filters:{}};function i(t,r,n,i){var e,o,f;if(c[t][r])if(n)if(e=c[t][r],i)for(f=e.length;f--;)(o=e[f]).callback===n&&o.context===i&&e.splice(f,1);else for(f=e.length;f--;)e[f].callback===n&&e.splice(f,1);else c[t][r]=[]}function o(t,r,n,i,e){var o={callback:n,priority:i,context:e},f=c[t][r];f=f?(f.push(o),function(t){for(var r,n,i,e=1,o=t.length;e<o;e++){for(r=t[e],n=e;(i=t[n-1])&&i.priority>r.priority;)t[n]=t[n-1],--n;t[n]=r}return t}(f)):[o],c[t][r]=f}function f(t,r,n){var i,e,o=c[t][r];if(!o)return"filters"===t&&n[0];if(e=o.length,"filters"===t)for(i=0;i<e;i++)n[0]=o[i].callback.apply(o[i].context,n);else for(i=0;i<e;i++)o[i].callback.apply(o[i].context,n);return"filters"!==t||n[0]}return e}}(window);