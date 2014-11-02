<?

$q=mysql_query("select name, dtl,dt from cmt_post where p_name='".$p_name."' and status='apv' order by dt ");

echo "<table width='90%' border='0' cellspacing='1' cellpadding='4'>";
while($nt=mysql_fetch_array($q)){ 
    $dtl=nl2br($nt['dtl']);
    echo "<tr bgcolor='#f1f1f1'><td>$nt[name]</td><td align=right>".date("d-m-Y",strtotime($nt['dt']))."</td></tr>";
    echo "<tr ><td colspan=2>$dtl</td></tr>";
}
echo "</table>";
?>