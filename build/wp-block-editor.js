(()=>{"use strict";var o,r={88:()=>{const o=window.wp.blocks,r=window.wp.i18n,e=window.wp.blockEditor,t=window.ReactJSXRuntime,c=JSON.parse('{"UU":"wp-starter-block/dynamic-block"}');(0,o.registerBlockType)(c.UU,{edit:function(){return(0,t.jsx)("p",{...(0,e.useBlockProps)(),children:(0,r.__)("Dynamic Block – hello from the editor!","dynamic-block")})}});const i=JSON.parse('{"UU":"wp-starter-block/static-block"}');(0,o.registerBlockType)(i.UU,{edit:function(){return(0,t.jsx)("p",{...(0,e.useBlockProps)(),children:(0,r.__)("Static Block – hello from the editor!","static-block")})},save:function(){return(0,t.jsx)("p",{...e.useBlockProps.save(),children:"Static Block – hello from the saved content!"})}})}},e={};function t(o){var c=e[o];if(void 0!==c)return c.exports;var i=e[o]={exports:{}};return r[o](i,i.exports,t),i.exports}t.m=r,o=[],t.O=(r,e,c,i)=>{if(!e){var n=1/0;for(p=0;p<o.length;p++){for(var[e,c,i]=o[p],l=!0,s=0;s<e.length;s++)(!1&i||n>=i)&&Object.keys(t.O).every((o=>t.O[o](e[s])))?e.splice(s--,1):(l=!1,i<n&&(n=i));if(l){o.splice(p--,1);var a=c();void 0!==a&&(r=a)}}return r}i=i||0;for(var p=o.length;p>0&&o[p-1][2]>i;p--)o[p]=o[p-1];o[p]=[e,c,i]},t.o=(o,r)=>Object.prototype.hasOwnProperty.call(o,r),(()=>{var o={880:0,803:0};t.O.j=r=>0===o[r];var r=(r,e)=>{var c,i,[n,l,s]=e,a=0;if(n.some((r=>0!==o[r]))){for(c in l)t.o(l,c)&&(t.m[c]=l[c]);if(s)var p=s(t)}for(r&&r(e);a<n.length;a++)i=n[a],t.o(o,i)&&o[i]&&o[i][0](),o[i]=0;return t.O(p)},e=globalThis.webpackChunkwp_blocks=globalThis.webpackChunkwp_blocks||[];e.forEach(r.bind(null,0)),e.push=r.bind(null,e.push.bind(e))})();var c=t.O(void 0,[803],(()=>t(88)));c=t.O(c)})();