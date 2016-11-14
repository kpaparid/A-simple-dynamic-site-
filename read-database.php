
<?php
if (isset($_GET["page"])) {
	$page = $_GET["page"];
	//echo "page: " . $page;
}
else {
	$page = 1;
	//echo "page: 1";
}

$start = ($page-1) * 10; 

include 'create_link.php';

$sql = "SELECT * FROM comments ORDER BY date LIMIT $start, 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //echo "rows:" . $result->num_rows;
    while($row = $result->fetch_assoc()) {
       if ($row["email"] !== '') {
        	echo "<p class = \"comment\"><i><b> " . $row["email"] . "</b></i> said: <b>" . $row["comment"] . "</b>" . "&nbsp;&nbsp;(" . $row["date"] . ")" . "</p>";
        }
        else {
        	echo "<p class = \"comment\"><i><b> " . "Anonymous" . "</b></i> said: <b>" . $row["comment"] . "</b>" . "&nbsp;&nbsp;(" . $row["date"] . ")" . "</p>";	
        }
    }
} else {
    echo "<p class = \"comment\"><b>No comments. Be the first one to leave a comment!</b></p>";
}

$sql = "SELECT * FROM comments";
$result = $conn->query($sql);
$total_records = $result->num_rows ;
$total_pages = ceil($total_records / 10);
echo "<div id=\"pages\">Pages: ";
for ($i=1; $i<=$total_pages; $i++) {
	if ($i == $page) {
	 echo "<span id=\"page_link\">" . $i . "</span>"; 	 
	 //echo "<a id=\"li\" href='comments.php?page=".$i."'>".$i."</a>";
	}	
	else {
      echo "<a href='comments.php?page=".$i."'>".$i."</a> ";
    }
}
echo "</div>";
$conn->close();
?>