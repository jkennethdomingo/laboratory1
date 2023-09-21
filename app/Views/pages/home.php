<?php

$this->extend('main');
$this->section('body');

$isUpdate = isset($val['id']);
$fields = ['StudName', 'StudGender', 'StudCourse', 'StudSection', 'StudYear'];

$fieldValues = [];
$fieldColors = [];

foreach ($fields as $field) {
    $fieldValue = isset(${$field}) ? ${$field} : '';
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
<h1 class="block text-center font-semibold dark:text-txt text-white-txt dark:text-white  dark:text-label font-customsb text-2xl cursor-default"><?= isset($action) ? $action : 'Create' ?> an Account</h1>
<form action="<?=base_url('save')?>" method="post" id="form">
    <div class="mt-5">
        <input type="hidden" name="id" value="<?= isset($val['id']) ? $val['id'] : '' ?>">
        <label for="StudName" class="block text-white-txt dark:text-white  dark:text-label mb-2 font-custom text-sm font-semibold">STUDENT NAME <span class="text-req text-lg"> *</span></label> 
        <input type="text" id="StudName" placeholder="Enter your name" name="StudName" value="<?= isset($errors['StudName']) ? '' :  $fieldValues['StudName'] ?>" class=" text-base w-full text-white-txt dark:text-white dark:bg-txtbx px-2 py-1 focus:border-gray-600 rounded-ave <?=  $fieldColors['StudName'] ?>"/>
        <span class="error display-error font-medium text-error font-Notosans text-xs"><?= isset($errors['StudName']) ? esc($errors['StudName']) : '' ?></span>
    </div>
    <div class="mt-3">
        <label for="StudGender" class="block text-white-txt dark:text-white  dark:text-label mb-2 font-custom text-sm font-semibold">GENDER <span class="text-req text-lg"> *</span></label>
        <select id="StudGender" name="StudGender" class="  text-base w-full text-white-txt dark:text-white dark:bg-txtbx px-2 py-1 focus:border-gray-600 rounded-ave <?= $fieldColors['StudGender'] ?>">
            <option disabled selected>Select a Gender</option>
            <option value="Male" <?= (isset($fieldValues['StudGender']) && $fieldValues['StudGender'] === 'Male') ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= (isset($fieldValues['StudGender']) && $fieldValues['StudGender'] === 'Female') ? 'selected' : '' ?>>Female</option>
            <option value="Other" <?= (isset($fieldValues['StudGender']) && $fieldValues['StudGender'] === 'Other') ? 'selected' : '' ?>>Other</option>
        </select>
        <span class="error display-error font-medium text-error font-Notosans text-xs"><?= isset($errors['StudGender']) ? esc($errors['StudGender']) : '' ?></span>
    </div>
    <div class="mt-3">
        <label for="StudCourse" class="block text-white-txt dark:text-white dark:text-label mb-2 font-custom text-sm font-semibold">COURSE <span class="text-req text-lg"> *</span></label>
        <select id="StudCourse" name="StudCourse" class="  text-base w-full text-white-txt dark:text-white dark:bg-txtbx px-2 py-1 focus:border-gray-600 rounded-ave <?= $fieldColors['StudCourse'] ?>">
            <option disabled selected>Select a Course</option>
            <option value="Course1" <?= (isset($fieldValues['StudCourse']) && $fieldValues['StudCourse'] === 'Course1') ? 'selected' : '' ?>>Course 1</option>
            <option value="Course2" <?= (isset($fieldValues['StudCourse']) && $fieldValues['StudCourse'] === 'Course2') ? 'selected' : '' ?>>Course 2</option>
            <option value="Course3" <?= (isset($fieldValues['StudCourse']) && $fieldValues['StudCourse'] === 'Course3') ? 'selected' : '' ?>>Course 3</option>
        </select>
        <span class="error display-error font-medium text-error font-Notosans text-xs"><?= isset($errors['StudCourse']) ? esc($errors['StudCourse']) : '' ?></span>
    </div>
    <div class="mt-3">
        <label for="StudSection" class="block text-white-txt dark:text-whitex dark:text-label mb-2 font-custom text-sm font-semibold">SECTION <span class="text-req text-lg"> *</span></label>
        <select id="StudSection" name="StudSection" class="  text-base w-full text-white-txt dark:text-white dark:bg-txtbx px-2 py-1 focus:border-gray-600 rounded-ave <?= $fieldColors['StudSection'] ?>">
            <option disabled selected>Select a Section</option>
            <?php foreach ($sections as $section): ?>
                <option value="<?= $section['Section'] ?>" <?= (isset($fieldValues['StudSection']) && $fieldValues['StudSection'] === $section['Section']) ? 'selected' : '' ?>>
                    <?= $section['Section'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <span class="error display-error font-medium text-error font-Notosans text-xs"><?= isset($errors['StudSection']) ? esc($errors['StudSection']) : '' ?></span>
    </div>
    <div class="mt-3">
        <label for="StudYear" class="block text-white-txt dark:text-white dark:text-label mb-2 font-custom text-sm font-semibold">YEAR <span class="text-req text-lg"> *</span></label> 
        <input type="number" id="StudYear" name="StudYear" min="1" max="4" placeholder="Enter what year you are in" value="<?= isset($errors['StudYear']) ? '' :  $fieldValues['StudYear'] ?>" class=" text-base w-full text-white-txt dark:text-white dark:bg-txtbx px-2 py-1 focus:border-gray-600 rounded-ave <?=  $fieldColors['StudYear'] ?>"/>
        <span class="error display-error font-medium text-error font-Notosans text-xs"><?= isset($errors['StudYear']) ? esc($errors['StudYear']) : '' ?></span>
    </div>
    <div class="mt-4">
        <button type="submit" class="font-Notosans border-2 border-white-btn bg-white-btn text-white py-1 w-full rounded-sm hover:bg-transparent hover:text-white-txt dark:text-white dark:bg-txtbx-btn text-base">Continue</button>
    </div>     
</form>
<div class="mt-2 flex justify-between items-center">
</div>
<?php $this->endSection(); ?>

