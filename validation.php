<script type="text/javascript">
	<!--
	function AllowAlphabet(){
			
			    if (!myform.tele.value.match(/^[0-9]+$/) && myform.tele.value !="")
               {
                    myform.tele.value="";
                    myform.tele.focus(); 
                    alert("Please Enter only Number value for Phone/Telephone Number");
               }
			
			 if (!myform.fname.value.match(/^[a-zA-Z]+$/) && myform.fname.value !="")
               {
                    myform.fname.value="";
                    myform.fname.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
			    if (!myform.lname.value.match(/^[a-zA-Z]+$/) && myform.lname.value !="")
               {
                    myform.lname.value="";
                    myform.lname.focus(); 
                    alert("Please Enter only alphabets for Last Name");
               }
			    if (!myform.qual.value.match(/^[a-zA-Z]+$/) && myform.qual.value !="")
               {
                    myform.qual.value="";
                    myform.qual.focus(); 
                    alert("Please Enter only alphabets for Qualification");
               }
			   if (!myform.age.value.match(/^[0-9]+$/) && myform.age.value !="")
               {
                    myform.age.value="";
                    myform.age.focus(); 
                    alert("Please Enter only Number value for age Value");
               }
			  
			  
		}
		
	function check() {
    if(document.getElementById('password').value === document.getElementById('confirm_password').value) {
	 $('#message').html('Matching').css('color', 'green');
    } else {
        $('#message').html('Not Matching').css('color', 'red');
    }

   
}
	</script>	
	