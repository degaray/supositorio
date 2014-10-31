<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><style type="text/css">UL{display:none;}</style><title>Queueing theory models 
calculator.</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"><meta name="keywords" content="queuing theory calculator, queueing theory calculator, queueing theory calculations, queueing models calculator, queueing models calculations, erlang calculator, queues, queueing theory, queueing models, queueing formulas, erlang formula, erlang"><meta name="description" content="Queueing Theory Calculator is a simple, yet powerful tool to process queueing models calculations, Erlang formulas for queues."><meta name="googlebot" content="index, follow"><meta name="robots" content="index, follow"><style type="text/css">
body {
  margin: 5px;
  font-family: Arial,Helvetica,sans-serif;
}
																																																																																																																																																					 .th {
																																																																																																																																																						 background: #003366 none repeat scroll 0%;
																																																																																																																																																						 font-family: Verdana,Arial,sans-serif;
																																																																																																																																																						 font-style: normal;
																																																																																																																																																						 font-variant: normal;
																																																																																																																																																						 font-weight: normal;
																																																																																																																																																						 font-size: 10px;
																																																																																																																																																						 line-height: normal;
																																																																																																																																																						 font-size-adjust: none;
																																																																																																																																																						 font-stretch: normal;
																																																																																																																																																						 color: #ffffff;
																																																																																																																																																					 }
																																																																																																																																																					 .tm {
																																																																																																																																																						 background: #CCCCCC none repeat scroll 0%;
																																																																																																																																																						 font-family: Verdana,Arial,sans-serif;
																																																																																																																																																						 font-style: normal;
																																																																																																																																																						 font-variant: normal;
																																																																																																																																																						 font-weight: bold;
																																																																																																																																																						 font-size: 12px;
																																																																																																																																																						 line-height: normal;
																																																																																																																																																						 font-size-adjust: none;
																																																																																																																																																						 font-stretch: normal;
																																																																																																																																																						 color: #000066;
																																																																																																																																																					 }
.ts {
  background: #e7e9f2 none repeat scroll 0%;
  font-family: Times New Roman,Arial,sans-serif;
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: normal;
  font-size-adjust: none;
  font-stretch: normal;
  color: #000000;
}
																																																																																																																																																					 .tg {
																																																																																																																																																						 background: #003366 none repeat scroll 0%;
																																																																																																																																																						 font-family: Verdana,Arial,sans-serif;
																																																																																																																																																						 font-style: normal;
																																																																																																																																																						 font-variant: normal;
																																																																																																																																																						 font-weight: normal;
																																																																																																																																																						 font-size: 13px;
																																																																																																																																																						 line-height: normal;
																																																																																																																																																						 font-size-adjust: none;
																																																																																																																																																						 font-stretch: normal;
																																																																																																																																																						 color: #fff0ff;
																																																																																																																																																					 }

																																																																																																																																																					 </style>
<style type="text/css">
.auto-style2 {
	text-align: center;
}
</style>
</head>

<body style="text-align:center background-color: #eeeeee; text-align: center; top:0px; margin: 0px;" onload="conv(forma,-1,1)" background="back.gif">

<div style="margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	position: relative;
	min-width: 789px;
	max-width: 789px;
	left: 0px;
	top: 0px;
	background-color: #FFFFFF;">
	<div style="	width:769px;
	top: 0px;
	left: 10px;
	right: 10px;
	position: relative;
	layer-background-color: #FFFFFF;
	border: 1px none #000000;
	vertical-align: super;
	z-index:1;" class="auto-style2">
		<br />
<ul>








