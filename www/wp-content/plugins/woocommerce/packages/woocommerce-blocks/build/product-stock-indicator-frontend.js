(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[75],{20:function(t,o,c){"use strict";c.d(o,"a",(function(){return n})),c.d(o,"b",(function(){return e}));const n=t=>!(t=>null===t)(t)&&t instanceof Object&&t.constructor===Object;function e(t,o){return n(t)&&o in t}},216:function(t,o,c){"use strict";c.d(o,"a",(function(){return e})),c(100);var n=c(46);const e=()=>n.m>1},217:function(t,o,c){"use strict";c.d(o,"a",(function(){return r}));var n=c(30),e=c(20);const r=t=>Object(n.a)(t)?JSON.parse(t)||{}:Object(e.a)(t)?t:{}},292:function(t,o,c){"use strict";c.d(o,"a",(function(){return a}));var n=c(111),e=c(216),r=c(20),s=c(217);const a=t=>{if(!Object(e.a)())return{className:"",style:{}};const o=Object(r.a)(t)?t:{},c=Object(s.a)(o.style);return Object(n.__experimentalUseColorProps)({...o,style:c})}},301:function(t,o,c){"use strict";c.d(o,"a",(function(){return r}));var n=c(20),e=c(217);const r=t=>{const o=Object(n.a)(t)?t:{},c=Object(e.a)(o.style),r=Object(n.a)(c.typography)?c.typography:{};return{style:{fontSize:o.fontSize?`var(--wp--preset--font-size--${o.fontSize})`:r.fontSize,lineHeight:r.lineHeight,fontWeight:r.fontWeight,textTransform:r.textTransform,fontFamily:o.fontFamily}}}},395:function(t,o){},442:function(t,o,c){"use strict";c.r(o);var n=c(0),e=c(1),r=c(4),s=c.n(r),a=c(50),i=c(292),u=c(301),l=c(134);c(395);o.default=Object(l.withProductDataContext)(t=>{const{className:o}=t,{parentClassName:c}=Object(a.useInnerBlockLayoutContext)(),{product:r}=Object(a.useProductDataContext)(),l=Object(i.a)(t),b=Object(u.a)(t);if(!r.id||!r.is_purchasable)return null;const d=!!r.is_in_stock,f=r.low_stock_remaining,p=r.is_on_backorder;return Object(n.createElement)("div",{className:s()(o,l.className,"wc-block-components-product-stock-indicator",{[c+"__stock-indicator"]:c,"wc-block-components-product-stock-indicator--in-stock":d,"wc-block-components-product-stock-indicator--out-of-stock":!d,"wc-block-components-product-stock-indicator--low-stock":!!f,"wc-block-components-product-stock-indicator--available-on-backorder":!!p}),style:{...l.style,...b.style}},f?(t=>Object(e.sprintf)(
/* translators: %d stock amount (number of items in stock for product) */
Object(e.__)("%d left in stock","woocommerce"),t))(f):((t,o)=>o?Object(e.__)("Available on backorder","woocommerce"):t?Object(e.__)("In Stock","woocommerce"):Object(e.__)("Out of Stock","woocommerce"))(d,p))})}}]);