//deletion confirmation
function delconfirm(record, recid)
{
	conf=confirm("Are you sure you want to delete this "+record+"?");
	if(conf)
	{
		//window.location.href="delrecord.php?recid="+recid;
	}
}