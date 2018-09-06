<script>
	var message,result,Charcter=30;
	message=document.getElementById("message");
	result=document.querySelector("#result");
	message.onkeydown=charcterControl;
	message.onkeyup=charcterControl;
	function charcterControl(){
		var messagelength=this.value.length;
		if (Charcter>=messagelength) {
			var lastlength=Charcter-messagelength;
			result.innerHTML=lastlength+" Karakter kaldi";

		}else{
			this.value=this.value.substr(0,Charcter);
		}
	}


</script>