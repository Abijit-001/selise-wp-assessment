"use strict";(self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[]).push([[7413],{17088:(e,t,i)=>{i.r(t),i.d(t,{default:()=>I});var o=i(99196),c=i(89814),s=i.n(c),n=i(80721),p=i(40711),a=i(9818),r=i(94801),l=i(5027),h=i(75271),g=i(65736),d=i(82279),m=i(23569),u=i(50693),k=i(19301),_=i(15371),w=i(69307),E=i(30602),b=i(74617),C=i(15770),T=i(82901),v=i(40156);i(96483);const S={hidden:!0,message:(0,g.__)("Shipping options are not available","woocommerce")},x=({checked:e,rate:t,showPrice:i,showIcon:c,toggleText:n,multiple:p})=>(0,o.createElement)(d.Z,{value:"pickup",className:s()("wc-block-checkout__shipping-method-option",{"wc-block-checkout__shipping-method-option--selected":"pickup"===e})},!0===c&&(0,o.createElement)(u.Z,{icon:k.Z,size:28,className:"wc-block-checkout__shipping-method-option-icon"}),(0,o.createElement)("span",{className:"wc-block-checkout__shipping-method-option-title"},n),!0===i&&(0,o.createElement)(C.S,{multiple:p,minRate:t.min,maxRate:t.max})),R=({checked:e,rate:t,showPrice:i,showIcon:c,toggleText:n,shippingCostRequiresAddress:p=!1})=>{const l=(0,a.useSelect)((e=>e(r.CART_STORE_KEY).getShippingRates().some((({shipping_rates:e})=>!e.every(E.J3))))),h=p&&(()=>{const e=(0,a.select)("wc/store/validation"),t=e.getValidationError("shipping_state"),i=e.getValidationError("shipping_address_1"),o=e.getValidationError("shipping_country"),c=e.getValidationError("shipping_postcode");return[e.getValidationError("shipping_city"),t,i,o,c].some((e=>void 0!==e))})()&&!l,m=void 0!==t.min&&void 0!==t.max,{setValidationErrors:k,clearValidationError:b}=(0,a.useDispatch)(r.VALIDATION_STORE_KEY);(0,w.useEffect)((()=>{"shipping"!==e||m?b("shipping-rates-error"):k({"shipping-rates-error":S})}),[e,b,m,k]);const T=void 0===t.min||h?(0,o.createElement)("span",{className:"wc-block-checkout__shipping-method-option-price"},(0,g.__)("calculated with an address","woocommerce")):(0,o.createElement)(C.S,{minRate:t.min,maxRate:t.max});return(0,o.createElement)(d.Z,{value:"shipping",className:s()("wc-block-checkout__shipping-method-option",{"wc-block-checkout__shipping-method-option--selected":"shipping"===e})},!0===c&&(0,o.createElement)(u.Z,{icon:_.Z,size:28,className:"wc-block-checkout__shipping-method-option-icon"}),(0,o.createElement)("span",{className:"wc-block-checkout__shipping-method-option-title"},n),!0===i&&T)},P=({checked:e,onChange:t,showPrice:i,showIcon:c,localPickupText:s,shippingText:n})=>{var p,a;const{shippingRates:r}=(0,l.V)(),h=(0,b.getSetting)("shippingCostRequiresAddress",!1);return(0,o.createElement)(m.Z,{id:"shipping-method",className:"wc-block-checkout__shipping-method-container",label:"options",onChange:t,checked:e},(0,o.createElement)(R,{checked:e,rate:(0,T.i)(null===(p=r[0])||void 0===p?void 0:p.shipping_rates),showPrice:i,showIcon:c,shippingCostRequiresAddress:h,toggleText:n||v.Z}),(0,o.createElement)(x,{checked:e,rate:(0,T.B)(null===(a=r[0])||void 0===a?void 0:a.shipping_rates),multiple:r.length>1,showPrice:i,showIcon:c,toggleText:s||v.$}))};var N=i(44750);const I=(0,n.withFilteredAttributes)(N.Z)((({title:e,description:t,showStepNumber:i,children:c,className:n,showPrice:g,showIcon:d,shippingText:m,localPickupText:u})=>{const{checkoutIsProcessing:k,prefersCollection:_}=(0,a.useSelect)((e=>{const t=e(r.CHECKOUT_STORE_KEY);return{checkoutIsProcessing:t.isProcessing(),prefersCollection:t.prefersCollection()}})),{setPrefersCollection:w}=(0,a.useDispatch)(r.CHECKOUT_STORE_KEY),{shippingRates:E,needsShipping:b,hasCalculatedShipping:C,isCollectable:T}=(0,l.V)();return b&&C&&E&&T&&h.oC?(0,o.createElement)(p.FormStep,{id:"shipping-method",disabled:k,className:s()("wc-block-checkout__shipping-method",n),title:e,description:t,showStepNumber:i},(0,o.createElement)(P,{checked:_?"pickup":"shipping",onChange:e=>{w("pickup"===e)},showPrice:g,showIcon:d,localPickupText:u,shippingText:m}),c):null}))}}]);