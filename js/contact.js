function validate_form(thisform)
{
with (thisform)
  {
  if (validate_name(con_name,"enter your first name")==false)
  	{
	con_name.focus();
  	return false;
	}
  if (validate_email(con_email,"Not a valid e-mail address!")==false)
  	{
	con_email.focus();
	return false;
	}
  if (validate_number(con_num,"please enter number")==false)
  	{
	con_num.focus();
	return false;
	}
  if (validate_mess(con_mess,"enter company's name")==false)
  	{
	con_mess.focus();
	return false;
	}
  }
}


function validate_name(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert("enter your name");
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

function validate_mess(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert("enter Message");return false;
    }
  else
    {
    return true;
    }
  }
}
