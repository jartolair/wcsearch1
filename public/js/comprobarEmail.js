function comprobar(){
	let email=document.getElementById("email").value;
	//var re = /[a-z-_\.]*@.+\.+([a-z]{2,5})$/;
	/*if(re.test(email)){
		document.getElementById("noErrorEmail").style.display = "block";
		document.getElementById("errorEmail").style.display = "none";
	}else{
		document.getElementById("errorEmail").style.display = "block";
		document.getElementById("noErrorEmail").style.display = "none";
	}*/
	let valido=true;
	let a=email.split("@");
	if(a.length!=2){
		valido=false;
	}else{
		let punto=a[1].lastIndexOf(".");
		if (punto>=2 && punto<=a[1].length-3 && punto>=a[1].length-6 ){
			let noPer='()<>,;:"[] ç%&';
			for (let i=0; i<email.length;i++){
				let p=noPer.indexOf(email[i]);
				if (p!=-1) {
					valido=false;
				}
			}
		}else{
			valido=false;
		}
	}
	if (valido) {
		document.getElementById("errorEmail").style.display = "none";
		document.getElementById('submit').disabled = false;
	}else{
		document.getElementById("errorEmail").style.display = "block";
		document.getElementById('submit').disabled = true;
	}
}

function comprobarTel(){
	let tel=document.getElementById("tel").value;

	tel=tel.replace(/ /g, "");
	tel=tel.replace(/-/g,"");
	n=parseInt(tel);
	if (tel.length==9 && !isNaN(n)){
		document.getElementById("errorTel").style.display = "none";
	}else{
		document.getElementById("errorTel").style.display = "block";
	}
}

jQuery(function() {
	jQuery( "#registro" ).validate({
		rules: {
			nif: {
				minlength: 9,
				maxlength: 9,
			},
			nombre: {
				required: true,
				minlength: 2,
				maxlength: 20
			},
			apellidos: {
				required: true,
				minlength: 2,
				maxlength: 40
			},
			calle: {
				minlength: 2,
				maxlength: 40
			},
			postal: {
				required: true,
				minlength: 5,
				maxlength: 5,
				number: true
			},
			sexo:{
				required: true
			},
			municipio:{
				required: true
			}
		},
		messages:{
			nif:{
				minlength:"Demasido corta",
				maxlength:"Demasido largo",
			},
			nombre:{
				required:"Campo obligatorio",
				minlength:"Minimo 2 caracteres",
				maxlength:"Demasido largo"
			},
			apellidos:{
				required:"Campo obligatorio",
				minlength:"Minimo 2 caracteres",
				maxlength:"Demasido largo"
			},
			calle:{
				minlength:"Minimo 2 caracteres",
				maxlength:"Demasido largo"
			},
			postal:{
				required:"Campo obligatorio",
				minlength:"Introduce los 5 numeros",
				maxlength:"Introduce los 5 numeros",
				number:"Tiene que ser un numero"
			},
			sexo:{
				required:"Campo obligatorio",
			},
			municipio:{
				required:"Campo obligatorio",
			}


		}
   });
});

function buscarMunicipio(codigo){
	let m=document.getElementById("municipio");
	switch(codigo){
		case "20720":
			m.value="azkoiti";
			break;
		case "20730":
			m.value="azpeiti";
			break;
		case "20740":
			m.value="zestoa";
			break;
		case "20750":
			m.value="zumaia";
			break;
		case "20001":case "20004":case "20007":case "20010":case "20013":case "20016":
		case "20002":case "20005":case "20008":case "20011":case "20014":case "20017":
		case "20003":case "20006":case "20009":case "20012":case "20015":case "20018":
			m.value="donosti";
			break;

	}
}