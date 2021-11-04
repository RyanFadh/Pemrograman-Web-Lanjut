<!doctype html>
<html lang="en">

<head>
    <style>
        .pagination>li>a {
            background-color: white;
            color: red;
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            color: red;
            background-color: white;
            border-color: red;
        }

        .pagination>.active>a {
            color: white;
            background-color: red !Important;
            border: solid 1px red !Important;
        }

        .pagination>.active>a:hover {
            background-color: red !Important;
            border: solid 1px red;
        }
    </style>
</head>

<body>
    <?php
    /**
     * @var \CodeIgniter\Pager\PagerRenderer $pager
     */
    $pager->setSurroundCount(2);
    ?>
    <nav aria-label="<?= lang('Pager.pageNavigation') ?>">
        <ul class="pagination justify-content-center text-danger">
            <?php if ($pager->hasPrevious()) : ?>
                <li class="page-item">
                    <a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="<?= lang('Pager.previous') ?>">
                        <span>«</span>
                    </a>
                </li>
            <?php endif ?>

            <?php foreach ($pager->links() as $link) : ?>
                <li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
                    <a href="<?= $link['uri'] ?>" class="page-link">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>

            <?php if ($pager->hasNext()) : ?>
                <li class="page-item">
                    <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </nav>
</body>

</html>