$( document ).ready(function() {
    $('#f0').change(function(){
        var a = $('#f0').val();
		var b = $('#f1').val();
		
        $('#result').val(a*b);
    });
});