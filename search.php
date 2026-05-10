

<?php

$students = [
    ["name" => "Sophia Williams", "average" => 16.80],
    ["name" => "Emma Smith", "average" => 15.20],
    ["name" => "Lucas Brown", "average" => 14.50],
    ["name" => "Olivia Johnson", "average" => 17.10]
];

$search = "";

if(isset($_GET['search'])){
    $search = strtolower(trim($_GET['search']));
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SGM Search</title>

<style>

body{
    font-family: Arial;
    background:#f6f9f5;
    margin:0;
}

.topbar{
    background:white;
    padding:20px;
    border-bottom:1px solid #ddd;
}

.brand{
    font-size:35px;
    color:#035772;
   font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.card{
    width:80%;
    margin:40px auto;
    background:white;
    border-radius:20px;
    padding:20px;
    box-shadow:0 10px 20px rgba(0,0,0,0.08);
}

.searchBar{
    display:flex;
    gap:10px;
}

input{
    flex:1;
    padding:12px;
    border-radius:10px;
    border:1px solid #ccc;
}

button{
    background:#035772;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:10px;
    cursor:pointer;
}

.item{
    padding:15px;
    border:1px solid #ddd;
    border-radius:12px;
    margin-top:15px;
}

</style>
</head>

<body>

<div class="topbar">
    <div class="brand">SGM</div>
</div>

<div class="card">

    <form method="GET" class="searchBar">

        <input 
            type="text" 
            name="search" 
            placeholder="Search student..."
            value="<?php echo $search; ?>"
        >

        <button type="submit">Search</button>

    </form>

<?php

foreach($students as $student){

    if($search == "" || strpos(strtolower($student["name"]), $search) !== false){

        echo "
        <div class='item'>
            <strong>".$student["name"]."</strong><br>
            Average : ".$student["average"]."
        </div>
        ";
    }
}

?>

</div>

</body>
</html>
