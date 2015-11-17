
(function(compId){var _=null,y=true,n=false,x1='6.0.0',rz='rotateZ',x3='6.0.0.400',x2='5.0.0',x4='rgba(0,0,0,0)',x7='rgba(255,255,255,0)',tp='top',g='image',e9='${q6-1}',e8='${q6-2}',rt='right',i='none';var g5='q6-1.png',g6='q6-2.png';var im='img/quiz/',aud='media/',vid='media/',js='js/',fonts={},opts={'gAudioPreloadPreference':'auto','gVideoPreloadPreference':'auto'},resources=[],scripts=[],symbols={"stage":{v:x1,mv:x2,b:x3,stf:i,cg:i,rI:n,cn:{dom:[{id:'q6-1',t:g,r:['auto','109px','782px','625px','33px','auto'],f:[x4,im+g5,'0px','0px']},{id:'q6-2',t:g,r:['auto','148px','281px','201px','-14px','auto'],br:["0px","0px","0px","0px"],f:[x4,im+g6,'0px','0px']}],style:{'${Stage}':{isStage:true,r:[undefined,undefined,'100%','720px'],overflow:'hidden',f:[x7]}}},tt:{d:2000,a:y,data:[["eid26",rt,0,500,"easeInOutQuad",e8,'-14px','-18px'],["eid27",rt,500,500,"easeInOutQuad",e8,'-18px','-14px'],["eid9",tp,0,500,"easeInOutQuad",e8,'146px','153px'],["eid13",tp,500,500,"easeInOutQuad",e8,'153px','146px'],["eid10",rz,0,500,"easeInOutQuad",e8,'0deg','1deg'],["eid14",rz,500,500,"easeInOutQuad",e8,'1deg','0deg'],["eid3",rz,0,500,"easeInOutQuad",e9,'0deg','2deg'],["eid16",rz,500,500,"easeInOutQuad",e9,'2deg','0deg']]}}};AdobeEdge.registerCompositionDefn(compId,symbols,fonts,scripts,resources,opts);})("EDGE-3183171165");
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;Edge.registerEventBinding(compId,function($){
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindSymbolAction(compId,symbolName,"creationComplete",function(sym,e){sym.setVariable("numLoops",0);});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",1000,function(sym,e){var numLoopsHolder=sym.getVariable("numLoops");numLoopsHolder=numLoopsHolder+1;sym.setVariable("numLoops",numLoopsHolder);if(numLoopsHolder==10){sym.setVariable("numLoops",0);}else{sym.play(0);}});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",2000,function(sym,e){sym.play(0);});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})})(AdobeEdge.$,AdobeEdge,"EDGE-3183171165");