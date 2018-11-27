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
	if (n.toString().length==9 && !isNaN(n)){
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
			apellidos: {
				required: true,
				minlength: 2,
				maxlength: 40
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

		}
   });
});