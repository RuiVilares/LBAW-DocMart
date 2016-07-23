function areInvalidDigits(text, digits) {
	return isNaN(Number(text)) || text.length != digits;
}

function isFieldFilled(text) {
	return text != null && text.length > 0;
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(function(){
	$("#submeter").click(function(e) {
		if (!(isFieldFilled($("#telemovel").val()) && isFieldFilled($("#contribuinte").val())
													&& isFieldFilled($("#data_de_nascimento").val())
													&& isFieldFilled($("#password").val())
													&& isFieldFilled($("#repetirPassword").val())
													&& isFieldFilled($("#username").val())
													&& isFieldFilled($("#email").val())
													&& validateEmail($("#email").val())
													&& isFieldFilled($("#nome").val())
													&& isFieldFilled($("#morada").val()))) {
			return true;
		}
		//9 phone number digits
		if (areInvalidDigits($("#telemovel").val(), 9)) {
			swal('Erro', 'Número de telefone incorreto. Apenas podem ser 9 números.', 'error');
			return false;
		}

		if (areInvalidDigits($("#contribuinte").val(), 9)) {
			swal('Erro', 'Número de contribuinte incorreto. Apenas podem ser 9 números.', 'error');
			return false;
		}

		var from = $("#data_de_nascimento").val().split("/");
		var f = new Date(from[2], from[1] - 1, from[0]);
		if (f == "Invalid Date") {
			swal('Erro', 'Formato da data incorreto. O formato correto é dia/mês/ano.', 'error');
			return false;
		}
		
		if ($("#password").val() != $("#repetirPassword").val() || $("#password").val().length < 0) {
			swal('Erro', 'Verifique se introduziu uma password e se uma é igual à outra.', 'error');
			return false;
		}
		$("#data_de_nascimento").val(from[2] + "-" + from[1] + "-" + from[0]);

		return true;
	});
});