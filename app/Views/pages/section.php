<?php $this->extend('main'); ?>
<?php $this->section('body'); 

$isUpdate = isset($val['Section']);
$fields = ['Section'];
$fieldValues = [];
$fieldColors = [];

foreach ($fields as $field) {
    $fieldValue = isset($val[$field]) ? $val[$field] : '';
    $fieldValue = $isUpdate ? $val[$field] : $fieldValue;
    $fieldValues[$field] = $fieldValue;

    if (isset($errors[$field])) {
        $fieldColors[$field] = 'border border-input-error rounded-ave';
    } elseif ($fieldValue === '' || $fieldValue === null) {
        $fieldColors[$field] = '';
    } else {
        $fieldColors[$field] = 'border border-input-success rounded-ave';
    }
}
?>
<h1 class="text-center font-semibold text-txt font-customsb text-2xl cursor-default">List of Sections</h1>

<div class="mt-8 overflow-x-auto">
    <table class="w-full border-collapse border border-white">
        
        <thead>
            <tr>
                <th class="px-4 py-2 text-center bg-txtbx text-white font-semibold cursor-default">Section Name</th>
                <th class="px-4 py-2 text-center bg-txtbx text-white font-semibold cursor-default">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sections as $section): ?>
                <tr class="group hover:bg-button">
                    <td class="px-4 py-2 text-white cursor-default"><?= $section['Section'] ?></td>
                    <td class="px-4 py-2 text-white flex justify-center items-center gap-10"> 
                        <a href="/editSection/<?= $section['id'] ?>"><img src="/assets/icons/edit.svg" class="hover:scale-125 transition-transform ease-in-out duration-300" alt="Edit Icon" width="24" height="24"></a>
                        <a href="/deleteSection/<?= $section['id'] ?>"><img src="/assets/icons/outline-delete.svg" class="hover:scale-125 transition-transform ease-in-out duration-300" alt="Delete Icon" width="26" height="26"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>  
</div>
<div class="mt-3 flex justify-between items-center">
    <div>
        <button onclick="openModal()" class=" text-link font-Notosans text-sm hover:underline">Add Section</button>
    </div>
</div>

<?php $this->endSection(); ?>