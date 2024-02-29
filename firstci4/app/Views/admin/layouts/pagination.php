<?php $pager->setSurroundCount(10) ?>
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            <ul class="pagination">
                <?php if($pager->hasPrevious()) : ?>
                <li class="paginate_button page-item previous" id="example2_previous"><a href="<?= $pager->getFirst() ?>" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <?php endif; ?>

                <?php foreach($pager->links() as $link): ?>
                    <li class="paginate_button page-item <?= $link['active'] ? " active" : "" ?>">
                    <a href="<?= $link['uri'] ?>" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link"><?= $link['title'] ?>
                </a></li>
                <?php  endforeach; ?>

                <?php if($pager->hasNext()) : ?>
                <li class="paginate_button page-item next" id="example2_next"><a href="<?= $pager->getLast() ?>" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
