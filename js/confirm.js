function confirmDelete()
{	
	var test = confirm("Are you sure you wish to delete this record?  Once it's gone, it's gone for good!");
	
	if (test)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function confirmUpdate()
{
	var test = confirm("Are you sure you wish to modify this record?");
	
	if (test)
	{
		return true;
	}
	else
	{
		return false;
	}
}
