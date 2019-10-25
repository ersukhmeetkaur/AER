<style>
.review{
    background-color:black !important;
    color:white;
}
</style>
<div>
<?php
$query="select count(*) from student";
$result=mysqli_query($conn,$query);
$row = $result->fetch_assoc();
$n_appid_student=$row['count(*)'];
echo "Number of appids in student:".$n_appid_student."<br>";

$query="select count(*) from regist where usertype='s'";
$result=mysqli_query($conn,$query);
$row = $result->fetch_assoc();
$n_s_regist=$row['count(*)'];
echo "Number of student in regist:".$n_s_regist."<br>";

$query1="select * from student";
$query2="select * from regist where usertype='s'";
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);

echo "<br><br>------Scanning student table-------<br>";
$i=0;
$n_nf=0;
$n_ok=0;
$n_error=0;
$n_nf2=0;
$n_ok2=0;
$n_error2=0;
$flag=0;
while($row1 = $result1->fetch_assoc())
{
    $flag=0;
    echo "###".$i++."###<br>";
    $appid = $row1['app_id'];
    $query="select count(*) from regist where username='$appid'";
    $result=mysqli_query($conn,$query);
    $row = $result->fetch_assoc();
    $n_appid_regist=$row['count(*)'];
    switch($n_appid_regist)
    {
        case '0':echo "!Not found in regist:".$appid."<br>";
                $n_nf++;
                $flag=1;
        break;
        case '1':$n_ok++;
        break;
        default:$n_error++;
                $flag=1;
        break;
    }
    $query="select count(*) from teammember where app_id='$appid'";
    $result=mysqli_query($conn,$query);
    $row = $result->fetch_assoc();
    $n_appid_teammember=$row['count(*)'];
    $query3="select count(*) from teammember where app_id='$appid' and roll='Team Leader'";
    $result3=mysqli_query($conn,$query3);
    $row3 = $result3->fetch_assoc();
    $n_TeamLeader_teammember=$row3['count(*)'];
    $query4="select member_name from teammember where app_id='$appid' and roll='Team Leader'";
    $result4=mysqli_query($conn,$query4);
    $row4 = $result4->fetch_assoc();
    $membername_TeamLeader_teammember=$row4['member_name'];
    switch($n_appid_teammember)
    {
        case '0':echo "!Not found in teammember:".$appid."<br>";
                $n_nf2++;$flag=1;
            break;
        default:
                $query5="select spoc_name from student where app_id='$appid'";
                $result5=mysqli_query($conn,$query5);
                $row5 = $result5->fetch_assoc();
                $spocname_appid_student=$row5['spoc_name'];
                if($membername_TeamLeader_teammember!=$spocname_appid_student)
                {
                    echo "!app_id:".$appid."\tTeam Leader name:".$membername_TeamLeader_teammember." spoc name:".$spocname_appid_student."<br>";
                    $flag=1;
                }
                if($n_TeamLeader_teammember=='1')
                    $n_ok2++;
                else
                {
                    echo "!app_id:".$appid."\tNo of Team Leaders:".$n_TeamLeader_teammember."<br>";
                    $n_error2++;
                    $flag=1;
                }
            break;
    }
}
echo "*COUNTS*<br>";
echo "Not found in regist:".$n_nf."<br>";
echo "Found in regist:".$n_ok."<br>";
echo "Found Duplicates/Error:".$n_error."<br>";
echo "Not found in teammember:".$n_nf2."<br>";
echo "Found single Team Leader in teammember:".$n_ok2."<br>";
echo "Found Duplicates/Error:".$n_error2."<br>";

echo "<br><br>--Scanning regist table--<br>";
$n_nf=0;
$n_ok=0;
$n_error=0;
while($row2 = $result2->fetch_assoc())
{
    $appid = $row2['username'];
    $query="select count(*) from student where app_id='$appid'";
    $result=mysqli_query($conn,$query);
    $row = $result->fetch_assoc();
    $n_appid_regist=$row['count(*)'];
    switch($n_appid_regist)
    {
        case '0':echo "Not found in student:".$appid."<br>";
        $n_nf++;
        break;
        case '1':$n_ok++;
        break;
        default:$n_error++;
        break;
    }
}
echo "*COUNTS*<br>";
echo "Not found in student:".$n_nf."<br>";
echo "Found in student:".$n_ok."<br>";
echo "Found Duplicates/Error:".$n_error."<br>";

?>
</div>