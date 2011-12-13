<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-color.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#navigation a").hover(
			function() {
				$(this).animate({ backgroundColor: "#babfcb" }, 300);
			},
			function() {
				$(this).animate({ backgroundColor: "#9ca0aa" }, 300);
		});
	});
</script>
