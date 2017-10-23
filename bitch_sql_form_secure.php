function sql_form($sql, $sqltype, $sqllink="mysqli") {
	$m = str_replace ('!','',$m);
	$m = str_replace ('\\','',$m);
	$m = str_replace ('INSERT','',$m);
	$m = str_replace ('INTO','',$m);
	$m = str_replace ('SELECT','',$m);
	$m = str_replace ('UPDATE','',$m);
	$m = str_replace ('VALUES','',$m);
	$m = str_replace ('DELETE','',$m);

	if($sqltype == "mysql")
	{
		$mm = mysql_real_escape_string($m, $sqllink);
	}else($sqltype == "mysqli")
	{
		$mm = $sqllink->real_escape_string($m);
	}
	return $mm;
}