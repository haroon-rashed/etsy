
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.3f0e24d8d47348843868d0aee7d70232?rik=Ygn8rCh%2bYpzEZA&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2flimav%2fflat-gradient-social%2f512%2fEtsy-icon.png&ehk=K%2fjwdi0Kjfar8sHkGY8p1fqsx0bFlJIqLzfNw8npqjc%3d&risl=&pid=ImgRaw&r=0">
    <?php
    include "../bootstrap.php";
    ?>
    <link rel="stylesheet" href="../style.css">

    <style>
        body{
            overflow: hidden !important ;
        }
    </style>
    <title>Document</title>
</head>
<body>


<?php
include "./popup.php";
displayMessage('category_success', 'success');
?>

<div class="" style="background-color: #F2EDF3">
    <?php
    include "admin_nav.php";
    ?>
    <div class="row">
        <div class=" col-xl-2 d-none d-xl-block bg-white p-0 shadow" style="height: 80vh; overflow-y : scroll;">
      <?php
      include "./sidebar.php";
      ?>
    </div>

    <div class="col-xl-10  my-5"   style="height: 80vh; overflow-y: scroll;">
      <form action="./add_product.php" method="POST" enctype="multipart/form-data">
        <div class="  p-1">
            <div class="row justify-content-between">
                <div class="col-6 flex-column ">
                    <h3>Add Products</h3>
                    <p class="text-secondary m-0">Lorem ipsum dolor sit amet.</p>
                </div>
                <button   class="btn col-lg-2 col-md-3 col-sm-4 test-semibold text-white px-2 py-2" style="background-color: #F1641E;"><i class="bi bi-plus"></i>Add Product</button>
            </div>

            <div class="row">
                <div class="col-md-8 py-3">
                    <div class="card shadow p-3">
                    <input type="text" name="product-name" placeholder="Search Products" class="form-control">
                    <div class="d-flex gap-2 py-4" >
                    <input type="color" name="color" placeholder="" class="form-control-color w-100">
                    <input type="text" name="barcode" placeholder="Search Products Barcode" class="form-control w-100">
                    </div>



                    <div class="card">
    <div class="card-header w-80">
        <div class="d-flex justify-content-between gap-3 icons" style="overflow-x: scroll; width: 90%">
            <button type='button' onclick="handleEditing(this,'bold')" class="btn m-0 d-flex align-items-center justify-content-between edit-operation">
                <i class="options bi bi-type-bold"></i>
            </button>
            <button type='button' onclick="handleEditing(this,'line-through')" class="btn m-0 d-flex align-items-center justify-content-between edit-operation">
                <i class="options bi bi-stripe"></i>
            </button>
            <button type='button' onclick="handleEditing(this,'underline')" class="btn m-0 d-flex align-items-center justify-content-between edit-operation">
                <i class="options bi bi-type-underline"></i>
            </button>
            <button type='button' onclick="handleEditing(this,'italic')" class="btn m-0 d-flex align-items-center justify-content-between edit-operation">
                <i class="options bi bi-type-italic"></i>
            </button>
            <button type='button' onclick="handleEditing(this,'justifyLeft')" class="btn m-0 d-flex align-items-center justify-content-between edit-operation">
                <i class="options bi bi-text-left"></i>
            </button>
            <button type='button' onclick="handleEditing(this,'justifyCenter')" class="btn m-0 d-flex align-items-center justify-content-between edit-operation">
                <i class="options bi bi-text-center"></i>
            </button>
            <button type='button' onclick="handleEditing(this,'justifyFull')" class="btn m-0 d-flex align-items-center justify-content-between edit-operation">
                <i class="options bi bi-justify"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <input type="text" name="editor-input" value="" class=" editor-input">
        <div class="my-2 editor-text" contenteditable="true">Hey there! I'm here</div>
    </div>
