$(function() {
	$.validator.addMethod("pattern", function(value, element) {
		return this.optional(element) || /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/.test(value);
	});

	$('#form').validate({
		rules: {
			nome: {
				required: true,
				minlength: 3,
				maxlength: 30
			},
			email: {
				required: true,
				email: true
			},
			nascimento: {
				required: true,
				pattern: true
			},
			senha: {
				required: true,
				minlength: 6,
			},
			confirmasenha: {
				equalTo: "#senha"
			}
		},
		messages: {
			nome: {
				required: 'Campo obrigatorio.',
				minlength: 'O campo precisa ter no minimo 3 caracter.',
				maxlength: 'O campo precisa ter no maximo 30 caracter.'
			},
			email: {
				required: 'Campo obrigatorio.',
				email: 'Informe um e-mail valido.'
			},
			nascimento: {
				required: 'Campo obrigatorio.',
				pattern: 'Formato de data invalido.'
			},
			senha: {
				required: 'Campo obrigatorio.',
				minlength: 'A senha precisa ter no minimo 6 caracter.',
			},
			confirmasenha: 'A senha não é identica.'
		}
	});
});