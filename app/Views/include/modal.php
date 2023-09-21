<?php 
if((isset($actionSection) && $actionSection === 'Update') || isset($errors['Section'])){
    $display = '';
}
else{
    $display = 'hidden';
}
?>

<div class="modal-container flex <?= $display ?> items-center justify-center fixed top-0 left-0 w-full h-full">
    
    <div id="myModal" class="modal-content bg-white shadow-md rounded-lg p-6 w-1/2">
        <span class="close absolute top-2 right-2 text-gray-600 cursor-pointer" onclick="closeModal()">&times;</span>
        <h1 class="block text-center font-semibold text-black font-customsb text-2xl cursor-default"><?= isset($action) ? $action : 'Create' ?> an Account</h1>
        <form action="<?= base_url('add') ?>" method="post" id="form">
            <div class="mt-5">
                <input type="hidden" name="id" value="<?= isset($val['id']) ? esc($val['id']) : '' ?>">
                <label for="Section" class="block text-label mb-2 font-custom text-sm font-semibold">SECTION NAME <span class="text-req text-lg"> *</span></label> 
                    <input type="text" id="Section" placeholder="Enter section name" name="Section" value="<?= isset($val['Section']) ? $val['Section'] : '' ?>" class="bg-txtbx text-base w-full text-white px-2 py-1 focus:border-gray-600 rounded-ave"/>
                <span class="error display-error font-medium text-error font-Notosans text-xs"><?= isset($errors['Section']) ? esc($errors['Section']) : '' ?></span>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-transparent hover:border-blue-500 hover:text-blue-500">Continue</button>
            </div>   
        </form>
    </div>
</div>
