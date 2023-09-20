<?php $pager->setSurroundCount(2) ?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <ul class="pagination flex flex-row">
        <?php if ($pager->hasPreviousPage()) : ?>
            <li>
                <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?> " class="px-2 py-1 border mr-1 text-white hover:bg-button">
                    <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>" class="px-2 py-1 border mr-1 text-white hover:bg-button">
                    <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li>
                <a href="<?= $link['uri'] ?>" class="px-2 py-1 border mr-1 text-white hover:bg-button <?= $link['active'] ? 'bg-blue-500 text-white font-bold' : '' ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
            <li>
                <a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>" class="px-2 py-1 border mr-1 text-white hover:bg-button">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="px-2 py-1 border mr-1 text-white hover:bg-button">
                    <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>
