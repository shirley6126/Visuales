class suma{
    constructor(num1,num2){
        this.num1=num1;
        this.num2=num2;   
    }

    sumita(){
        return parseInt(this.num1) + parseInt(this.num2); 
    }
}
class resta{
    constructor(num1,num2){
        this.num1=num1;
        this.num2=num2;   
    }

    restita(){
        return parseInt(this.num1) - parseInt(this.num2); 
    }
}

function sumar(){
	var num1=document.getElementById("txtnum1").value;
	var num2=document.getElementById("txtnum2").value;
    var op1=new suma(num1,num2);
	alert("La suma es: "+op1.sumita());
    document.getElementById("resultado").innerHTML="La suma es: "+op1.sumita();
}

function restar(){
	var num1=document.getElementById("txtnum1").value;
	var num2=document.getElementById("txtnum2").value;
    var op1=new resta(num1,num2);
	alert("La resta es: "+op1.restita());
    document.getElementById("resultado").innerHTML="La resta es: "+op1.restita();
}