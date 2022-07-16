
function success(){
alert("Congratulations You have successfully registered");
}
function lettersOnly(input){
	var regex=/[^a-z]/gi;
	input.value=input.value.replace(regex,"");
}
function digitOnly(input){
	var regex=/[^0-9]/;
	input.value=input.value.replace(regex,"");
}
	
