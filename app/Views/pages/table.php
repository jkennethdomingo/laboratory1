<?php $this->extend('main'); ?>
<?php $this->section('body'); ?>
<h1 class="text-center font-semibold text-txt font-customsb text-2xl cursor-default">List of Students</h1>

<div class="mt-8 overflow-x-auto">
    <table class="w-full border-collapse border border-white">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left bg-txtbx text-white font-semibold cursor-default">Student Name</th>
                <th class="px-4 py-2 text-left bg-txtbx text-white font-semibold cursor-default">Gender</th>
                <th class="px-4 py-2 text-left bg-txtbx text-white font-semibold cursor-default">Course</th>
                <th class="px-4 py-2 text-left bg-txtbx text-white font-semibold cursor-default">Section</th>
                <th class="px-4 py-2 text-left bg-txtbx text-white font-semibold cursor-default">Year</th>
                <th class="px-4 py-2 text-center bg-txtbx text-white font-semibold cursor-default">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr class="group hover:bg-button">
                    <td class="px-4 py-2 text-white cursor-default"><?= $student['StudName'] ?></td>
                    <td class="px-4 py-2 text-white cursor-default"><?= $student['StudGender'] ?></td>
                    <td class="px-4 py-2 text-white cursor-default"><?= $student['StudCourse'] ?></td>
                    <td class="px-4 py-2 text-white cursor-default"><?= $student['StudSection'] ?></td>
                    <td class="px-4 py-2 text-white cursor-default"><?= $student['StudYear'] ?></td>
                    <td class="px-4 py-2 text-white flex justify-center items-center gap-10"> 
                        <a href="/edit/<?= $student['id']?>"><img src="/assets/icons/edit.svg" class="hover:scale-125 transition-transform ease-in-out duration-300" alt="Edit Icon" width="24" height="24"></a>
                        <a href="/delete/<?= $student['id']?>"><img src="/assets/icons/outline-delete.svg" class="hover:scale-125 transition-transform ease-in-out duration-300" alt="Edit Icon" width="26" height="26"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>  
</div>
<div class="pagination mt-4 flex flex-row justify-start">
    <?= $pager->links('default', 'pagination') ?>
</div>
<div class="mt-3 flex justify-between items-center">
    <div>
        <span class="text-center text-sub-header mt-2 font-Notosans text-sm cursor-default">Create new account?</span>
        <a href="/" class="text-link font-Notosans text-sm hover:underline">Register</a>
    </div>
</div>
<?php $this->endSection(); ?>
