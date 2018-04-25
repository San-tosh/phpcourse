
<html>
<head>
    <title>

    </title>
<style>
    .box{
        width:300px;
        height:200px;
        background:green;
        float:left;
        margin:4px;
    }


</style>
</head>
<body>
<?php for($i=0;$i<10;$i++){
  if($i%2==0)
    {
    ?>
    <div class="box" style="width:200px"></div>
      <?php
    }

        else{
      ?>
            <div class="box" style="width:300px"></div>
      <?php}}?>

</body>
</html>
