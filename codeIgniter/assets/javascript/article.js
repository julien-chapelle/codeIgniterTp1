$(function () {

	$('#modal_delete_article').on('hidden.bs.modal', function () {
		// Efface le contenu de la fenêtre modale à la fermeture
		$('#deleteModalContent').html('');
	});
	$('#menu_delete_article').click(function () {
		var delete_article_url = $(this).attr('href');
		$.ajax({
			url: delete_article_url,

		}).done(function (data) {
			$('#deleteModalContent').html(data);
			$('#cancel_delete').click(function () {
				$('#modal_delete_article').modal('hide');
				return false;
			});
			$('#modal_delete_article').modal('show');
		});
		return false;
    });

    $('#modal_publish_article').on('hidden.bs.modal', function () {
		// Efface le contenu de la fenêtre modale à la fermeture
		$('#publishModalContent').html('');
	});
	$('#menu_publish_article').click(function () {
		var publish_article_url = $(this).attr('href');
		$.ajax({
			url: publish_article_url,

		}).done(function (data) {
			$('#publishModalContent').html(data);
			$('#cancel_delete').click(function () {
				$('#modal_publish_article').modal('hide');
				return false;
			});
			$('#modal_publish_article').modal('show');
		});
		return false;
    });
    
});
