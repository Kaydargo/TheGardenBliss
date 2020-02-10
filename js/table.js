var pSeason = document.getElementById("season").getAttribute("data-name");
var harvest = document.getElementById("harvest").getAttribute("data-name");


var str = pSeason;
var array = str.split(", ");

var strh = harvest;
var arrayH = strh.split(", ");

for(var j = 0; j <= 11; j++)
{ 
  if(arrayH[j] === "January")
  {
    document.getElementById('12').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "February"){
    document.getElementById('13').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "March"){
    document.getElementById('14').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "April"){
    document.getElementById('15').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "May"){
    document.getElementById('16').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "June"){
    document.getElementById('17').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "July"){
    document.getElementById('18').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "August"){
    document.getElementById('19').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "September"){
    document.getElementById('20').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "October"){
    document.getElementById('21').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "November"){
    document.getElementById('22').style.backgroundColor="#ff9c2b";
  }
  else if(arrayH[j] === "December"){
    document.getElementById('23').style.backgroundColor="#ff9c2b";
  }
  else{

  }
} 


for(var i = 0; i <= 11; i++)
{ 
  if(array[i] === "January"){
    document.getElementById('0').style.backgroundColor="#55a635";
  }
  else if(array[i] === "February"){
    document.getElementById('1').style.backgroundColor="#55a635";
  }
  else if(array[i] === "March"){
    document.getElementById('2').style.backgroundColor="#55a635";
  }
  else if(array[i] === "April"){
    document.getElementById('3').style.backgroundColor="#55a635";
  }
  else if(array[i] === "May"){
    document.getElementById('4').style.backgroundColor="#55a635";
  }
  else if(array[i] === "June"){
    document.getElementById('5').style.backgroundColor="#55a635";
  }
  else if(array[i] === "July"){
    document.getElementById('6').style.backgroundColor="#55a635";
  }
  else if(array[i] === "August"){
    document.getElementById('7').style.backgroundColor="#55a635";
  }
  else if(array[i] === "September"){
    document.getElementById('8').style.backgroundColor="#55a635";
  }
  else if(array[i] === "October"){
    document.getElementById('9').style.backgroundColor="#55a635";
  }
  else if(array[i] === "November"){
    document.getElementById('10').style.backgroundColor="#55a635";
  }
  else if(array[i] === "December"){
    document.getElementById('11').style.backgroundColor="#55a635";
  } 
  else{

  }
}

