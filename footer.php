</div> <!-- /wrapper -->

<footer>
	<p>Copyright 2018</p>
</footer>


<script src="js/jquery-3.2.1.js"></script>
<script src="semantic/dist/semantic.min.js"></script>

<script type="text/javascript">
	$('.ui.radio.checkbox')
		.checkbox()
	;
</script>
<script type="text/javascript">
	$('.message .close')
	  .on('click', function() {
	    $(this)
	      .closest('.message')
	      .transition('fade')
	    ;
	  })
	;
</script>
</body>
</html>
