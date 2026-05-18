<?php
include 'db.php';
require 'vendor/autoload.php';


$result =$con -> query('select * from book ');

$p=new TCPDF();
$p ->AddPage();
$p -> setFont('times','I',12);
$p -> Cell(0,10,'book detail',0,1,'C');

$h='<table>
                               <tr>
                                <th >book id</th>
                                <th >book title</th>
                                <th >author name</th>
                                <th >genre</th>
                                <th >avaliable copies</th>
                                
                                
                            </tr>';


while ($row = $result -> fetch_assoc()) {
    $h .='<tr>
    <td>'. $row['bid']  .'</td>
    <td>'. $row['btitle']  .'</td>
    <td>'. $row['aname']  .'</td>
    <td>'. $row['genre']  .'</td>
    <td>'. $row['copies']  .'</td>
    </tr>';
}


$h .='</table>';

$p -> writeHTML($h,true,false,true,false,'');
$p -> Output('book.pdf','D')






















?>