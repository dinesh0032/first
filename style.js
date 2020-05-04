function Reset()
			{
				document.myform.fname.value="";
				document.myform.lname.value="";
				document.myform.email.value="";
				document.myform.city.value="";
				document.myform.state.value="";
				document.myform.country.value="";
				document.myform.zip.value="";
				document.myform.pass.value="";
				document.myform.cpass.value="";

			}
function Submit()
			{
				var a=document.myform.fname.value;
				var b=document.myform.lname.value;
				var c=document.myform.email.value;
				var d=document.myform.city.value;
				var e=document.myform.state.value;
				var f=document.myform.country.value;
				var g=document.myform.zip.value;
				var h=document.myform.pass.value;
				var i=document.myform.cpass.value;
				var j=/n\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				// validation
				if (a=="") 
					{
					    alert("Enter First Name..!!");
					}
				else if (b=="") 
					{
						alert("Enter Last Name..!!");
					}
				// Email Id validation
				else if (c=="") 
					{
						alert("Enter email Id ..!!");
					}
				else if(!c.match(j)) 
					{

						alert("Invalid Email id..!!");
					}
				else if (d=="") 
					{
						alert("Enter City..!!");
					}
				else if (e=="") 
					{
						alert("Enter State..!!");
					}
				else if (f=="") 
					{
						alert("Select country..!!");
					}
				else if (g=="") 
					{
						alert("Enter zipcode..!!");
					}
				else if (h=="") 
					{
						alert("Enter Password..!!");
					}
				else if (i=="") 
					{
						alert("Enter confirm password..!!");
					}
				else if(h!=i) 
					{
						alert("Password and confirm password are not matching..!!");
					}
				else
					{ 
						alert("Sucessfully Submitted..!!");
					}
				document.myform.fname.value="";
				document.myform.lname.value="";
				document.myform.email.value="";
				document.myform.city.value="";
				document.myform.state.value="";
				document.myform.country.value="";
				document.myform.zip.value="";
				document.myform.pass.value="";
				document.myform.cpass.value="";
			}