<script>
<!--
function conv(form,num,name){
hordia=form.hordia.value;
num=eval(num);
if(num!=-1){if(name=="selectLambda"){sel=eval(form.Lambda.value);
lastno=lastnum[1];
}else if(name=="selectMu"){sel=eval(form.Mu.value);
lastno=lastnum[2];
}}else{lastnum=new Array(0);
lastno=num;
}switch(lastno){case 0:switch(num){case 1:sel/=hordia;
break;
case 2:sel/=60*hordia;
break;
case 3:sel/=3600*hordia;
break;
default:break;
}break;
case 1:switch(num){case 0:sel*=hordia;
break;
case 2:sel/=60;
break;
case 3:sel/=3600;
break;
default:break;
}break;
case 2:switch(num){case 0:sel*=60*hordia;
break;
case 1:sel*=60;
break;
case 3:sel/=60;
break;
default:break;
}break;
case 3:switch(num){case 0:sel*=3600*hordia;
break;
case 1:sel*=3600;
break;
case 2:sel*=60;
break;
default:break;
}break;
default:break;
}if(num!=-1){switch(name){case "selectLambda":form.Lambda.value=sel;
lastnum[1]=num;
break;
case "selectMu":form.Mu.value=sel;
lastnum[2]=num;
break;
}}}function comb(alta,baja){num=fact(alta)/(fact(baja)*fact(eval(alta-baja)));
return num;
}function evalExp(form){if(form.Trab.value) form.Trab.value=eval(form.Trab.value);
if(form.Ser.value) form.Ser.value=eval(form.Ser.value);
if(form.Cap.value) form.Cap.value=eval(form.Cap.value);
if(form.Ent.value) form.Ent.value=eval(form.Ent.value);
if(form.Mu.value) form.Mu.value=eval(form.Mu.value);
if(form.Pn.value) form.Pn.value=eval(form.Pn.value);
if(form.Lambda.value) form.Lambda.value=eval(form.Lambda.value);
}function pot(base,exponente){num = Math.pow(base,exponente);
return num;
}function raiz(num,exp){num = Math.pow(num,1/exp);
return num;
}function abs(num){num = Math.abs(num);
return num;
}function fact(num){if(num==0) return 1;
else if(num>1){return num*fact(num-1);
}else return num;
}function compute(form){Lambda=eval(form.Lambda.value);
Mu=eval(form.Mu.value);
c=eval(form.Ser.value);
k=eval(form.Cap.value);
m=eval(form.Ent.value);
t=eval(form.t.value);
tq=eval(form.tq.value);
Modelo=eval(form.Modelo.value);
n=T=Tq=r=Lambdap=Ro=Po=Pn=L=Lq=W=Wq=eval(0);
form.Lambdap.value="";
form.Lq.value="";
form.L.value="";
form.Wq.value="";
form.W.value="";
form.T.value="";
form.Tq.value="";
form.Pn.value="";
form.Ro.value="";
ErrMod=unescape("You did not select any model");
Errc=unescape("The cell for C (no. of servers) is null");
Errk=unescape("The cell for K (queue capacity) is null");
Errm=unescape("The cell for M (Entities population is null");
ErrMu=unescape("The cell for Mu is null");
ErrLambda=unescape("The cell for Labda is null");
ErrNumeroEnt=unescape("The probability that there would be more entities in the system than the total population is zero.");
ErrUnids=unescape("There is a unit incompatibility between Mu and Lambda");
ErrRo=unescape("The queues will tend to infinity as Lambda is greater or equal than "+c+" times Mu");
if(Modelo==undefined){alert(ErrMod);
return;
}if(c==undefined){alert(Errc);
return;
}if(k==undefined){alert(Errk);
return;
}if(m==undefined){alert(Errm);
return;
}if(Lambda==undefined){alert(ErrLambda);
return;
}if(Mu==undefined){alert(ErrMu);
return;
} if((form.selectMu.value==-1 || form.selectLambda.value==-1) && form.selectMu.value!=form.selectLambda.value){alert(ErrUnids);
return;
}if(form.n.value>form.Ent.value){alert(ErrNumeroEnt);
}if(form.selectMu.value!=form.selectLambda.value){conv(form,form.selectMu.value,form.selectLambda.name);
form.selectLambda.value=form.selectMu.value;
Lambda=eval(form.Lambda.value);
}switch(eval(form.selectMu.value)){case 0:form.unidadt.value="Days)=";
form.unidadtq.value="Days)=";
form.unidadW.value="[Days]";
form.unidadWq.value="[Days]";
break;
case 1:form.unidadt.value="hrs)=";
form.unidadtq.value="hrs)=";
form.unidadW.value="[hrs]";
form.unidadWq.value="[hrs]";
break;
case 2:form.unidadt.value="mins)=";
form.unidadtq.value="mins)=";
form.unidadW.value="[mins]";
form.unidadWq.value="[mins]";
break;
case 3:form.unidadt.value="secs)=";
form.unidadtq.value="secs)=";
form.unidadW.value="[secs]";
form.unidadWq.value="[secs]";
break;
default:form.unidadt.value="time units)=";
form.unidadtq.value="time units)=";
form.unidadW.value="time units";
form.unidadWq.value="time units";
}if(Modelo==1 && Lambda>= Mu*c){alert(ErrRo);
return;
} if(form.n.value==""){form.n.value=0;
}n=eval(form.n.value);
T=eval(form.T.value);
Tq=eval(form.Tq.value);
r=Lambda/Mu;
if(form.Modelo.value==1){cp=c+1;
Ro= Lambda/(c*Mu);
form.Ro.value=Ro;
for(i=0, Po=0;
i<=c-1;
i++){Po+=pot(r,i)/fact(i);
}Po+=(c*pot(r,c))/(fact(c)*(c-r));
Po = pot(Po,-1);
 if(n==0 || n==""){Pn=Po;
}else if(n>=1 && n<=c){Pn=(pot(r,n)*Po)/fact(n);
}else if(n>c){Pn=(Po*pot(Ro,n)*pot(c,c))/fact(c);
}else form.Pn.value="";
form.Pn.value=Pn;
cx=1-r/c;
Lq=pot(r,cp)*Po/(fact(c)*c*pot(cx,2));
form.Lq.value=Lq;
Wq=Lq/Lambda;
form.Wq.value=Wq;
L= r+(Po*pot(r,cp))/(c*fact(c)*pot(cx,2));
form.L.value=L;
W=L/Lambda;
form.W.value=W;
Pjs=pot(r,c)*Po/(fact(c)*(1-Ro));
if((c-1)==c*Ro){T=1-Math.exp(-Mu*t)*(1+Pjs*Mu*t);
}else{T=1-(Math.exp(-Mu*t)*(1+Pjs*(1-Math.exp(-Mu*t*(c-1-c*Ro)))/(c-1-c*Ro)));
}form.T.value=T;
Tq=1-(Pjs*Math.exp(-c*Mu*(1-Ro)*tq));
form.Tq.value=Tq;
}if(form.Modelo.value==2){Pn=pot(r,n)*Math.exp(-r)/fact(n);
form.Pn.value=Pn;
W=1/Mu;
form.W.value=W;
L=r;
form.L.value=L;
}if(form.Modelo.value==3){Ro=Lambda/(c*Mu);
form.Ro.value=Ro;
if(Ro!=1){for(i=0;
i<=c-1;
i++){Po+=pot(r,i)/fact(i);
}Po+= pot(r,c)*(1-pot(Ro,k-c+1))/(fact(c)*(1-Ro));
Po = pot(Po,-1);
}else{for(i=eval(0);
i<=c-1;
i++){Po+=pot(r,i)/fact(i);
}Po+= pot(r,c)*(k-c+1)/(fact(c));
Po = pot(Po,-1);
}if(Ro!=1){Lq=Po*pot(c*Ro,c)*Ro*(1-pot(Ro,k-c+1)-(1-Ro)*(k-c+1)*pot(Ro,k-c))/(fact(c)*pot(1-Ro,2));
}else{Lq=Po*pot(c,c)*(k-c)*(k-c+1)/(2*fact(c));
}form.Lq.value=Lq;
for(i=0;
i<=c-1;
i++){L=(c-i)*pot(Ro*c,i)/fact(i);
}L*=-Po;
L+= Lq+c;
form.L.value=L;
if(n==0){Pn=Po;
}else if(1<=n && n<=c){Pn = pot(r,n)*Po/fact(n);
}else{Pn = pot(r,n)*Po/(fact(c)*pot(c,n-c));
}form.Pn.value=Pn;
if(k==0){Pk=Po;
}else if(1<=k && k<=c){Pk = pot(r,k)*Po/fact(k);
}else{Pk = pot(r,k)*Po/(fact(c)*pot(c,k-c));
}Lambdap=Lambda*(1-Pk);
form.Lambdap.value=Lambdap;
W=L/Lambdap;
form.W.value=W;
Wq=W-1/Mu;
form.Wq.value=Wq;
form.Tq.value="";
}if(form.Modelo.value==4){for(i=0,Po=0;
i<=c-1;
i++){Po+=comb(m,i)*pot(r,i);
}for(i=c,Px=0;
i<=m;
i++){Px+=comb(m,i)*fact(i)*pot(r,i)/(pot(c,i-c)*fact(c));
}Po=1/(Po+Px);
if(0<=n && n<c){Pn=comb(m,n)*pot(r,n)*Po;
}else if(n>=c && n<=m){Pn=comb(m,n)*fact(n)*pot(r,n)*Po/(pot(c,n-c)*fact(c));
}else  Pn=0;
form.Pn.value=Pn;
L=0;
for(i=0;
i<=c-1;
i++){L+=i*comb(m,i)*pot(r,i);
}for(i=c;
i<=m;
i++){L+=i*comb(m,i)*pot(r,i)*fact(i)/(pot(c,i-c)*fact(c));
}L*=Po;
form.L.value=L;
Lq=0;
for(i=0;
i<=c-1;
i++){Lq+=(c-i)*comb(m,i)*pot(r,i);
}Lq*=Po;
Lq=Lq+L-c;
form.Lq.value=Lq;
W=L/(Lambda*(m-L));
form.W.value=W;
Wq=Lq/(Lambda*(m-L));
form.Wq.value=Wq;
Lambdap=Mu*(L-Lq);
form.Lambdap.value=Lambdap;
}redondear(form);
}function redondear(form){decimales=Math.floor(form.decimales.value);
for(i=0;
i<form.elements.length;
i++){val=form.elements[i].value;
switch(form.elements[i].name){case "T":case "Tq":case "Ro":case "Lq":case "L":case "W":case "Wq":case "Pn":case "Lambdap":if(form.elements[i].value != "") form.elements[i].value=Math.round(val*Math.pow(10,decimales))/Math.pow(10,decimales);
if(form.elements[i].value.length-2>=9) form.elements[i].size=form.elements[i].value.length-2;
else form.elements[i].size=9;
break;
default:break;
}}}function f(form,num){if(num==1){form.Modelo.value=num;
form.Ser.value="";
form.Cap.value=Number.POSITIVE_INFINITY;
form.Ent.value=Number.POSITIVE_INFINITY;
}if(num==2){form.Modelo.value=num;
form.Ser.value=Number.POSITIVE_INFINITY;
form.Cap.value=Number.POSITIVE_INFINITY;
form.Ent.value=Number.POSITIVE_INFINITY;
}if(num==3){form.Modelo.value=num;
form.Ser.value="";
form.Cap.value="";
form.Ent.value=Number.POSITIVE_INFINITY;
}if(num==4){form.Modelo.value=num;
form.Ser.value="";
form.Cap.value=Number.NaN;
form.Ent.value="";
}}function g(form,num){if(num==1){form.LambdaMu.value=num;
}if(num==2){form.LambdaMu.value=num;
}}CHI_EPSILON=0.000001;/*accuracy of critchi approximation*/
CHI_MAX=99999.0;/*maximum chi square value*/
LOG_SQRT_PI=0.5723649429247000870717135;/*log(sqrt(pi))*/
I_SQRT_PI=0.5641895835477562869480795;/*1/sqrt(pi)*/
BIGX=20.0;/*max value to represent exp(x)*/
function ex(x){if(x<-BIGX){return 0;
}else{return Math.exp(x);
}}function pochisq(x, df){a=y=s=e=c=z=0;
even=0;
if(x<= 0 || df<1) return(1.0);
a = 0.5*x;
even =(2*(df/2)) == df;
if(df>1) y = ex(-a);
s =(even ? y:(2.0*poz(-Math.sqrt(x))));
if(df>2){x = 0.5*(df-1.0);
z =(even ? 1.0:0.5);
if(a>BIGX){e =(even ? 0.0:LOG_SQRT_PI);
c = Math.log(a);
while(z<= x){e = Math.log(z)+e;
s+= ex(c*z-a-e);
z+= 1.0;
}return(s);
}else{e =(even ? 1.0:(I_SQRT_PI/Math.sqrt(a)));
c = 0.0;
while(z<= x){e = e*(a/z);
c = c+e;
z+= 1.0;
}return(c*y+s);
}}else return(s);
}function critchi(p, df){minchisq = 0;
maxchisq = CHI_MAX;
chisqval = 0;
if(p<= 0) return(maxchisq);
else if(p>= 1) return(0);
chisqval = df/Math.sqrt(p);
while(maxchisq-minchisq>CHI_EPSILON){if(pochisq(chisqval, df)<p) maxchisq = chisqval;
else minchisq = chisqval;
chisqval =(maxchisq+minchisq)*0.5;
}return(chisqval);
}function poz(z){y=x=w=0;
if(z == 0) x = 0;
else{y = 0.5*fabs(z);
if(y>=(Z_MAX*0.5)) x = 1.0;
else if(y<1.0){w = y*y;
x =((((((((0.000124818987*w-0.001075204047)*w+0.005198775019)*w-0.019198292004)*w+0.059054035642)*w-0.151968751364)*w+0.319152932694)*w-0.531923007300)*w+0.797884560593)*y*2.0;
}else{y-= 2.0;
x =(((((((((((((-0.000045255659*y+0.000152529290)*y-0.000019538132)*y-0.000676904986)*y+0.001390604284)*y-0.000794620820)*y-0.002034254874)*y+0.006549791214)*y-0.010557625006)*y+0.011630447319)*y-0.009279453341)*y+0.005353579108)*y-0.002141268741)*y+0.000535310849)*y+0.999936657524;
}}return(z>0.0 ?((x+1.0)*0.5):((1.0-x)*0.5));
}function fabs(num){return(num<0 ?-num:num);
}function analiza(form){string1=form.analisis.value;
array1=new Array();
valor="";
suma=0;
n=0;
for(i=0;
i<string1.length;
i++){if(escape(string1.charAt(i))!= "%0A" && escape(string1.charAt(i))!= "%0D"){valor+=string1.charAt(i);
}else if(escape(string1.charAt(i)) == "%0A"){if(valor){suma+=eval(valor);
array1[n]=eval(valor);
n++;
}valor="";
}}if(valor){suma+=eval(valor);
array1[n]=eval(valor);
n++;
}LambdaExp=n/suma;
noRan=1+3.32*Math.log(n);
varRan=Math.round(1/noRan);
rango=new Array();
for(i=0;
i<noRan;
i++){rango[i]=Math.log(1-varRan*(i+1))/-LambdaExp;
}Ei=n/noRan;
Oi=new Array();
valor="";
array1.sort(doCompare);
function doCompare(a,b){return a-b}j=0;
for(i=0;
i<=rango.length;
i++) Oi[i]=0;
for(i=0;
i<array1.length;
i++){if(array1[i]<=rango[j]){Oi[j]++;
}else{j++;
Oi[j]++;
}}Ji=0;
for(i=0;
i<rango.length;
i++){k=Ei-Oi[i];
Ji+=Math.pow(k, 2)/Ei;
}Pchival=pochisq(Ji, rango.length-1);
form.Pval.value="Val-P="+Math.round(Pchival*Math.pow(10,4))/Math.pow(10,4)+" Xi="+Math.round(Ji*Math.pow(10,4))/Math.pow(10,4);
form.Pval.size=form.Pval.value.length-2;
if(form.LambdaMu.value==1){form.Lambda.value=n/suma;
}else if(form.LambdaMu.value==2){form.Mu.value=n/suma;
}}
-->
</script>


