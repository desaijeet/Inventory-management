function validate_uid(field,alerttxt)
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
    alert("Password must be 6-8 characters long");return false;
    }
  else if(value.length<6 || value.length>8)
     	{
     		alert("Password must be 6-8 characters long");
     		return false;
     	}
   
   else
   		{	
			pwd = value;	
			return true;
		}
  }
}


function validate_form(thisform)
{
with (thisform)
	{
	if (validate_uid(uid,"Enter id")==false)
  		{
		uid.focus();
		return false;
		}

	if (validate_pw(pw,"Password must be 6-8 characters long")==false)
  		{
		pw.focus();
		return false;
		}


	}
}
