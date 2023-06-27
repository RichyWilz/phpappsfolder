<?PHP 
$con = mysqli_connect('localhost', 'root', '', 'mydb');

if($con){
    $sql = "SELECT * from users ";
    $result = mysqli_query($con, $sql);
    $response = array();

    if($result){
        $x = 0;
        while($row=mysqli_fetch_assoc($result)){
            $response[$x]['id'] = $row['id'];
            $response[$x]['name'] = $row['name'];
            $response[$x]['age'] = $row['age'];
            $response[$x]['email'] = $row['email'];
            $x++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    } 
}else echo 'db connection failed';

?>