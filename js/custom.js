$(document).ready(function() {		
	$('#callback-header-btn').magnificPopup({
		type: 'inline'
  // other options
	});

	$('#callback-footer-btn').magnificPopup({
		type: 'inline'
  // other options
	});
});




	//  Validation form (not empty)


function validateFormZvonok() {

		$('#zvonok').each(function(){
	    	// Объявляем переменные (форма и кнопка отправки)
	    	var form = $(this),
	    	btn = form.find('button[type="submit"]');

	    	// Добавляем каждому проверяемому полю, указание что поле пустое
	    	form.find('.form-input').addClass('empty-field');

	    	// Функция проверки полей формы
	    	function checkInput(){
	    		form.find('.form-input').each(function(){
	    			if($(this).val() != ''){
			          	// Если поле не пустое удаляем класс-указание
			          	$(this).removeClass('empty-field');
			          } else {
			          	// Если поле пустое добавляем класс-указание
			          	$(this).addClass('empty-field');
			          }
			      });
	    	}

		    // Функция подсветки незаполненных полей
		    function lightEmpty(){
		    	form.find('.empty-field').addClass('error');
		    }

		    form.find('.empty-field').on('change', function(){
		    	if ($(this).val() != '') {
		    		$(this).removeClass('empty-field').removeClass('error');
		    	}
		    });

		    // Проверка в режиме реального времени
		    setInterval(function(){
		      	// Запускаем функцию проверки полей на заполненность
		      	checkInput();
		      	// Считаем к-во незаполненных полей
		      	var sizeEmpty = form.find('.empty-field').size();
		      	// Вешаем условие-тригер на кнопку отправки формы
		      	if(sizeEmpty > 0) {
		      		if(btn.hasClass('disabled')){
		      			return false
		      		} else {
		      			btn.addClass('disabled')
		      		}
		      	} else {
		      		btn.removeClass('disabled')
		      	}

		      }, 1500);

		    // Событие клика по кнопке отправить
		    btn.click(function(){
		    	if($(this).hasClass('disabled')) {
		        	// подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
		        	lightEmpty();
		        	return false
		        } else {
		        	// Все хорошо, все заполнено, отправляем форму
		        	form.submit();
		        }
		    });
		});
	};

