
<script type="text/javascript">
	function validate(){
		if(document.getElementById('sel_sub').value=="select" || document.getElementById('percent').value=="")
			alert("Fill all the details.");
		else 
			myform.submit();
		
	}
</script>
*select subject--<select  id="sel_sub" name="sub">
				<option  selected disabled>select</option>
			</select><br><br>
			*short percentage--<input type="text" name="percent" id="percent" required>%

			<input type="button" name="" value="CHECK" id="go" onclick="validate()">
		</form>
	</body>
	</html>