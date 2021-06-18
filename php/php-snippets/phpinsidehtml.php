<!-- comparando PHP + HTML com PHP only -->
<?php $example = 0;?>

<?php if ($example): ?>
    <!-- code... -->
<?php elseif ($example): ?>
    <?php if ($example): ?>
        <?php if ($example): ?>
            <!-- code... -->
            <?php if ($example): ?>
                <!-- code... -->
                <?php if ($example): ?>
                    <!-- code... -->
                <?php else: ?>
                    <!-- code... -->
                <?php endif ?>
            <?php else: ?>
                <!-- code... -->
            <?php endif ?>
        <?php else: ?>
            <!-- code... -->
        <?php endif ?>
    <?php else: ?>
        <!-- code... -->
    <?php endif ?>
<?php else: ?>
    <!-- code... -->
<?php endif ?>

<?php
    if ($example)
    {
        # code...
    } elseif ($example) {
        if ($example)
        {
            if ($example)
            {
                # code...
                if ($example)
                {
                    # code...
                    if ($example)
                    {
                        # code...
                    } else {
                        # code...
                    }
                } else {
                    # code...
                }
            } else {
                # code...
            }
        } else {
            # code...
        }
    } else {
        # code...
    }
?>
<!-- comparando PHP + HTML com PHP only -->