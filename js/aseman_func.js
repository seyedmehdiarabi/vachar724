function aseman_onload_test()
{
	if (onload_array[0]==1)
		check_date();
	if (onload_array[1]==1)
		showdate(today_y,today_m,today_d);
	if (onload_array[2]==1)
		move_first();
		
}
//-------------------------------------------------------------
function aseman_test()
{
	var i=0;
	test=1;
	if (test_array[0]==1)
		test_empty();
	if (test)	
		if (test_array[1]==1)
			test_eqal();
			

if (test)
	return true;
else
	return false;
}
//-------------------------------------------------------
function test_empty()
{
	var i=0;
	for (i=0;i<no_empty.length;i++)
	{
	if (document.form1.elements[no_empty[i]].value==''||document.form1.elements[no_empty[i]].value=='-1')
	{
		test=0;
		alert("لطفا گزینه های ستاره دار را تکمیل کنید");
		document.form1[no_empty[i]].focus();
		break;
	}
	}
}
//-----------------------------------------------
function test_eqal()
{
	var i=0;
	if (document.form1.elements[eqal[0]].value!=document.form1.elements[eqal[1]].value)
	{
		test=0;
		alert("رمز عبور و تکرار آن یکسان نیستند");
		document.form1[eqal[0]].focus();
	}
}
//-----------------------------------------------
checked=false;
function check_date()
{
	var date_temp=today_date_j;
	$(".dirooz").hide();
	$(".emrooz").hide();
	$(".farda").hide();
	$(".passfarda").hide();
	while (date_temp>10)
	{
		date_temp=Math.floor(today_date_j/10);
		rem=today_date_j-((date_temp)*10);
		today_date_j=date_temp;
		switch (rem)
		{
			case 1:
				$(".dirooz").show();
				break;			
			case 2:
				$(".emrooz").show();
				break;
			case 3:
				$(".farda").show();
				break;
			case 4:
				$(".passfarda").show();
				break;
							
		}// of switch
	}// of while
		switch (date_temp)
		{
			case 1:
				$(".dirooz").show();
				break;			
			case 2:
				$(".emrooz").show();
				break;
			case 3:
				$(".farda").show();
				break;
			case 4:
				$(".passfarda").show();
				break;
							
		}// of switch
	
}
//------------------------------------------------
function check() 
{
	 var aa= document.getElementById('frm_grid');
 
	 if (checked == false)
	      checked = true
      else
         checked = false
	for (var i =0; i < aa.elements.length; i++) 
		 aa.elements[i].checked = checked;
}
//-----------------------------------------------
function showdate(y,m,d) { 
week= new Array("&#1610;&#1603;&#1588;&#1606;&#1576;&#1607;","&#1583;&#1608;&#1588;&#1606;&#1576;&#1607;","&#1587;&#1607; &#1588;&#1606;&#1576;&#1607;","&#1670;&#1607;&#1575;&#1585;&#1588;&#1606;&#1576;&#1607;","&#1662;&#1606;&#1580;&#1588;&#1606;&#1576;&#1607;","&#1580;&#1605;&#1593;&#1607;","&#1588;&#1606;&#1576;&#1607;") 
//months = new Array("&#1601;&#1585;&#1608;&#1585;&#1583;&#1610;&#1606;","&#1575;&#1585;&#1583;&#1610;&#1576;&#1607;&#1588;&#1578;","&#1582;&#1585;&#1583;&#1575;&#1583;","&#1578;&#1610;&#1585;","&#1605;&#1585;&#1583;&#1575;&#1583;","&#1588;&#1607;&#1585;&#1610;&#1608;&#1585;","&#1605;&#1607;&#1585;","&#1570;&#1576;&#1575;&#1606;","&#1570;&#1584;&#1585;","&#1583;&#1610;","&#1576;&#1607;&#1605;&#1606;","&#1575;&#1587;&#1601;&#1606;&#1583;"); 
months = new Array("01","02","03","04","05","06","07","08","09","10","11","12");
a = new Date(); 
day=d;
month=m;
year=y;
if (year== 0){year=2000;} 
if (year<900){year +=1900;} 
y=1; 
for(i=0;i<3000;i+=4) { 
if (year==i) {y=2;} 
} 
for(i=1;i<3000;i+=4) { 
if (year==i) {y=3;} 
} 
if (y==1) { 
year -= ( (month < 3) || ((month == 3) && (day < 21)) )? 622:621; 
switch (month) { 
case 1: (day<21)? (month=10, day+=10):(month=11, day-=20); break; 
case 2: (day<20)? (month=11, day+=11):(month=12, day-=19); break; 
case 3: (day<21)? (month=12, day+=9):(month=1, day-=20); break; 
case 4: (day<21)? (month=1, day+=11):(month=2, day-=20); break; 
case 5: 
case 6: (day<22)? (month-=3, day+=10):(month-=2, day-=21); break; 
case 7: 
case 8: 
case 9: (day<23)? (month-=3, day+=9):(month-=2, day-=22); break; 
case 10:(day<23)? (month=7, day+=8):(month=8, day-=22); break; 
case 11: 
case 12:(day<22)? (month-=3, day+=9):(month-=2, day-=21); break; 
default: break; 
} 
} 
if (y==2) { 
year -= ( (month < 3) || ((month == 3) && (day < 20)) )? 622:621; 

switch (month) { 
case 1: (day<21)? (month=10, day+=10):(month=11, day-=20); break; 
case 2: (day<20)? (month=11, day+=11):(month=12, day-=19); break; 
case 3: (day<20)? (month=12, day+=10):(month=1, day-=19); break; 
case 4: (day<20)? (month=1, day+=12):(month=2, day-=19); break; 
case 5: (day<21)? (month=2, day+=11):(month=3, day-=20); break; 
case 6: (day<21)? (month=3, day+=11):(month=4, day-=20); break; 
case 7: (day<22)? (month=4, day+=10):(month=5, day-=21); break; 
case 8: (day<22)? (month=5, day+=10):(month=6, day-=21); break; 
case 9: (day<22)? (month=6, day+=10):(month=7, day-=21); break; 
case 10:(day<22)? (month=7, day+=9):(month=8, day-=21); break; 
case 11:(day<21)? (month=8, day+=10):(month=9, day-=20); break; 
case 12:(day<21)? (month=9, day+=10):(month=10, day-=20); break; 
default: break; 
} 
} 
if (y==3) { 
year -= ( (month < 3) || ((month == 3) && (day < 21)) )? 622:621; 
switch (month) { 
case 1: (day<20)? (month=10, day+=11):(month=11, day-=19); break; 
case 2: (day<19)? (month=11, day+=12):(month=12, day-=18); break; 
case 3: (day<21)? (month=12, day+=10):(month=1, day-=20); break; 
case 4: (day<21)? (month=1, day+=11):(month=2, day-=20); break; 
case 5: 
case 6: (day<22)? (month-=3, day+=10):(month-=2, day-=21); break; 
case 7: 
case 8: 
case 9: (day<23)? (month-=3, day+=9):(month-=2, day-=22); break; 
case 10:(day<23)? (month=7, day+=8):(month=8, day-=22); break; 
case 11: 
case 12:(day<22)? (month-=3, day+=9):(month-=2, day-=21); break; 
default: break; 
} 
} 
var shamsi_date=year+"/"+months[month-1]+"/"+ day;
//alert(shamsi_date);
document.getElementById(f_date_name).value=shamsi_date;
} 
//-----------------------------------------------
function move_first()
{

	document.form1[first_f].focus();
}
//----------------------------------------------------------------------
