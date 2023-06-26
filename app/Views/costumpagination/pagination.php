<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="pagination">
    <?php if ($pager->hasPrevious()) : ?>
        <li>
            <a href="<?= $pager->getFirst() ?>" class="page-link" aria-label="<?= lang('Pager.first') ?>">
                <span aria-hidden="true"><i class="fa fa-angle-double-left"><?= lang('Pager.first') ?></i></span>
            </a>
        </li>
        <li>
            <a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true"><i class="fa fa-angle-double-right"><?= lang('Pager.previous') ?></i></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <li <?= $link['active'] ? 'class="active"' : '' ?>>
            <a href="<?= $link['uri'] ?>" class="page-link">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li>
            <a href="<?= $pager->getNext() ?>" class="page-link" aria-label="<?= lang('Pager.next') ?>">
                <span aria-hidden="true"><i class="fa fa-angle-double-left"><?= lang('Pager.next') ?></i></span>
            </a>
        </li>
        <li>
            <a href="<?= $pager->getLast() ?>" class="page-link" aria-label="<?= lang('Pager.last') ?>">
                <span aria-hidden="true"><i class="fa fa-fast-forward"><?= lang('Pager.last') ?></i></span>
            </a>
        </li>
    <?php endif ?>
    </ul>
</nav>