$(document).ready(() => {
	
	$('#passeador').on('click', () => {
		//$('#pagina').load('documentacao.html')

		/*
		$.get('documentacao.html', data => { 
			$('#pagina').html(data)
		})
		*/
		$.post('cadastro_passeador.php', data => { 
			$('#pagina').html(data)
		})
	})

	$('#suporte').on('click', () => {
		//$('#pagina').load('suporte.html')

		/*
		$.get('suporte.html', data => { 
			$('#pagina').html(data)
		})
		*/
		$.post('suporte.html', data => { 
			$('#pagina').html(data)
		})
	})

	// ----------------------------------------

	$('#passeios').on('click', () => {

		$.post('passeios.php', data => { 
			$('#pagina').html(data)
		})
	})


	//ajax
	$('#competencia').on('change', e => {

		let competencia = $(e.target).val()
		
		$.ajax({
			type: 'GET',
			url: 'app.php',
			data: `competencia=${competencia}`, //x-www-form-urlencoded
			dataType: 'json',
			success: dados => { 
				$('#numeroVendas').html(dados.numeroVendas)
				$('#totalVendas').html(dados.totalVendas)
			},
			error: erro => { console.log(erro) }
		})

		//método, url, dados, sucesso, erro
	})
})

// BOTÃO VOLTAR AO TOPO
$(function(){
	$('.back-to-top').hide();

	$(window).scroll(function(){
		if ($(this).scrollTop() > 210) {
			$('.back-to-top').fadeIn();
		}else{
			$('.back-to-top').fadeOut();
		}
	});
	$('.back-to-top').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 400);
	});
});