<?php
/**
 * Categories listing
 * 
 */
	$total_categories   = osc_count_categories() ;
	$col1_max_cat       = ceil($total_categories/3);
	$col2_max_cat       = ceil(($total_categories-$col1_max_cat)/2);
	$col3_max_cat       = $total_categories-($col1_max_cat+$col2_max_cat);
?>
		<div class="block-content">
				<div class="title">
					<h2><span>Categories</span></h2>
				</div>
                <div class="categories <?php echo 'c' . $total_categories ; ?>">
                    <?php osc_goto_first_category() ; ?>
                    <?php
                        $i      = 1;
                        $x      = 1;
                        $col    = 1;
                        if(osc_count_categories () > 0) {
                            echo '<div class="col c1">';
                        }
                    ?>
                    <?php while ( osc_has_categories() ) { ?>
                        <div class="category">
                            <h1><strong><a class="category cat_<?php echo osc_category_id() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a> <span>(<?php echo osc_category_total_items() ; ?>)</span></strong></h1>
                            <?php if ( osc_count_subcategories() > 0 ) { ?>
                                <ul>
                                    <?php while ( osc_has_subcategories() ) { ?>
                                        <li><a class="category cat_<?php echo osc_category_id() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a> <span>(<?php echo osc_category_total_items() ; ?>)</span></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <?php
                            if (($col==1 && $i==$col1_max_cat) || ($col==2 && $i==$col2_max_cat) || ($col==3 && $i==$col3_max_cat)) {
                                $i = 1;
                                $col++;
                                echo '</div>';
                                if($x < $total_categories) {
                                    echo '<div class="col c'.$col.'">';
                                }
                            } else {
                                $i++ ;
                            }
                            $x++ ;
                        ?>
                    <?php } ?>
               </div>
		</div>