</div>

                </div>


                <div class="card p-4 my-3">
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <h6>Add Prducts</h6>
                        <h6>Add Prducts by URL</h6>
                    </div>
                    <input type="file" name="image-input" style="visibility: hidden;" class="form-control image-input">
                    <div class="image-div rounded-2 p-2" style="border: 2px dashed lightgray;">
                    <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                        <div class="d-flex-align-items-center justify-content-center bg-secondary px-3 py-2">
                            <i class="bi bi-upload" style="color: white;"></i>
                        </div>
                        <h4 class="text-gray  text-center">Drag and Drop Your Images</h4>
                        <p class="text-gray text-center">OR</p>
                        <button type="button" class="btn outline-orange rounded-3">Add Images</button>
                    </div>
                    </div>



                    <div class="image-preview d-none py-3 d-flex rounded-3 justify-content-between align-items-center border my-3">
                       <div class="d-flex">
                        <img src="https://th.bing.com/th/id/R.f48ceff9ab3322d4e84ed12a44c484d1?rik=0KQ6OgL4T%2b9uCA&riu=http%3a%2f%2fwww.photo-paysage.com%2falbums%2fuserpics%2f10001%2fCascade_-15.JPG&ehk=kx1JjE9ugj%2bZvUIrjzSmcnslPc7NE1cOnZdra%2f3pJEM%3d&risl=1&pid=ImgRaw&r=0" width="40px" height="40px" class="image-image" alt="">
                        <div class="d-flex flex-column">
                            <h6 class="image-name m-0">vif</h6>
                            <p class="image-size m-0">5433</p>
                        </div>
                    </div>
                    <i class="bi bi-x image-close fs-3" ></i>
                    </div>
                </div>

            </div>
            
                            <div class="col-md-4 py-3">
                                <div class="card p-4">
                                <h4>Pricing</h4>
                                <input type="text" name="basePrice" placeholder="Base Price" class="form-control my-2">
                                <input type="text" name="discountPrice" placeholder="Discount Price" class="form-control my-2">
                                <div class="d-flex gap-2 align-item-center">
                                    <input name="tax" type="checkbox" value="true";  class="form-check">
                                    <p class="m-0">Change tax on this product</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-gray">
                                        IN Stock
                                    </p>
                                    <input type="checkbox" value="true" style="visibility: hidden;" name="stock" id="">
                                    <div class="switch rounded-pill">
                                        <div class="switch-btn"></div>
                                    </div>

                                </div>

                                </div>

                                <div class="card my-3 p-4 border-0">
    <h4 class="text-gray">Select Category</h4>
    <select name="slect-category" class="form-control">
        <option name="category" selected disabled>Select Category</option>
<?php
include './config.php';
$select = "SELECT * FROM category";
$result = mysqli_query($connect, $select);
foreach($result as $item){
?>
<option value="<?php echo $item['id']?>">
    <?php echo $item['name']?>
</option>



<?php } ?>
    </select>

    
    <select name="select-status" class="form-control my-2">
        <option name="category" selected disabled>Select Category</option>

        <option value="">Active</option>
        <option value="">IN Active</option>
        <option value="">Schedule</option>
       
    </select>



    <input type="text" name="tags" placeholder="Tags Fashion Etc" class="form-control">
</div>

        </div>
      </form>
    </div>
    </div>
    </div>




    <script>
        let _switch = document.querySelector(".switch");
        let switch_btn = document.querySelector(".switch-btn");
        let stock = document.querySelector("input[name='stock']");
        let tax = document.querySelector("input[name='tax']");
        let options = document.querySelectorAll(".options")
        let editor_options = document.querySelectorAll(".editor-operation");
        let image_input = document.querySelector(".image-input");
        let image_div = document.querySelector(".image-div");
        let image_preview = document.querySelector(".image-preview");
        let image_name = document.querySelector(".image-name");
        let image_size = document.querySelector(".image-size");
        let image_image = document.querySelector(".image-image");
        let image_close = document.querySelector(".image-close");
        let text_editor = document.querySelector(".editor-text");
        let editor_input = document.querySelector(".editor-input");

        stock.setAttribute("checked",true);


        tax.addEventListener("change", ()=>{
            if(tax.value == 'true'){
                tax.value = false;
            }else{
                tax.value = true;
            }
        })



        const handleEditing = (button, styleName) => {
        // Toggle active class on the button
        let child = button.children[0];
        child.classList.toggle("active");

        // Get the editor-text element
        const editor = document.querySelector(".editor-text");
        if (!editor) {
            console.error("Editor element not found!");
            return;
        }

        // Apply the style using execCommand
        document.execCommand(styleName, false, null);

        // Update the hidden input value
        const editorInput = document.querySelector(".editor-input");
        if (editorInput) {
            editorInput.value = editor.innerHTML;
        }
    };

    // Update the hidden input on keyup
    const textEditor = document.querySelector(".editor-text");
    const editorInput = document.querySelector(".editor-input");

    if (textEditor) {
        textEditor.addEventListener("keyup", () => {
            if (editorInput) {
                editorInput.value = textEditor.innerHTML;
                console.log(editorInput.value);
            }
        });
    }

        _switch.addEventListener("click", ()=>{
            switch_btn.classList.toggle("move-btn");
            stock.checked = !stock.checked;

            if(stock.value == 'true'){
                stock.value = false;
            }else{
                stock.value = true;
            }
        })
        image_div.addEventListener('click', ()=>{
            image_input.click();
        })

        image_input.addEventListener('change', (e) => {
    image_preview.classList.remove("d-none");

    let image = e.target.files[0];
    let img_url = URL.createObjectURL(image);
    let img_name = image.name;
    let img_size = image.size / 1024;

    image_name.innerHTML = img_name;
    image_size.innerHTML = `${img_size.toFixed(2)} KB`; // Rounded to 2 decimal places
    image_image.src = img_url;
});
image_close.addEventListener('click', ()=>{
    image_preview.classList.add("d-none");
})

    </script>


    
</body>
</html>