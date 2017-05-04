$(".number_calc").keyup(function(){
	var input = $(this).val();
	console.log(input);
	var value_calc = $(this).parent().prev().text();
	console.log(value_calc);
	var result_value = value_calc*input;
	console.log(result_value);
	if ($.isNumeric(result_value)) {
		$(this).parent().next().text(result_value + " грн");
	} else {
		$(this).parent().next().text('Введите число');
}
});
$("#calculate").click(function(){
	var summaResult = 0;
	$(".accordion li").each(function(i){
			$(this).find('.container').each(function(j){
				var itemResult = parseInt($(this).find('.result').text());
				if (itemResult > 0) {
				summaResult += itemResult;
				}
			});
		});
	$(".summa-result").text(summaResult + ' грн');
});