:root{--qdmodal-background-color:#fff;--qdmodal-text-color:#222}body.skin-fandomdesktop{--qdmodal-background-color:var(--theme-page-background-color);--qdmodal-text-color:var(--theme-page-text-color)}body.qdmodal-is-visible{margin-inline-end:var(--qdmodal-scrollbar-width,0);overflow-y:hidden}.qdmodal-container{align-items:center;background-color:rgba(0,0,0,0.4);bottom:0;display:flex;font-size:14px;justify-content:center;line-height:22px;left:0;position:fixed;right:0;top:0;z-index:801;box-sizing:content-box}body.qdmodal-is-visible #mw-notification-area{z-index:802}.qdmodal{background-color:var(--qdmodal-background-color);border-radius:3px;color:var(--qdmodal-text-color);display:flex;flex-direction:column;max-height:calc(100% - 50px);max-width:calc(100% - 50px);overflow:hidden}@media (max-height:500px){.qdmodal{max-height:100%}}@media (max-width:500px){.qdmodal{max-width:100%}}.qdmodal > section{flex-grow:1;min-height:40px;overflow-y:auto;padding:20px;position:relative;-webkit-overflow-scrolling:touch}.qdmodal > header,.qdmodal > footer{background-color:hsla(0,0%,75%,0.4);display:flex}.qdmodal > header{min-height:22px;padding:12px 20px}.qdmodal > footer{align-items:center;flex-direction:row-reverse;flex-shrink:0;min-height:27px;overflow-x:auto;padding:9px}.qdmodal > footer:empty{display:none}.qdmodal > header > h3{color:inherit;flex-grow:1;font-size:1.3em;font-weight:bold;margin:0;-webkit-mask-image:linear-gradient(to left,transparent,black 3em);mask-image:linear-gradient(to left,transparent,black 3em);overflow:hidden;padding:0;padding-inline-end:3em;white-space:nowrap}.qdmodal > header > h3:dir(rtl){-webkit-mask-image:linear-gradient(to right,transparent,black 3em);mask-image:linear-gradient(to right,transparent,black 3em)}.qdmodal-close{height:28px;margin:-12px -20px;margin-inline-start:0;min-width:28px;padding:9px;width:28px}.qdmodal-close > path{stroke:currentColor;stroke-linecap:round}.qdmodal-button{background-color:rgba(0,0,0,0);border:1px solid #999;border-radius:3px;box-sizing:content-box;color:inherit;cursor:default;display:block;font-size:0.9em;height:1em;line-height:1;margin-inline-start:12px;padding:6px 12px;white-space:nowrap}.qdmodal-button[href]{cursor:pointer}.qdmodal-button:visited{color:inherit}.qdmodal-button[disabled]{opacity:0.6;pointer-events:none}.qdmodal-close,.qdmodal-button{transition:background-color 0.2s}.qdmodal-close:hover,.qdmodal-button:hover{background-color:var(--qdmodal-background-color);border-color:#777;color:inherit}@keyframes qdmodal-rotate{to{transform:rotate(1turn)}}.qdmodal-spinner{animation:qdmodal-rotate 1.5s steps(12) infinite;height:50px;left:calc(50% - 25px);position:absolute;top:calc(50% - 25px);vertical-align:middle;width:50px}.qdmodal-spinner-container{margin:calc(var(--qdmodal-spinner-size,50px) / -2) 0;overflow:hidden}.qdmodal-spinner-container > .qdmodal-spinner{height:var(--qdmodal-spinner-size,50px);position:static;width:var(--qdmodal-spinner-size,50px)}.qdmodal-spinner > path{opacity:0.2;stroke:currentColor;stroke-linecap:round;stroke-width:2px;transform-origin:center}.qdmodal-spinner > path:nth-of-type(1){transform:rotate(0deg)}.qdmodal-spinner > path:nth-of-type(2){transform:rotate(30deg)}.qdmodal-spinner > path:nth-of-type(3){transform:rotate(60deg)}.qdmodal-spinner > path:nth-of-type(4){transform:rotate(90deg)}.qdmodal-spinner > path:nth-of-type(5){transform:rotate(120deg);opacity:0.3}.qdmodal-spinner > path:nth-of-type(6){transform:rotate(150deg);opacity:0.4}.qdmodal-spinner > path:nth-of-type(7){transform:rotate(180deg);opacity:0.5}.qdmodal-spinner > path:nth-of-type(8){transform:rotate(210deg);opacity:0.6}.qdmodal-spinner > path:nth-of-type(9){transform:rotate(240deg);opacity:0.7}.qdmodal-spinner > path:nth-of-type(10){transform:rotate(270deg);opacity:0.8}.qdmodal-spinner > path:nth-of-type(11){transform:rotate(300deg);opacity:0.9}.qdmodal-spinner > path:nth-of-type(12){transform:rotate(330deg);opacity:1}