<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pizza</title>
    <link rel="icon" href="./images/favicon.png" type="image/png">
</head>
<body >
    <?php include("navbar.php") ?>
    <div class="flex flex-col items-center justify-center bg-yellow-100">

    <div class="addPizzaForm  flex flex-col items-center justify-center  w-100 h-110 ">
        <h1 class="text-4xl font-bold p-5">Add a Pizza</h1>
        <form action="" class="flex flex-col border border-black rounded-md bg-yellow-200 p-5">
            <label for="">Your Email</label>
            <input type="text" class="border border-black" >

            <label for="">Pizza Title</label>
            <input type="text" class="border border-black">

            <label for="">Ingredients</label>
            <input type="text" class="border border-black">

            <input type="submit" class="border border-black m-10 bg-blue-50 hover:bg-blue-100 hover:cursor-pointer rounded-md">
        </form>
    </div>
    </div>


    <?php include("footer.php") ?>
    
</body>
</html>