<!-----------------------------------GOOGLE ANALYTICS------------------------------->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18374710-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</ul>
<div id="Logo" style="position: fixed; left: 26px; top: 8px; width: auto; height: auto; z-index: 1;">
<img src="Logo1.gif" onclick="location.href='/'" style="cursor:pointer">
</div>
<br>
<h1>
Queueing theory calculator
</h1> 
		<div class="auto-style4">
			<a href="rcalclite_esp.htm">Español</a><a>
</a></div><div class="auto-style3"><a href="#instructions">Instructions</a></div>
		<form method="post" name="forma">
<p>
<a><font size="3"><font size="3">
</font>
<table id="TABLE2" bgcolor="black" border="0" width="508">
<tbody><tr>
<td class="ts" align="center" width="96">Choose queueing model. </td><td class="th" width="211">
<div align="center">Space for calculations. 
				<br>Eg. insert 2+2 then press Res.


</div>
</td>
<td class="th" width="187">
<p align="center">Data analysis.
			<br>Insert list. Press Analize to get goodness of fit p-value</p>
</td>
</tr><tr>
<td class="ts" width="96">
<input id="1" name="modelo" value="1" onclick="f(forma,this.value)" type="radio">M/M/C<br>
<input id="2" name="modelo" value="2" onclick="f(forma,this.value)" type="radio">M/M/Inf.
<br>
<input id="3" name="modelo" value="3" onclick="f(forma,this.value)" type="radio">M/M/C/K<br>
<input id="4" name="modelo" value="4" onclick="f(forma,this.value)" type="radio">M/M/C/*/M<br>
<input id="Modelo" style="width: 0px; height: 0px;" size="9" name="Modelo">
<input id="LambdaMu" style="width: 0px; height: 0px;" size="9" name="LambdaMu">
</td><td class="tm" width="211">
<font size="3">
<font size="3">
<textarea style="width: 155px; height: 74px;" name="Trab" scrolling="auto"></textarea>
<input id="button2" onclick="evalExp(forma)" value="Res" name="Res" type="button">
</font>
</font>
</td>
<td class="tm" width="187">&nbsp;&nbsp;<textarea style="width: 155px; height: 74px;" name="analisis"></textarea>
<br>
<img src="lambda.gif">
<input name="LM" value="1" onclick="g(forma,this.value)" type="radio">&nbsp;
<img src="mu.gif">
<input name="LM" value="2" onclick="g(forma,this.value)" type="radio">
<input name="Analizar" value="Analize" onclick="analiza(this.form)" type="button">
<br>
<input class="tm" readonly="readonly" name="Pval" style="border-width: 0px; width: 180px; height: 14px;">
</td>
</tr>
</tbody></table>
</font></a></p><p>
</p>
<p>
<table id="TABLE3" background="" bgcolor="black" border="0">
<tbody><tr class="th">
<td>
<strong>
<font size="2">C</font>
</strong>(No. of Servers)</td><td>
<strong>
<font size="2">K</font>
</strong>(Queue capacity)</td><td>
<strong>
<font size="2">M</font>
</strong>(Entities population)</td><td>
<img src="lambda.gif">(incoming rate)</td><td>
<img src="mu.gif">(service rate)</td><td colspan="2" class="ts">&nbsp;<input style="width: 24px; height: 22px;" size="3" value="24" id="hordia" name="hordia">&nbsp;hrs/day&nbsp;</td>
</tr><tr class="tm">
<td>
<input name="Ser" size="6" onchange="evalExp(forma)">
</td><td>
<input name="Cap" size="6" onchange="evalExp(forma)">
</td><td>
<input name="Ent" size="6" onchange="evalExp(forma)">
</td><td>
<input name="Lambda" size="6" onchange="evalExp(forma)"> units <select id="selectLambda" style="left: 2px; top: 32px;" onchange="conv(forma,this.value,this.name)" name="selectLambda">
<option selected="selected" value="-1">any unit/time</option><option value="0">
		in/Day</option><option value="1">in/Hour</option><option value="2">
		in/Min</option><option value="3">in/Sec</option>
</select>
</td><td>
<input name="Mu" size="6" onchange="evalExp(forma)">
		units <select id="selectMu" style="left: 2px;" onchange="conv(forma,this.value,this.name)" name="selectMu">
<option selected="selected" value="-1">any unit/time</option><option value="0">
		out/Day</option><option value="1">out/Hour</option><option value="2">
		out/Min</option><option value="3">out/Sec</option>
</select>
</td><td>
		&nbsp;<input value="Calculate" onclick="compute(forma)" id="button1" name="button1" type="button">
</td><td>
		&nbsp;<input value="Clear Form" onclick="conv(forma,-1,1)" accesskey="b" type="reset">&nbsp;<br>&nbsp;
</td>
</tr>
</tbody></table>
</p><p>
</p>
<table id="TABLE1" bgcolor="black" border="0">
<tbody><tr class="ts">
<td colspan="7">&nbsp;Round to&nbsp;<input id="decimales" style="width: 28px; height: 22px;" size="3" name="decimales" onchange="compute(forma)" value="4">&nbsp;decimal 
places.</td>
</tr>
<tr class="th">
<td>
<img src="ro.gif"> (Server utilization) </td><td>
<strong>
<font size="2">L</font>
</strong>
<br>(Average entities in system) </td><td>
<strong>
<font size="2">Lq</font>
</strong>
<br>(Average entities in queue) </td><td>
<strong>
<font size="2">W</font>
</strong>
<input class="th" id="unidadW" readonly="readonly" name="unidadW" style="border-width: 0px; width: 50px; height: 14px;" size="2">
<br>(Average time spent in system) </td><td>
<strong>
<font size="2">Wq</font>
</strong>
<input class="th" id="unidadWq" style="border-width: 0px; width: 50px; height: 14px;" readonly="readonly" size="2" name="unidadWq">
<br>(Average time waiting in line) </td><td>
<p align="center">
<strong>
<font face="Symbol" size="2">l</font>&#39;</strong>
</p>
</td><td>
<strong>
<font size="2">Pn</font>
</strong>... <strong>
<font size="2">n</font>
</strong>= <input id="n" name="n" style="font-size: xx-small; width: 19px; height: 20px;" size="1" onchange="compute(forma)">(Probability 
	of &#39;<strong>n</strong>&#39; entities being in the system) </td>
</tr><tr class="tm" align="center">
<td>
<input size="9" name="Ro">
</td><td>
<input size="9" name="L">
</td><td>
<input size="9" name="Lq">
</td><td>
<input size="9" name="W">
</td><td>
<input size="9" name="Wq">
</td><td>
<input size="9" name="Lambdap">
</td><td>
<input size="9" name="Pn">
</td>
</tr>
</tbody></table>
<a><font size="3"><br>
<table id="TABLE4" bgcolor="black" border="0">
<tbody><tr>
<td class="tg">
<p>
<strong><a title="Probability that the entities will spend more than 't' time (service rate units are used here)">P</a></strong>(time in queue &lt;= <input id="tq" style="width: 23px; height: 22px;" size="2" onchange="compute(forma)" name="tq" value="0">
<input id="unidadtq" class="tg" style="border-width: 0px;" readonly="readonly" size="10" name="unidadtq" value=")=">
</p>
</td><td class="tm">
<p align="center">
<input id="Tq" size="9" onchange="compute(forma)" name="Tq">
</p>
</td>
</tr><tr>
<td class="tg">
<p>
<strong>P</strong>(time in system &lt;= 
<input id="t" style="width: 23px; height: 22px;" size="2" onchange="compute(forma)" name="t" value="0">
<input id="unidadt" class="tg" style="border-width: 0px;" readonly="readonly" size="10" name="unidadt" value=")=">
</p>
</td><td class="tm">
<p align="center">
<input id="T" size="9" onchange="compute(forma)" name="T">
</p>
</td>
</tr>
</tbody></table><br>
</font></a>
  <h3 class="auto-style3">
  <a name="instructions"></a>Instructions – How to use the calculator
  </h3>

  <div class="post-header">

  </div>


  <div style="font-family: Verdana,sans-serif;">          <style type="text/css">
p { margin-bottom: 0.08in; }
.auto-style3 {
	text-align: left;
}
														  .auto-style4 {
															  text-align: right;
														  }
														  </style>   </div>
  <div style="margin-bottom: 0in;"> </div>
  <div style="margin-bottom: 0in;" class="auto-style3">The following instructions are meant for the <a href="http://www.supositorio.com/rcalc/rcalclite.htm">
	  Queuing Theory Calculator</a> at supositorio.com</div>
  <div style="margin-bottom: 0in;" class="auto-style3"><br>
  </div>
  <div style="margin-bottom: 0in;" class="auto-style3"><b>Quick Start</b></div>
  <div style="margin-bottom: 0in;" class="auto-style3"><b>&nbsp;</b> </div>
  <div style="margin-bottom: 0in;" class="auto-style3">If you are familiar with queueing theory, and 
	  you want to make fast calculations then this guide might help you.</div>
  <div style="margin-bottom: 0in;" class="auto-style3"><br>
  </div>
  <ol>
<li><div style="margin-bottom: 0in;" class="auto-style3">Choose the queuing model you want to 
	calculate. M/M/C (or M/M1 if you put C=1), M/M/Inf, M/M/C/K, or M/M/C/*/M</div></li><li>
	  <div style="margin-bottom: 0in;" class="auto-style3">
		  Then chose the number of servers in your system (C), the maximum 
		  number of entities that your queue can hold (K), and the maximum 
		  number of entities that exist in your entire population (M).</div></li><li>
	  <div style="margin-bottom: 0in;" class="auto-style3">
		  Choose the incoming (Lambda) and service rates (Mu). Notice that there 
		  is an option for units, in practice you sometimes get the incoming and 
		  the service rates with different units. This calculator helps with 
		  that by converting the units of Lambda to those of Mu. You can also 
		  input the hours a day that your system should work. Eg. A bank that 
		  works from 8 a.m. to 3 p.m. will have to consider 7 hours per day in 
		  their calculations.</div></li><li>
	  <div style="margin-bottom: 0in;" class="auto-style3">
		  Press Calculate.</div></li><li>
	  <div style="margin-bottom: 0in;" class="auto-style3">Get 
		  the answers for server utilisation (Ro), Average entities in the whole 
		  system (L), Average entities in queue (Lq), Average time an entity 
		  spends in the system (W), Average time an entity waits in line to be 
		  served (Wq), Lambda prime (Lambdap), the probability that there would 
		  be exactly &#39;n&#39; entities in the system at a certain point (Pn) (modify 
		  the value of &#39;n&#39; as desired), the probability that an entity will 
		  spend in line exactly or less than &#39;n&#39; units of time (Tq) and the 
		  probability that an entity will spend exactly or less than &#39;n&#39; units 
		  of time in total in the system (T).</div></li><li>
	  <div style="margin-bottom: 0in;" class="auto-style3">
		  You can make quick calculations on the given “space for calculations” 
		  by inputing the desired formula an then pressing the &#39;Res&#39; button. 
		  E.g. input &#39;2+2&#39; then [Res] it will display 4. Note: al the above 
		  symbols in &#39;( )&#39;, for instance &#39;C&#39;, &#39;K&#39;, &#39;M&#39;, etc. can also be used. 
		  E.g. &#39;T^2+Ro&#39; Should give you an answer, or &#39;1-T&#39; should give you the 
		  probability that an entity will spend more than &#39;T&#39; units of time.</div></li><li>
	  <div style="margin-bottom: 0in;" class="auto-style3">
		  I hope it helps!</div>
	  </li>
  </ol>
			<div class="auto-style3">
  <a><br>
  <font size="3">
  <br>
	Help us to promote this tool by adding a link to this site in yours: <input value="&lt;a href=&quot;http://www.supositorio.com/rcalc/rcalclite.htm&quot;&gt;Queueing Theory Calculator&lt;/a&gt;"> 
	Thank you!

<br>
<br>
	Please visit our sponsoring site: </font></a><a href="http://www.dandoydando.mx"><font size="3">
	dandoydando.mx </font></a><font size="3"> &quot;materializando tus compras por 
	internet&quot;
<br />
<br>
  <div style="margin-bottom: 0in;" class="auto-style3"><strong>Do you have any 
	  comments, suggestions, complaints, bug reports, etc?</strong> <br />
	  Please post your comment below.</div>
				<BR></font>
			
</form>


</div>
<div style="height:auto; width:auto">
<iframe src="iframe.php" width="100%" height="500px" scrolling="no" marginwidth="0px" frameborder="0">
</iframe>
</div>
<br />
<br />
<br />
</div>
</div>
</body>

</html>