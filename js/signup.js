var pwd;
function validate_cadd(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert("enter company's address");return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_com(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert("enter company's name");return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_id(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert("enter id");return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_pw(field,alerttxt)
{

with (field)
  {
  if (value==null||value=="")
    {
    alert("Password must be 6-14 characters long");return false;
    }
  else if(value.length<6 || value.length>14)
     	{
     		alert("Password must be 6-14 characters long");
     		return false;
     	}
   
   else
   		{	
			return true;
		}
  }
}


function validate_number(field,alerttxt)
{ 
with(field)
 {
  if(value==null||value=="")
    {
    alert("please enter number");return false;
    }
  else
    {
       if(isNaN(value))
       {
        alert("Not a Phone number");
       return false;
        }
     else
     {
     	if(value.length!=10)
     	{
     		alert("Not a Valid Phone Number");
     		return false;
     	}
     	else
     	{
       		return true;
       	}
       }
    }
  }
}


function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert("Not a valid e-mail address!");return false;}
  else {return true;}
  }
}

function validate_form(thisform)
{
with (thisform)
	{
	if(validate_email(email,"Not a valid e-mail address!")==false)
		{
		email.focus();return false;
		}
	if (validate_number(name,"please enter number")==false)
		{
		num.focus();
		return false;
		}
	if (validate_com(num,"enter company's name")==false)
		{
		cname.focus();return false;
		}
  	if (validate_cadd(cadd,"enter company's address")==false)
  		{
		cadd.focus();
		return false;
		}
	if (validate_id(com_pw,"Enter id")==false)
  		{
		com_id.focus();
		return false;
		}

	if (validate_pw(com_pw,"Password must be 6-14 characters long")==false)
  		{
		cadd.focus();
		return false;
		}
	

	}
}

