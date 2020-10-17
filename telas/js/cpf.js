function TestaCPF(strCPF) {
				var Soma;
				var Resto;
				Soma = 0;
				
				if (strCPF == "00000000000") return "CPF INVÁLIDO. Tente novamente";
				if (strCPF == "11111111111") return "CPF INVÁLIDO. Tente novamente";
				if (strCPF == "22222222222") return "CPF INVÁLIDO. Tente novamente";
				if (strCPF == "33333333333") return "CPF INVÁLIDO. Tente novamente";
				if (strCPF == "44444444444") return "CPF INVÁLIDO. Tente novamente";
        if (strCPF == "55555555555") return "CPF INVÁLIDO. Tente novamente";
        if (strCPF == "66666666666") return "CPF INVÁLIDO. Tente novamente";
        if (strCPF == "77777777777") return "CPF INVÁLIDO. Tente novamente";
        if (strCPF == "88888888888") return "CPF INVÁLIDO. Tente novamente";
         if (strCPF == "99999999999") return "CPF INVÁLIDO. Tente novamente";
				 
				for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
			  
				Resto = (Soma * 10) % 11;
			   
				if ((Resto == 10) || (Resto == 11))  Resto = 0;
				
				if (Resto != parseInt(strCPF.substring(9, 10)) ) {
					window.alert("CPF inválido. Tente novamente");
					strCPF.value = "";
					strCPF.focus();
					return false;
				}
					// return "CPF INVÁLIDO";
			   
				Soma = 0;
				
				for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
				
				Resto = (Soma * 10) % 11;
			   
				if ((Resto == 10) || (Resto == 11))  Resto = 0;
				
				if (Resto != parseInt(strCPF.substring(10, 11) ) ) return "CPF INVÁLIDO";
				
				return "CPF VÁLIDO";
			}
			
			//var strCPF = "12345678909";
			//alert(TestaCPF(strCPF));