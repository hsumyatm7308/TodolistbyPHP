
<?php 

// session_start();
ini_set('display_errors', 1);

require_once("database.php"); 
require_once("create.php"); 

try{

   $stmt =  $conn->prepare("SELECT id,task FROM todolist");
   $stmt->execute();

   $stmt

}catch(Exception $e){
    "Found Error : ".$e->getMessage();
}

?>








<!-- update to do  -->
<form action="" method="post" class="mt-3" enctype="multipart/form-data">
    <h3 class="text-gray-400 ml-7 mb-1">To do</h3>


    <?php  while($row = $stmt->fetchAll() :) ?>
    <div name="taskitems" class="w-full h-auto flex justify-center items-center p-1">


        <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center p-3">
            <span>
                <i class="fa-regular fa-circle-check"></i>
                <span class="ml-1"><?php echo $row['task'] ?></span>
            </span>

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </div>
        </div>



    </div>

    <div class="w-full h-auto flex justify-center items-center p-1">

        <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center p-3">

            <span>
                <i class="fa-regular fa-circle-check"></i>
                <span class="ml-1">to do homework</span>
            </span>

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>

            </div>

        </div>



    </div>


   
</form>